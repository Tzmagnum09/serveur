<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ProfileFormType;
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
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('profile/index.html.twig', [
            'user' => $user,
        ]);
    }
    
    #[Route('/edit', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        // Préparer les données de date de naissance formatées pour le datepicker
        $birthDateFormatted = null;
        if ($user->getBirthDate()) {
            $birthDateFormatted = $user->getBirthDate()->format('d/m/Y');
        }
        
        $form = $this->createForm(ProfileFormType::class, $user, [
            'birthdate_formatted' => $birthDateFormatted,
        ]);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Traitement manuel de la date de naissance
            $birthDateStr = $form->get('birthDate')->getData();
            if (!empty($birthDateStr)) {
                try {
                    $birthDate = \DateTime::createFromFormat('d/m/Y', $birthDateStr);
                    if ($birthDate) {
                        $user->setBirthDate($birthDate);
                    }
                } catch (\Exception $e) {
                    // En cas d'erreur, on ne fait rien
                }
            } else {
                // Si le champ est vide, on met la date de naissance à null
                $user->setBirthDate(null);
            }
            
            $entityManager->flush();
            
            $this->addFlash('success', $translator->trans('profile.flash.updated'));
            
            return $this->redirectToRoute('app_profile');
        }
        
        return $this->render('profile/edit.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }
    
    #[Route('/change-password', name: 'app_profile_change_password')]
    public function changePassword(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        TranslatorInterface $translator
    ): Response {
        $user = $this->getUser();
        
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Encode (hash) le mot de passe en clair
            $encodedPassword = $userPasswordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            );
            
            $user->setPassword($encodedPassword);
            $entityManager->flush();
            
            $this->addFlash('success', $translator->trans('profile.flash.password_updated'));
            
            return $this->redirectToRoute('app_profile');
        }
        
        return $this->render('profile/change_password.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }
}