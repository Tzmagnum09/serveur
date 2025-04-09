<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use App\Service\EmailTemplateService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;
    private EmailTemplateService $emailService;

    public function __construct(
        EmailVerifier $emailVerifier,
        EmailTemplateService $emailService
    ) {
        $this->emailVerifier = $emailVerifier;
        $this->emailService = $emailService;
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator
    ): Response {
        // Si l'utilisateur est déjà connecté, le rediriger vers la page d'accueil
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }
        
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Traiter la date de naissance
            $birthDateString = $form->get('birthDate')->getData();
            if ($birthDateString) {
                try {
                    // Convertir le format DD/MM/YYYY en DateTime
                    $birthDate = \DateTime::createFromFormat('d/m/Y', $birthDateString);
                    if ($birthDate) {
                        $user->setBirthDate($birthDate);
                    }
                } catch (\Exception $e) {
                    // En cas d'erreur, continuer sans enregistrer la date
                }
            }
            
            // Encoder le mot de passe
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // Définir les rôles par défaut
            $user->setRoles(['ROLE_USER']);
            
            try {
                $entityManager->persist($user);
                $entityManager->flush();

                // Générer la signature pour la vérification d'email
                $signatureComponents = $this->emailVerifier->generateSignature(
                    'app_verify_email',  // Nom de route exact
                    (string)$user->getId(), // Conversion en string pour être sûr
                    $user->getEmail(),
                    ['id' => $user->getId()]
                );
                
                // Envoyer l'email de confirmation
                $this->emailService->sendEmailToUser(
                    'registration_confirmation',
                    $user,
                    [
                        'signedUrl' => $signatureComponents->getSignedUrl(),
                    ]
                );

                $this->addFlash('success', $translator->trans('registration.flash.check_email'));

                return $this->redirectToRoute('app_home');
            } catch (\Exception $e) {
                // En cas d'erreur, ajouter un message flash
                $this->addFlash('error', 'Une erreur est survenue lors de l\'inscription: ' . $e->getMessage());
                
                // Log l'erreur pour débogage
                error_log($e->getMessage());
            }
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(
        Request $request,
        TranslatorInterface $translator,
        UserRepository $userRepository
    ): Response {
        $id = $request->get('id');

        if (null === $id) {
            $this->addFlash('verify_email_error', 'Le paramètre ID est manquant dans l\'URL.');
            return $this->redirectToRoute('app_register');
        }

        $user = $userRepository->find($id);

        if (null === $user) {
            $this->addFlash('verify_email_error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('app_register');
        }

        // Valider la confirmation par email
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));
            return $this->redirectToRoute('app_register');
        }
        
        // Mettre à jour le timestamp de vérification
        $user->setEmailVerifiedAt(new \DateTimeImmutable());
        $userRepository->save($user, true);

        $this->addFlash('success', $translator->trans('registration.flash.email_verified'));

        return $this->redirectToRoute('app_login');
    }
}