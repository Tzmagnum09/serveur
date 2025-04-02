<?php
namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class LocaleController extends AbstractController
{
    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale(Request $request, string $locale, EntityManagerInterface $entityManager): Response
    {
        // V�rifier que la locale est valide
        if (!in_array($locale, ['fr', 'en', 'nl', 'de'])) {
            $locale = 'fr';
        }
        
        // Stocker la nouvelle langue dans la session
        $request->getSession()->set('_locale', $locale);
        
        // Si l'utilisateur est connect�, mettre � jour sa pr�f�rence de langue
        $user = $this->getUser();
        if ($user instanceof User) {
            $user->setLocale($locale);
            $entityManager->persist($user);
            $entityManager->flush();
        }
        
        // Rediriger vers la page pr�c�dente ou la page d'accueil
        $referer = $request->headers->get('referer');
        return $referer 
            ? new RedirectResponse($referer) 
            : $this->redirectToRoute('app_home');
    }
}