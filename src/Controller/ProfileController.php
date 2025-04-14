<?php

namespace App\Controller;

use App\Form\ChangePasswordFormType;
use App\Form\ProfileFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    private UserRepository $userRepository;
    private TranslatorInterface $translator;

    public function __construct(
        UserRepository $userRepository,
        TranslatorInterface $translator
    ) {
        $this->userRepository = $userRepository;
        $this->translator = $translator;
    }
    
    #[Route('', name: 'app_profile')]
    public function index(): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    
    #[Route('/edit', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        // Préparer la date formatée pour le formulaire si elle existe
        $birthDateFormatted = null;
        if ($user->getBirthDate()) {
            $birthDateFormatted = $user->getBirthDate()->format('d/m/Y');
        }
        
        $form = $this->createForm(ProfileFormType::class, $user, [
            'birthdate_formatted' => $birthDateFormatted,
        ]);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Traiter la date de naissance
            $birthDateString = $form->get('birthDate')->getData();
            
            if (!empty($birthDateString)) {
                try {
                    // Format date d/m/Y avec des vérifications strictes pour DateTime
                    $birthDate = \DateTime::createFromFormat('d/m/Y', $birthDateString);
                    
                    // Vérifier si la date est valide
                    if ($birthDate && $birthDate->format('d/m/Y') === $birthDateString) {
                        $user->setBirthDate($birthDate);
                    } else {
                        // Log l'erreur si la date est invalide
                        $errors = \DateTime::getLastErrors();
                        error_log('Erreur lors du traitement de la date: ' . json_encode($errors));
                    }
                } catch (\Exception $e) {
                    // En cas d'erreur, log l'exception
                    error_log('Exception lors du traitement de la date: ' . $e->getMessage());
                }
            } else {
                // Si le champ est vide, effacer la date de naissance
                $user->setBirthDate(null);
            }
            
            // Persister explicitement les changements
            $entityManager->persist($user);
            $entityManager->flush();
            
            $this->addFlash('success', $this->translator->trans('profile.flash.updated'));
            
            return $this->redirectToRoute('app_profile');
        }
        
        return $this->render('profile/edit.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }
    
    #[Route('/change-password', name: 'app_profile_change_password')]
    public function changePassword(
        Request $request,
        PasswordAuthenticatedUserInterface $user,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Encodez le nouveau mot de passe
            $user->setPassword($passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            ));
            
            $entityManager->persist($user);
            $entityManager->flush();
            
            $this->addFlash('success', $this->translator->trans('profile.password.flash.changed'));
            
            return $this->redirectToRoute('app_profile');
        }
        
        return $this->render('profile/change_password.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }
}