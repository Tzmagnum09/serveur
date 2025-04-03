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
    private EmailTemplateService $emailService;
    private TokenGeneratorInterface $tokenGenerator;
    
    public function __construct(
        UserPasswordHasherInterface $passwordHasher,
        EmailTemplateService $emailService,
        TokenGeneratorInterface $tokenGenerator
    ) {
        $this->passwordHasher = $passwordHasher;
        $this->emailService = $emailService;
        $this->tokenGenerator = $tokenGenerator;
    }
    
    public function load(ObjectManager $manager): void
    {
        // Créer un super admin
        $superAdmin = new User();
        $superAdmin->setEmail('admin@dmqode.be');
        $superAdmin->setUsername('superadmin');
        
        // Conversion explicite des noms avec UTF-8
        $superAdmin->setFirstName(mb_convert_encoding('Super', 'UTF-8', 'UTF-8'));
        $superAdmin->setLastName(mb_convert_encoding('Admin', 'UTF-8', 'UTF-8'));
        
        $superAdmin->setStreet(mb_convert_encoding('Avenue Charles Gilisquet', 'UTF-8', 'UTF-8'));
        $superAdmin->setHouseNumber('147');
        $superAdmin->setPostalCode('1030');
        $superAdmin->setCity(mb_convert_encoding('Schaerbeek', 'UTF-8', 'UTF-8'));
        $superAdmin->setCountry('BE');
        $superAdmin->setPhoneNumber('+32466904419');
        $superAdmin->setLocale('fr');
        
        // Définir les rôles du super admin
        $superAdmin->setRoles(['ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_USER']);
        
        // Hachage du mot de passe
        $superAdmin->setPassword(
            $this->passwordHasher->hashPassword(
                $superAdmin,
                'Tzkev5276.2'
            )
        );

        // Configurer les paramètres de vérification
        $superAdmin->setIsVerified(true);
        $superAdmin->setIsApproved(true);
        $superAdmin->setEmailVerifiedAt(new \DateTimeImmutable());
        $superAdmin->setApprovedAt(new \DateTimeImmutable());
        
        // Persister le super admin
        $manager->persist($superAdmin);
        $manager->flush();

        // Initialiser les templates d'emails
        $this->emailService->initializeDefaultTemplates();

        // Créer quelques utilisateurs de test
        $testUsers = [
            [
                'email' => 'user1@dmqode.be',
                'username' => 'user1',
                'firstName' => 'Jean',
                'lastName' => 'Dupont',
                'roles' => ['ROLE_USER'],
                'verified' => false,
                'approved' => false
            ],
            [
                'email' => 'admin1@dmqode.be',
                'username' => 'admin1',
                'firstName' => 'Marie',
                'lastName' => 'Durand',
                'roles' => ['ROLE_ADMIN', 'ROLE_USER'],
                'verified' => true,
                'approved' => true
            ]
        ];

        foreach ($testUsers as $userData) {
            $user = new User();
            $user->setEmail($userData['email']);
            $user->setUsername($userData['username']);
            $user->setFirstName(mb_convert_encoding($userData['firstName'], 'UTF-8', 'UTF-8'));
            $user->setLastName(mb_convert_encoding($userData['lastName'], 'UTF-8', 'UTF-8'));
            
            // Adresse factice pour les utilisateurs de test
            $user->setStreet(mb_convert_encoding('Rue de Test', 'UTF-8', 'UTF-8'));
            $user->setHouseNumber('42');
            $user->setPostalCode('1050');
            $user->setCity(mb_convert_encoding('Ville de Test', 'UTF-8', 'UTF-8'));
            $user->setCountry('BE');
            $user->setPhoneNumber('+32987654321');
            $user->setLocale('fr');
            
            $user->setRoles($userData['roles']);
            
            // Mot de passe unique pour chaque utilisateur
            $user->setPassword(
                $this->passwordHasher->hashPassword(
                    $user,
                    'TestPass123!'
                )
            );

            $user->setIsVerified($userData['verified']);
            $user->setIsApproved($userData['approved']);

            if ($userData['verified']) {
                $user->setEmailVerifiedAt(new \DateTimeImmutable());
            }

            if ($userData['approved']) {
                $user->setApprovedAt(new \DateTimeImmutable());
            }

            $manager->persist($user);
        }

        $manager->flush();
    }
}