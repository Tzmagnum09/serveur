<?php

namespace App\MessageHandler;

use App\Message\SendEmailMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

#[AsMessageHandler]
class SendEmailMessageHandler
{
    private MailerInterface $mailer;
    private LoggerInterface $logger;
    
    public function __construct(MailerInterface $mailer, LoggerInterface $logger)
    {
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
            
            // Ajouter du texte brut si disponible
            if ($message->getTextContent()) {
                $email->text($message->getTextContent());
            }
            
            // Ajouter les destinataires en copie
            foreach ($message->getCc() as $cc) {
                $email->addCc($cc);
            }
            
            // Ajouter les destinataires en copie cachée
            foreach ($message->getBcc() as $bcc) {
                $email->addBcc($bcc);
            }
            
            // Ajouter les pièces jointes
            foreach ($message->getAttachments() as $attachment) {
                if (isset($attachment['path']) && file_exists($attachment['path'])) {
                    $email->attachFromPath(
                        $attachment['path'],
                        $attachment['name'] ?? basename($attachment['path']),
                        $attachment['mime'] ?? 'application/octet-stream'
                    );
                } elseif (isset($attachment['data'])) {
                    $email->attach(
                        $attachment['data'],
                        $attachment['name'] ?? 'attachment',
                        $attachment['mime'] ?? 'application/octet-stream'
                    );
                }
            }
            
            // Envoyer l'email
            $this->mailer->send($email);
            
            // Logger le succès
            $this->logger->info('Email envoyé avec succès', [
                'to' => $message->getTo(),
                'subject' => $message->getSubject()
            ]);
        } catch (\Exception $e) {
            // Logger l'erreur
            $this->logger->error('Erreur lors de l\'envoi de l\'email', [
                'to' => $message->getTo(),
                'subject' => $message->getSubject(),
                'error' => $e->getMessage()
            ]);
            
            // Relancer l'exception pour permettre la gestion des erreurs au niveau supérieur
            throw $e;
        }
    }
}