<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',TextType::class,['attr'=>['class'=>'form-control'],
                'label'=>'email'])
            ->add('username',TextType::class,['attr'=>['class'=>'form-control'],
                'label'=>'username'])
            ->add('password',PasswordType::class,['attr'=>['class'=>'form-control'],
                'label'=>'password'])
            ->add('confirm_password',PasswordType::class,['attr'=>['class'=>'form-control'],
                'label'=>'confirm_password'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
