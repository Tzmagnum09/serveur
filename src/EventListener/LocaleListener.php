<?php
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class LocaleListener 
{
    private $requestStack;
    private $tokenStorage;

    public function __construct(RequestStack $requestStack, TokenStorageInterface $tokenStorage)
    {
        $this->requestStack = $requestStack;
        $this->tokenStorage = $tokenStorage;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $session = $this->requestStack->getSession();

        // Récupérer l'utilisateur connecté
        $token = $this->tokenStorage->getToken();
        $user = $token ? $token->getUser() : null;

        // Définir la locale selon l'ordre de priorité :
        // 1. Langue de session
        // 2. Langue de l'utilisateur connecté
        // 3. Langue par défaut (français)
        if ($session->has('_locale')) {
            $request->setLocale($session->get('_locale'));
        } elseif ($user && method_exists($user, 'getLocale')) {
            $request->setLocale($user->getLocale() ?? 'fr');
        } else {
            $request->setLocale('fr');
        }
    }
}
