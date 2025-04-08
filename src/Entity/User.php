<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
#[UniqueEntity(fields: ['username'], message: 'There is already an account with this username')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'registration.validation.email_required')]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'registration.validation.username_required')]
    #[Assert\Length(
        min: 3,
        max: 30,
        minMessage: 'registration.validation.username_min_length',
        maxMessage: 'registration.validation.username_max_length'
    )]
    private ?string $username = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'registration.validation.last_name_required')]
    private ?string $lastName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'registration.validation.first_name_required')]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'registration.validation.street_required')]
    private ?string $street = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'registration.validation.house_number_required')]
    private ?string $houseNumber = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $boxNumber = null;

    #[ORM\Column(length: 20)]
    #[Assert\NotBlank(message: 'registration.validation.postal_code_required')]
    private ?string $postalCode = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'registration.validation.city_required')]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'registration.validation.country_required')]
    private ?string $country = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'registration.validation.phone_number_required')]
    private ?string $phoneNumber = null;

    #[ORM\Column(length: 10)]
    #[Assert\NotBlank(message: 'registration.validation.language_required')]
    private ?string $locale = null;

    #[ORM\Column]
    private ?bool $isVerified = false;

    #[ORM\Column]
    private ?bool $isApproved = false;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $emailVerifiedAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $approvedAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $lastLoginAt = null;
    
    #[ORM\Column(type: 'date', nullable: true)]
    #[Assert\NotBlank(message: 'registration.validation.birth_date_required')]
    #[Assert\LessThanOrEqual('-13 years', message: 'registration.validation.minimum_age')]
    private ?\DateTimeInterface $birthDate = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->isVerified = false;
        $this->isApproved = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(string $houseNumber): static
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getBoxNumber(): ?string
    {
        return $this->boxNumber;
    }

    public function setBoxNumber(?string $boxNumber): static
    {
        $this->boxNumber = $boxNumber;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): static
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    public function isVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function isApproved(): ?bool
    {
        return $this->isApproved;
    }

    public function setIsApproved(bool $isApproved): static
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    public function getEmailVerifiedAt(): ?\DateTimeImmutable
    {
        return $this->emailVerifiedAt;
    }

    public function setEmailVerifiedAt(?\DateTimeImmutable $emailVerifiedAt): static
    {
        $this->emailVerifiedAt = $emailVerifiedAt;

        return $this;
    }

    public function getApprovedAt(): ?\DateTimeImmutable
    {
        return $this->approvedAt;
    }

    public function setApprovedAt(?\DateTimeImmutable $approvedAt): static
    {
        $this->approvedAt = $approvedAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getLastLoginAt(): ?\DateTimeImmutable
    {
        return $this->lastLoginAt;
    }

    public function setLastLoginAt(?\DateTimeImmutable $lastLoginAt): static
    {
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }
    
    public function getBirthDate(): ?\DateTimeInterface
    {
        return $this->birthDate;
    }
    
    public function setBirthDate(?\DateTimeInterface $birthDate): static
    {
        $this->birthDate = $birthDate;
        
        return $this;
    }
    
    public function getAge(): ?int
    {
        if (!$this->birthDate) {
            return null;
        }
        
        $now = new \DateTime();
        $interval = $now->diff($this->birthDate);
        
        return $interval->y;
    }

    // Méthode utilitaire pour obtenir le nom complet
    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Méthode utilitaire pour obtenir l'adresse complète
    public function getFullAddress(): string
    {
        $address = $this->street . ' ' . $this->houseNumber;
        
        if ($this->boxNumber) {
            $address .= '/' . $this->boxNumber;
        }
        
        $address .= ', ' . $this->postalCode . ' ' . $this->city . ', ' . $this->country;
        
        return $address;
    }

    // Méthodes d'aide pour les rôles
    public function isAdmin(): bool
    {
        return in_array('ROLE_ADMIN', $this->getRoles());
    }

    public function isSuperAdmin(): bool
    {
        return in_array('ROLE_SUPER_ADMIN', $this->getRoles());
    }
}