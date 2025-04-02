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

class EmailTemplateFormType extends AbstractType
{
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
                        'message' => 'Veuillez entrer un code',
                    ]),
                ],
                'help' => 'Le code unique pour identifier ce template (ex: registration_confirmation)',
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
                        'message' => 'Veuillez sélectionner une langue',
                    ]),
                ],
            ])
            ->add('subject', TextType::class, [
                'label' => 'Sujet',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Confirmation de votre inscription',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un sujet',
                    ]),
                ],
            ])
            ->add('htmlContent', TextareaType::class, [
                'label' => 'Contenu HTML',
                'attr' => [
                    'class' => 'form-control html-editor',
                    'rows' => 15,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un contenu HTML',
                    ]),
                ],
                'help' => 'Vous pouvez utiliser des variables comme {{ firstName }}, {{ lastName }}, {{ domain }}, etc.',
            ])
            ->add('textContent', TextareaType::class, [
                'label' => 'Contenu texte (optionnel)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 8,
                ],
                'help' => 'Version texte simple (sans HTML) de l\'email (optionnel)',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EmailTemplate::class,
        ]);
    }
}
