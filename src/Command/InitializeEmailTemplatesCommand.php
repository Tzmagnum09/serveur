<?php

namespace App\Command;

use App\Service\EmailTemplateService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:initialize-email-templates',
    description: 'Initialize default email templates in database',
)]
class InitializeEmailTemplatesCommand extends Command
{
    private EmailTemplateService $emailTemplateService;

    public function __construct(EmailTemplateService $emailTemplateService)
    {
        parent::__construct();
        $this->emailTemplateService = $emailTemplateService;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Initialisation des templates d\'emails');
        
        $io->info('Début de l\'initialisation des templates d\'emails par défaut...');
        
        $this->emailTemplateService->initializeDefaultTemplates();
        
        $io->success('Templates d\'emails initialisés avec succès !');

        return Command::SUCCESS;
    }
}