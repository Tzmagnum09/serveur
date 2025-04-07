<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CookieController extends AbstractController
{
    #[Route('/cookie-preferences', name: 'app_cookie_preferences')]
    public function showPreferences(): Response
    {
        return $this->render('cookie/cookie_preferences.html.twig');
    }

    #[Route('/cookie-consent', name: 'app_cookie_consent', methods: ['POST'])]
    public function saveConsent(Request $request): JsonResponse
    {
        // Vous pouvez sauvegarder le consentement dans une base de données si nécessaire
        // Cette méthode sera appelée par AJAX depuis JavaScript
        return new JsonResponse(['success' => true]);
    }
}