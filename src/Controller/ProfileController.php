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
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    #[Route('', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }
    
    #[Route('/edit', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        $user = $this->getUser();
        
        // Formater la date de naissance si elle existe
        $birthDateFormatted = null;
        if ($user->getBirthDate()) {
            $birthDateFormatted = $user->getBirthDate()->format('d/m/Y');
        }
        
        $form = $this->createForm(ProfileFormType::class, $user, [
            'birthdate_formatted' => $birthDateFormatted
        ]);
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
                    // En cas d'erreur, on conserve la date existante
                }
            } else {
                // Si la date est vide, on la met à null
                $user->setBirthDate(null);
            }
            
            $entityManager->flush();
            
            $this->addFlash('success', $translator->trans('profile.flash.profile_updated'));
            
            return $this->redirectToRoute('app_profile');
        }
        
        return $this->render('profile/edit.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }
    
    #[Route('/change-password', name: 'app_profile_change_password')]
    public function changePassword(
        Request $request, 
        UserPasswordHasherInterface $passwordHasher,
        UserRepository $userRepository,
        TranslatorInterface $translator
    ): Response {
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Encodez le nouveau mot de passe
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            
            $userRepository->save($user, true);
            
            $this->addFlash('success', $translator->trans('profile.flash.password_updated'));
            
            return $this->redirectToRoute('app_profile');
        }
        
        return $this->render('profile/change_password.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }
}