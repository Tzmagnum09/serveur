<?php

namespace App\Message;

class SendEmailMessage
{
    private string $from;
    private string $to;
    private string $subject;
    private string $htmlContent;
    private ?string $textContent;
    
    public function __construct(
        string $from,
        string $to,
        string $subject,
        string $htmlContent,
        ?string $textContent = null
    ) {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->htmlContent = $htmlContent;
        $this->textContent = $textContent;
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
}
