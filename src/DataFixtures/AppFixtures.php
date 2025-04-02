<?php
namespace App\DataFixtures;

use App\Entity\User;
use App\Service\EmailTemplateService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    private EmailTemplateService $emailTemplateService;
    private TokenGeneratorInterface $tokenGenerator;
    
    public function __construct(
        UserPasswordHasherInterface $passwordHasher,
        EmailTemplateService $emailTemplateService,
        TokenGeneratorInterface $tokenGenerator
    ) {
        $this->passwordHasher = $passwordHasher;
        $this->emailTemplateService = $emailTemplateService;
        $this->tokenGenerator = $tokenGenerator;
    }
    
    public function load(ObjectManager $manager): void
    {
        // Créer un super admin
        $superAdmin = new User();
        $superAdmin->setEmail('admin@dmqode.be');
        $superAdmin->setUsername('superadmin');
        $superAdmin->setFirstName('Super');
        $superAdmin->setLastName('Admin');
        $superAdmin->setStreet('Rue de l\'Administration');
        $superAdmin->setHouseNumber('1');
        $superAdmin->setPostalCode('1000');
        $superAdmin->setCity('Bruxelles');
        $superAdmin->setCountry('BE');
        $superAdmin->setPhoneNumber('+32123456789');
        $superAdmin->setLocale('fr');
        $superAdmin->setRoles(['ROLE_SUPER_ADMIN']);
        $superAdmin->setPassword(
            $this->passwordHasher->hashPassword(
                $superAdmin,
                'Tzkev5276.2'
            )
        );

        // Générer un token de vérification manuellement
        $verificationToken = $this->tokenGenerator->generateToken();

        // Marquer l'utilisateur comme vérifié et approuvé
        $now = new \DateTimeImmutable();
        $superAdmin->setIsVerified(true);
        $superAdmin->setIsApproved(true);
        $superAdmin->setEmailVerifiedAt($now);
        $superAdmin->setApprovedAt($now);
        
        $manager->persist($superAdmin);
        $manager->flush();  // Flush pour obtenir un ID

        // Envoyer l'email de vérification
        $this->emailTemplateService->sendEmailToUser(
            'registration_confirmation', 
            $superAdmin, 
            [
                'token' => $verificationToken,
                'domain' => 'dmqode.be'
            ]
        );
        
        // Initialiser les templates d'emails
        $this->emailTemplateService->initializeDefaultTemplates();
        
        $manager->flush();
    }
}