<?php

namespace App\Form;

use App\Entity\ResetPasswordRequest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('selector')
            ->add('hashedToken')
            ->add('requestedAt', null, [
                'widget' => 'single_text',
            ])
            ->add('expiresAt', null, [
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ResetPasswordRequest::class,
        ]);
    }
}
