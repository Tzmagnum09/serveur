<?php

namespace App\Form;

use App\Entity\EmailTemplate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Contracts\Translation\TranslatorInterface;

class EmailTemplateFormType extends AbstractType
{
    private TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'label' => 'Code',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'registration_confirmation',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('admin.email_templates.validation.code_required'),
                    ]),
                ],
                'help' => $this->translator->trans('admin.email_templates.help.code'),
            ])
            ->add('locale', ChoiceType::class, [
                'label' => $this->translator->trans('admin.email_templates.field.language'),
                'choices' => [
                    $this->translator->trans('language.french') => 'fr',
                    $this->translator->trans('language.dutch') => 'nl',
                    $this->translator->trans('language.english') => 'en',
                    $this->translator->trans('language.german') => 'de',
                ],
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('admin.email_templates.validation.language_required'),
                    ]),
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => $this->translator->trans('admin.email_templates.field.subject'),
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => $this->translator->trans('admin.email_templates.placeholder.subject'),
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('admin.email_templates.validation.subject_required'),
                    ]),
                ],
            ])
            ->add('htmlContent', TextareaType::class, [
                'label' => $this->translator->trans('admin.email_templates.field.html_content'),
                'attr' => [
                    'class' => 'form-control html-editor',
                    'rows' => 15,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => $this->translator->trans('admin.email_templates.validation.html_content_required'),
                    ]),
                ],
                'help' => $this->translator->trans('admin.email_templates.help.variables'),
            ])
            ->add('textContent', TextareaType::class, [
                'label' => $this->translator->trans('admin.email_templates.field.text_content'),
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 8,
                ],
                'help' => $this->translator->trans('admin.email_templates.help.text_content'),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EmailTemplate::class,
            'translation_domain' => 'messages',
        ]);
    }
}