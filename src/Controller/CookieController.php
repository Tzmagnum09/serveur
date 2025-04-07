<?php
// À placer dans src/Controller/CookieController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CookieController extends AbstractController
{
    /**
     * Page des préférences de cookies
     */
    #[Route('/cookie-preferences', name: 'app_cookie_preferences')]
    public function preferences(): Response
    {
        return $this->render('cookie/preferences.html.twig');
    }

    /**
     * API pour sauvegarder les préférences de cookies (optionnel)
     */
    #[Route('/cookie-consent', name: 'app_cookie_consent', methods: ['POST'])]
    public function saveConsent(Request $request): JsonResponse
    {
        // Cette méthode est optionnelle et permet de sauvegarder les préférences
        // de cookies dans une base de données pour un suivi
        
        $data = json_decode($request->getContent(), true);
        
        // Vous pouvez ici sauvegarder les préférences en base de données
        // ...
        
        return new JsonResponse(['success' => true]);
    }
}