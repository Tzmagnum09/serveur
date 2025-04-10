<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Intl\Countries;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationFormType extends AbstractType
{
    private TranslatorInterface $translator;
    
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => 'registration.form.email',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.email_required',
                    ]),
                ],
            ])
            ->add('username', TextType::class, [
                'label' => 'registration.form.username',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.username_required',
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'registration.validation.username_min_length',
                        'max' => 30,
                        'maxMessage' => 'registration.validation.username_max_length',
                    ]),
                ],
            ])
            ->add('firstName', TextType::class, [
                'label' => 'registration.form.first_name',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.first_name_required',
                    ]),
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'registration.form.last_name',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.last_name_required',
                    ]),
                ],
            ])
            ->add('birthDate', TextType::class, [
                'label' => 'registration.form.birth_date',
                'required' => true,
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.birth_date_required',
                    ]),
                ],
                'attr' => [
                    'class' => 'datepicker',
                    'autocomplete' => 'off'
                ]
            ])
            ->add('street', TextType::class, [
                'label' => 'registration.form.street',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.street_required',
                    ]),
                ],
            ])
            ->add('houseNumber', TextType::class, [
                'label' => 'registration.form.house_number',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.house_number_required',
                    ]),
                ],
            ])
            ->add('boxNumber', TextType::class, [
                'label' => 'registration.form.box_number',
                'required' => false,
            ])
            ->add('postalCode', TextType::class, [
                'label' => 'registration.form.postal_code',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.postal_code_required',
                    ]),
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'registration.form.city',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.city_required',
                    ]),
                ],
            ])
            ->add('country', ChoiceType::class, [
                'label' => 'registration.form.country',
                'required' => true,
                'choices' => $this->getCountryChoices(),
                'placeholder' => 'Sélectionnez un pays',
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.country_required',
                    ]),
                ],
                'choice_translation_domain' => false,
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'registration.form.phone_number',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.phone_number_required',
                    ]),
                ],
            ])
            ->add('locale', ChoiceType::class, [
                'label' => 'registration.form.language',
                'required' => true,
                'choices' => [
                    $this->translator->trans('registration.form.language_choices.french') => 'fr',
                    $this->translator->trans('registration.form.language_choices.dutch') => 'nl',
                    $this->translator->trans('registration.form.language_choices.english') => 'en',
                    $this->translator->trans('registration.form.language_choices.german') => 'de',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.language_required',
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'first_options' => [
                    'label' => 'registration.form.password',
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'class' => 'form-control'
                    ],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'registration.validation.password_required',
                        ]),
                        new Length([
                            'min' => 8,
                            'minMessage' => 'registration.validation.password_min_length',
                        ]),
                    ],
                ],
                'second_options' => [
                    'label' => 'registration.form.confirm_password',
                    'attr' => [
                        'autocomplete' => 'new-password',
                        'class' => 'form-control'
                    ],
                ],
                'invalid_message' => 'registration.validation.password_mismatch',
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'registration.validation.terms_required',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'translation_domain' => 'messages',
        ]);
    }
    
    private function getCountryChoices(): array
    {
        $choices = [];
        $countries = Countries::getNames();
        
        // Pays prioritaires
        $priorityCountries = [
            'BE' => $countries['BE'], // Belgique
            'FR' => $countries['FR'], // France
            'NL' => $countries['NL'], // Pays-Bas
            'DE' => $countries['DE'], // Allemagne
            'LU' => $countries['LU'], // Luxembourg
        ];
        
        // Autres pays européens
        $europeanCountries = [
            'AT' => $countries['AT'], // Autriche
            'BG' => $countries['BG'], // Bulgarie
            'HR' => $countries['HR'], // Croatie
            'CY' => $countries['CY'], // Chypre
            'CZ' => $countries['CZ'], // République tchèque
            'DK' => $countries['DK'], // Danemark
            'EE' => $countries['EE'], // Estonie
            'FI' => $countries['FI'], // Finlande
            'GR' => $countries['GR'], // Grèce
            'HU' => $countries['HU'], // Hongrie
            'IE' => $countries['IE'], // Irlande
            'IT' => $countries['IT'], // Italie
            'LV' => $countries['LV'], // Lettonie
            'LT' => $countries['LT'], // Lituanie
            'MT' => $countries['MT'], // Malte
            'PL' => $countries['PL'], // Pologne
            'PT' => $countries['PT'], // Portugal
            'RO' => $countries['RO'], // Roumanie
            'SK' => $countries['SK'], // Slovaquie
            'SI' => $countries['SI'], // Slovénie
            'ES' => $countries['ES'], // Espagne
            'SE' => $countries['SE'], // Suède
            'GB' => $countries['GB'], // Royaume-Uni
        ];
        
        // Pays prioritaires en premier
        foreach ($priorityCountries as $code => $name) {
            $choices[$name] = $code;
        }
        
        // Séparateur
        $choices['---------------'] = '';
        
        // Pays européens ensuite
        foreach ($europeanCountries as $code => $name) {
            if (!isset($priorityCountries[$code])) {
                $choices[$name] = $code;}
        }
        
        // Séparateur
        $choices['---------------'] = '_';
        
        // Tous les autres pays
        foreach ($countries as $code => $name) {
            if (!isset($priorityCountries[$code]) && !isset($europeanCountries[$code])) {
                $choices[$name] = $code;
            }
        }
        
        return $choices;
    }
}