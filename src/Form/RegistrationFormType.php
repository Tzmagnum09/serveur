<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
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
        $locale = $this->translator->getLocale();

        $builder
            ->add('email', EmailType::class, [
                'label' => $this->translator->trans('registration.form.email', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.email_placeholder', [], 'messages', $locale),
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.email_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('username', TextType::class, [
                'label' => $this->translator->trans('registration.form.username', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.username_placeholder', [], 'messages', $locale),
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.username_required', [], 'messages', $locale),
                    ]),
                    new Length([
                        'min' => 3,
                        'minMessage' => $this->translator->trans('registration.validation.username_min_length', [], 'messages', $locale),
                        'max' => 50,
                        'maxMessage' => $this->translator->trans('registration.validation.username_max_length', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('firstName', TextType::class, [
                'label' => $this->translator->trans('registration.form.first_name', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.first_name_placeholder', [], 'messages', $locale),
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.first_name_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('lastName', TextType::class, [
                'label' => $this->translator->trans('registration.form.last_name', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.last_name_placeholder', [], 'messages', $locale),
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.last_name_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('street', TextType::class, [
                'label' => $this->translator->trans('registration.form.street', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.street_placeholder', [], 'messages', $locale),
                    'class' => 'form-control address-autocomplete',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.street_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('houseNumber', TextType::class, [
                'label' => $this->translator->trans('registration.form.house_number', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.house_number_placeholder', [], 'messages', $locale),
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.house_number_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('boxNumber', TextType::class, [
                'label' => $this->translator->trans('registration.form.box_number', [], 'messages', $locale),
                'required' => false,
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.box_number_placeholder', [], 'messages', $locale),
                    'class' => 'form-control',
                ],
            ])
            ->add('postalCode', TextType::class, [
                'label' => $this->translator->trans('registration.form.postal_code', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.postal_code_placeholder', [], 'messages', $locale),
                    'class' => 'form-control address-autocomplete',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.postal_code_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('city', TextType::class, [
                'label' => $this->translator->trans('registration.form.city', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.city_placeholder', [], 'messages', $locale),
                    'class' => 'form-control address-autocomplete',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.city_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('country', CountryType::class, [
                'label' => $this->translator->trans('registration.form.country', [], 'messages', $locale),
                'attr' => [
                    'class' => 'form-control',
                ],
                'preferred_choices' => ['BE', 'FR', 'LU', 'NL', 'DE'],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.country_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => $this->translator->trans('registration.form.phone_number', [], 'messages', $locale),
                'attr' => [
                    'placeholder' => $this->translator->trans('registration.form.phone_number_placeholder', [], 'messages', $locale),
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.phone_number_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('locale', ChoiceType::class, [
                'label' => $this->translator->trans('registration.form.language', [], 'messages', $locale),
                'choices' => [
                    $this->translator->trans('registration.form.language_choices.french', [], 'messages', $locale) => 'fr',
                    $this->translator->trans('registration.form.language_choices.dutch', [], 'messages', $locale) => 'nl',
                    $this->translator->trans('registration.form.language_choices.english', [], 'messages', $locale) => 'en',
                    $this->translator->trans('registration.form.language_choices.german', [], 'messages', $locale) => 'de',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.language_required', [], 'messages', $locale),
                    ]),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'first_options' => [
                    'label' => $this->translator->trans('registration.form.password', [], 'messages', $locale),
                    'attr' => [
                        'placeholder' => $this->translator->trans('registration.form.password_placeholder', [], 'messages', $locale),
                        'class' => 'form-control',
                    ],
                ],
                'second_options' => [
                    'label' => $this->translator->trans('registration.form.confirm_password', [], 'messages', $locale),
                    'attr' => [
                        'placeholder' => $this->translator->trans('registration.form.confirm_password_placeholder', [], 'messages', $locale),
                        'class' => 'form-control',
                    ],
                ],
                'invalid_message' => $this->translator->trans('registration.validation.password_mismatch', [], 'messages', $locale),
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('registration.validation.password_required', [], 'messages', $locale),
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => $this->translator->trans('registration.validation.password_min_length', [], 'messages', $locale),
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => $this->translator->trans('registration.form.agree_terms', [], 'messages', $locale),
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => $this->translator->trans('registration.validation.terms_required', [], 'messages', $locale),
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'translation_domain' => 'messages',
        ]);
    }
}