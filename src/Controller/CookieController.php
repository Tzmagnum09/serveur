<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CookieController extends AbstractController
{
    #[Route('/api/save-cookie-consent', name: 'app_save_cookie_consent', methods: ['POST'])]
    public function saveConsent(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        // Vous pourriez enregistrer les consentements en BDD ici si nécessaire
        
        return new JsonResponse(['success' => true]);
    }
    
    #[Route('/cookie-preferences', name: 'app_cookie_preferences')]
    public function preferences(): Response
    {
        return $this->render('cookie/preferences.html.twig');
    }
}