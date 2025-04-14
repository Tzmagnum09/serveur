<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Intl\Countries;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProfileFormType extends AbstractType
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
                'label' => 'profile.fields.email',
                'required' => true,
                'disabled' => true,
            ])
            ->add('username', TextType::class, [
                'label' => 'profile.fields.username',
                'required' => true,
                'disabled' => true,
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
                'required' => false, // Changer à false pour éviter l'erreur
                'mapped' => false,
                'constraints' => [], // Supprimer la contrainte NotBlank
                'attr' => [
                    'class' => 'datepicker',
                    'autocomplete' => 'off'
                ],
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
            ]);
        
        // Ajout d'un écouteur d'événement pour pré-remplir la date de naissance
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($options) {
            $form = $event->getForm();
            if (isset($options['birthdate_formatted']) && $options['birthdate_formatted']) {
                $form->get('birthDate')->setData($options['birthdate_formatted']);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'translation_domain' => 'messages',
            'birthdate_formatted' => null,
        ]);
        
        $resolver->setAllowedTypes('birthdate_formatted', ['null', 'string']);
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
                $choices[$name] = $code;
            }
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