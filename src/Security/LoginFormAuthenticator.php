<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class LoginFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private UrlGeneratorInterface $urlGenerator;
    private UserRepository $userRepository;

    public function __construct(UrlGeneratorInterface $urlGenerator, UserRepository $userRepository)
    {
        $this->urlGenerator = $urlGenerator;
        $this->userRepository = $userRepository;
    }

    public function authenticate(Request $request): Passport
    {
        $username = $request->request->get('username', '');

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $username);

        // Create a custom user loader that checks for both email and username
        $userLoader = function ($identifier) {
            // Check if it's an email
            if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
                $user = $this->userRepository->findOneBy(['email' => $identifier]);
                if ($user) {
                    // Verify user is verified and approved
                    if (!$user->isVerified()) {
                        throw new \Exception('Votre adresse email n\'a pas été vérifiée.');
                    }
                    if (!$user->isApproved()) {
                        throw new \Exception('Votre compte n\'a pas encore été approuvé par un administrateur.');
                    }
                    return $user;
                }
            }

            // Check if it's a username
            $user = $this->userRepository->findOneBy(['username' => $identifier]);
            if ($user) {
                // Verify user is verified and approved
                if (!$user->isVerified()) {
                    throw new \Exception('Votre adresse email n\'a pas été vérifiée.');
                }
                if (!$user->isApproved()) {
                    throw new \Exception('Votre compte n\'a pas encore été approuvé par un administrateur.');
                }
                return $user;
            }

            // If no user found or not verified/approved
            throw new \Exception('Identifiants invalides.');
        };

        return new Passport(
            new UserBadge($username, $userLoader),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Update last login timestamp
        $user = $token->getUser();
        if ($user instanceof User) {
            $user->setLastLoginAt(new \DateTimeImmutable());
            $this->userRepository->save($user, true);
        }
        
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // Redirect based on role
        if ($user instanceof User) {
            if ($user->isSuperAdmin()) {
                return new RedirectResponse($this->urlGenerator->generate('app_super_admin_dashboard'));
            } else if ($user->isAdmin()) {
                return new RedirectResponse($this->urlGenerator->generate('app_admin_dashboard'));
            }
        }

        return new RedirectResponse($this->urlGenerator->generate('app_profile'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
