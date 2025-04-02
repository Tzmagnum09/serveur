<?php

namespace App\MessageHandler;

use App\Message\SendEmailMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Mime\Email;

#[AsMessageHandler]
class SendEmailMessageHandler
{
    private MailerInterface $mailer;
    private LoggerInterface $logger;

    public function __construct(
        MailerInterface $mailer, 
        LoggerInterface $logger
    ) {
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    public function __invoke(SendEmailMessage $message)
    {
        try {
            $email = (new Email())
                ->from($message->getFrom())
                ->to($message->getTo())
                ->subject($message->getSubject())
                ->html($message->getHtmlContent());
                
            if ($message->getTextContent()) {
                $email->text($message->getTextContent());
            }
            
            $this->mailer->send($email);
            
            $this->logger->info('Email envoyé avec succès', [
                'to' => $message->getTo(),
                'subject' => $message->getSubject()
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de l\'envoi de l\'email', [
                'error' => $e->getMessage(),
                'to' => $message->getTo(),
                'subject' => $message->getSubject()
            ]);
            
            throw $e;
        }
    }
}