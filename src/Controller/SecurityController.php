<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(
        AuthenticationUtils $authenticationUtils,
        UserRepository $userRepository
    ): Response {
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        
        // Last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        // If there's a username, check if it's an email or a username
        $user = null;
        if ($lastUsername) {
            if (filter_var($lastUsername, FILTER_VALIDATE_EMAIL)) {
                $user = $userRepository->findOneBy(['email' => $lastUsername]);
            } else {
                $user = $userRepository->findOneBy(['username' => $lastUsername]);
            }
            
            // Check if user is verified and approved
            if ($user && (!$user->isVerified() || !$user->isApproved())) {
                if (!$user->isVerified()) {
                    $error = 'Votre adresse email n\'a pas été vérifiée.';
                } else if (!$user->isApproved()) {
                    $error = 'Votre compte n\'a pas encore été approuvé par un administrateur.';
                }
            }
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode peut être vide - elle sera interceptée par la clé de déconnexion de votre pare-feu.');
    }
}
