<?php

namespace App\Controller;

use App\Service\AdminPermissionService;
use App\Service\StaticTranslationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/admin/static-translations')]
class StaticTranslationController extends AbstractController
{
    private AdminPermissionService $permissionService;
    private StaticTranslationService $translationService;

    public function __construct(
        AdminPermissionService $permissionService,
        StaticTranslationService $translationService
    ) {
        $this->permissionService = $permissionService;
        $this->translationService = $translationService;
    }

    #[Route('', name: 'app_admin_static_translations')]
    public function index(): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Vérification des permissions
        if (!$this->permissionService->hasPermission($admin, 'translate_content')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        $keys = $this->translationService->getAllKeys();
        
        return $this->render('admin/static_translations/index.html.twig', [
            'keys' => $keys,
        ]);
    }

    #[Route('/edit/{key}', name: 'app_admin_static_translations_edit')]
    public function edit(string $key, Request $request, TranslatorInterface $translator): Response
    {
        $admin = $this->getUser();
        
        if (!$admin || !$admin->isAdmin()) {
            return $this->redirectToRoute('app_login');
        }
        
        // Vérification des permissions
        if (!$this->permissionService->hasPermission($admin, 'translate_content')) {
            $this->addFlash('error', 'Vous n\'avez pas les permissions nécessaires.');
            return $this->redirectToRoute('app_admin_dashboard');
        }
        
        $locales = $this->getParameter('app.locales');
        $translations = [];
        
        foreach ($locales as $locale) {
            $translations[$locale] = $this->translationService->getTranslation($key, $locale);
        }
        
        if ($request->isMethod('POST')) {
            $csrfToken = $request->request->get('_token');
            if ($this->isCsrfTokenValid('edit-static-translation' . $key, $csrfToken)) {
                foreach ($locales as $locale) {
                    $translation = $request->request->get('translation_' . $locale);
                    if ($translation !== null) {
                        $this->translationService->updateTranslation($key, $locale, $translation);
                    }
                }
                
                $this->addFlash('success', $translator->trans('admin.translations.flash.updated'));
                return $this->redirectToRoute('app_admin_static_translations');
            }
        }
        
        return $this->render('admin/static_translations/edit.html.twig', [
            'key' => $key,
            'translations' => $translations,
            'locales' => $locales,
        ]);
    }
}