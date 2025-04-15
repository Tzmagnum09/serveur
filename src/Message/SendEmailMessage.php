<?php

namespace App\Message;

class SendEmailMessage
{
    private string $from;
    private string $to;
    private string $subject;
    private string $htmlContent;
    private ?string $textContent;
    private array $cc;
    private array $bcc;
    private array $attachments;
    
    public function __construct(
        string $from,
        string $to,
        string $subject,
        string $htmlContent,
        ?string $textContent = null,
        array $cc = [],
        array $bcc = [],
        array $attachments = []
    ) {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->htmlContent = $htmlContent;
        $this->textContent = $textContent;
        $this->cc = $cc;
        $this->bcc = $bcc;
        $this->attachments = $attachments;
    }
    
    public function getFrom(): string
    {
        return $this->from;
    }
    
    public function getTo(): string
    {
        return $this->to;
    }
    
    public function getSubject(): string
    {
        return $this->subject;
    }
    
    public function getHtmlContent(): string
    {
        return $this->htmlContent;
    }
    
    public function getTextContent(): ?string
    {
        return $this->textContent;
    }
    
    public function getCc(): array
    {
        return $this->cc;
    }
    
    public function getBcc(): array
    {
        return $this->bcc;
    }
    
    public function getAttachments(): array
    {
        return $this->attachments;
    }
}