<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Intl\Countries;
use Symfony\Contracts\Translation\TranslatorInterface;

class UserEditType extends AbstractType
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
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.email_required',
                    ]),
                ],
                'disabled' => true, // Email can't be changed by admin
            ])
            ->add('username', TextType::class, [
                'label' => 'profile.fields.username',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'registration.validation.username_required',
                    ]),
                ],
                'disabled' => true, // Username can't be changed by admin
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
            ->add('birthDate', DateType::class, [
                'label' => 'registration.form.birth_date',
                'required' => false,
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'attr' => [
                    'class' => 'datepicker form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'JJ/MM/AAAA'
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
            ])
        ;

        // Ajouter des champs supplémentaires pour les administrateurs
        if ($options['is_admin']) {
            $builder->add('isApproved', CheckboxType::class, [
                'label' => 'admin.user_edit.is_approved',
                'required' => false,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'translation_domain' => 'messages',
            'is_admin' => false,
        ]);

        $resolver->setAllowedTypes('is_admin', 'bool');
    }
    
    // La méthode getCountryChoices reste inchangée
    private function getCountryChoices(): array
    {
        // ... (code précédent)
    }
}