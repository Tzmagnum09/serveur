<?php

namespace App\EventListener;

use App\Entity\User;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Http\SecurityEvents;

/**
 * Listener pour stocker la langue de l'utilisateur dans la session
 */
class UserLocaleListener implements EventSubscriberInterface
{
    private RequestStack $requestStack;
    private ?LoggerInterface $logger;

    public function __construct(RequestStack $requestStack, LoggerInterface $logger = null)
    {
        $this->requestStack = $requestStack;
        $this->logger = $logger;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            SecurityEvents::INTERACTIVE_LOGIN => 'onInteractiveLogin',
        ];
    }

    /**
     * @param InteractiveLoginEvent $event
     */
    public function onInteractiveLogin(InteractiveLoginEvent $event): void
    {
        $user = $event->getAuthenticationToken()->getUser();

        if ($user instanceof User) {
            $locale = $user->getLocale();
            $session = $this->requestStack->getSession();
            $session->set('_locale', $locale);
            
            if ($this->logger) {
                $this->logger->info('Locale utilisateur définie à {locale} lors de la connexion', [
                    'locale' => $locale,
                    'user_id' => $user->getId()
                ]);
            }
        }
    }
}