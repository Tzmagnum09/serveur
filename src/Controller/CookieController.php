<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CookieController extends AbstractController
{
    /**
     * Enregistre les préférences de cookies
     */
    #[Route('/api/save-cookie-consent', name: 'app_save_cookie_consent', methods: ['POST'])]
    public function saveConsent(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        // Vous pourriez enregistrer ces données en base de données si nécessaire
        // Pour l'instant, nous envoyons juste une réponse de succès
        
        return new JsonResponse(['success' => true]);
    }
}