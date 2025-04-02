<?php
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class LocaleListener 
{
    private $requestStack;
    private $tokenStorage;
    private $priority = 15; // Priorité inférieure à LocaleSubscriber (25)

    public function __construct(RequestStack $requestStack, TokenStorageInterface $tokenStorage)
    {
        $this->requestStack = $requestStack;
        $this->tokenStorage = $tokenStorage;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        if (!$event->isMainRequest()) {
            return;
        }
        
        $request = $event->getRequest();
        $session = $this->requestStack->getSession();

        // Récupérer l'utilisateur connecté
        $token = $this->tokenStorage->getToken();
        $user = $token ? $token->getUser() : null;

        // Ne rien faire si la locale est déjà définie par LocaleSubscriber
        if ($request->attributes->has('_locale') || $session->has('_locale')) {
            return;
        }

        // Définir la locale selon l'utilisateur connecté ou la langue par défaut
        if ($user && method_exists($user, 'getLocale') && $user->getLocale()) {
            $locale = $user->getLocale();
            $session->set('_locale', $locale);
            $request->setLocale($locale);
        } else {
            $request->setLocale('fr');
        }
    }
}