<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class UserPermissionsFormType extends AbstractType
{
    private TranslatorInterface $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $permissions = $options['permissions'] ?? [];
        
        $builder
            ->add('manage_users', CheckboxType::class, [
                'label' => $this->translator->trans('permissions.manage_users'),
                'required' => false,
                'data' => $permissions['manage_users'] ?? false,
                'help' => $this->translator->trans('permissions.manage_users_help')
            ])
            ->add('approve_users', CheckboxType::class, [
                'label' => $this->translator->trans('permissions.approve_users'),
                'required' => false,
                'data' => $permissions['approve_users'] ?? false,
                'help' => $this->translator->trans('permissions.approve_users_help')
            ])
            ->add('edit_email_templates', CheckboxType::class, [
                'label' => $this->translator->trans('permissions.edit_email_templates'),
                'required' => false,
                'data' => $permissions['edit_email_templates'] ?? false,
                'help' => $this->translator->trans('permissions.edit_email_templates_help')
            ])
            ->add('translate_content', CheckboxType::class, [
                'label' => $this->translator->trans('permissions.translate_content'),
                'required' => false,
                'data' => $permissions['translate_content'] ?? false,
                'help' => $this->translator->trans('permissions.translate_content_help')
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'permissions' => [],
            'translation_domain' => 'messages',
        ]);

        $resolver->setAllowedTypes('permissions', 'array');
    }
}