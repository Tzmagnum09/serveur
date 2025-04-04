<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocaleController extends AbstractController
{
    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale(string $locale, Request $request): Response
    {
        // Liste des locales autorisées
        $authorizedLocales = ['fr', 'en', 'nl', 'de'];

        // Vérifier si la locale est autorisée
        if (!in_array($locale, $authorizedLocales)) {
            $locale = 'fr'; // Locale par défaut
        }

        // Mettre à jour la session
        $request->getSession()->set('_locale', $locale);

        // Si un utilisateur est connecté, mettre à jour sa langue
        $user = $this->getUser();
        if ($user) {
            $user->setLocale($locale);
            $this->getDoctrine()->getManager()->flush();
        }

        // Rediriger vers la page précédente ou la page d'accueil
        $referer = $request->headers->get('referer');
        return $referer 
            ? $this->redirect($referer) 
            : $this->redirectToRoute('app_home');
    }
}