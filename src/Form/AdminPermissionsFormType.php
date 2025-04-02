<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminPermissionsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $permissions = $options['permissions'] ?? [];
        
        foreach ($permissions as $code => $permission) {
            $builder->add($code, CheckboxType::class, [
                'label' => $permission['label'],
                'required' => false,
                'data' => $permission['granted'],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'permissions' => [],
        ]);
    }
}
