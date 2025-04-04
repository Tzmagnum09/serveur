<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class LocaleSubscriber implements EventSubscriberInterface
{
    private $defaultLocale;
    private $requestStack;
    private $tokenStorage;

    public function __construct(
        string $defaultLocale = 'fr', 
        RequestStack $requestStack, 
        TokenStorageInterface $tokenStorage
    ) {
        $this->defaultLocale = $defaultLocale;
        $this->requestStack = $requestStack;
        $this->tokenStorage = $tokenStorage;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $session = $request->getSession();

        // 1. Récupérer la langue depuis la session
        $locale = $session->get('_locale', $this->defaultLocale);

        // 2. Vérifier si un utilisateur est connecté
        $token = $this->tokenStorage->getToken();
        if ($token && $token->getUser() instanceof UserInterface) {
            /** @var UserInterface $user */
            $user = $token->getUser();
            
            // Si l'utilisateur a un paramètre de langue, l'utiliser
            if (method_exists($user, 'getLocale') && $user->getLocale()) {
                $locale = $user->getLocale();
            }
        }

        // 3. Vérifier le paramètre de requête (_locale)
        if ($request->query->get('_locale')) {
            $locale = $request->query->get('_locale');
        }

        // 4. Définir la locale pour la requête
        $request->setLocale($locale);
        $session->set('_locale', $locale);
    }

    public static function getSubscribedEvents()
    {
        return [
            // Doit être appelé avant le LocaleListener de Symfony
            KernelEvents::REQUEST => [['onKernelRequest', 20]],
        ];
    }
}