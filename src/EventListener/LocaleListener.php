<?php
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class LocaleListener 
{
    private $requestStack;
    private $tokenStorage;
    private $priority = 15; // Priorit� inf�rieure � LocaleSubscriber (25)

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

        // R�cup�rer l'utilisateur connect�
        $token = $this->tokenStorage->getToken();
        $user = $token ? $token->getUser() : null;

        // Ne rien faire si la locale est d�j� d�finie par LocaleSubscriber
        if ($request->attributes->has('_locale') || $session->has('_locale')) {
            return;
        }

        // D�finir la locale selon l'utilisateur connect� ou la langue par d�faut
        if ($user && method_exists($user, 'getLocale') && $user->getLocale()) {
            $locale = $user->getLocale();
            $session->set('_locale', $locale);
            $request->setLocale($locale);
        } else {
            $request->setLocale('fr');
        }
    }
}