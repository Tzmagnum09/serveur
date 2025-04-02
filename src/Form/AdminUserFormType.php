<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Validator\Constraints\NotBlank;

class AdminUserFormType extends AbstractType
{
    private Security $security;
    
    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user = $options['data'];
        $currentUser = $this->security->getUser();
        
        $builder
            ->add('email', EmailType::class, [
                'label' => 'Adresse e-mail',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer une adresse email',
                    ]),
                ],
                'disabled' => true, // Email can't be changed by admin
            ])
            ->add('username', TextType::class, [
                'label' => 'Nom d\'utilisateur',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un nom d\'utilisateur',
                    ]),
                ],
                'disabled' => true, // Username can't be changed by admin
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer le prénom',
                    ]),
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer le nom',
                    ]),
                ],
            ])
            ->add('street', TextType::class, [
                'label' => 'Rue',
                'attr' => [
                    'class' => 'form-control address-autocomplete',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer la rue',
                    ]),
                ],
            ])
            ->add('houseNumber', TextType::class, [
                'label' => 'Numéro',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer le numéro',
                    ]),
                ],
            ])
            ->add('boxNumber', TextType::class, [
                'label' => 'Boîte',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('postalCode', TextType::class, [
                'label' => 'Code postal',
                'attr' => [
                    'class' => 'form-control address-autocomplete',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer le code postal',
                    ]),
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Commune',
                'attr' => [
                    'class' => 'form-control address-autocomplete',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer la commune',
                    ]),
                ],
            ])
            ->add('country', CountryType::class, [
                'label' => 'Pays',
                'attr' => [
                    'class' => 'form-control',
                ],
                'preferred_choices' => ['BE', 'FR', 'LU', 'NL', 'DE'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner le pays',
                    ]),
                ],
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'Numéro de téléphone',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer le numéro de téléphone',
                    ]),
                ],
            ])
            ->add('locale', ChoiceType::class, [
                'label' => 'Langue',
                'choices' => [
                    'Français' => 'fr',
                    'Néerlandais' => 'nl',
                    'Anglais' => 'en',
                    'Allemand' => 'de',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner la langue',
                    ]),
                ],
            ])
        ;
        
        // Add approval checkbox if the user is not approved
        if (!$user->isApproved()) {
            $builder->add('isApproved', CheckboxType::class, [
                'label' => 'Approuver cet utilisateur',
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
