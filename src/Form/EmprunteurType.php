<?php

namespace App\Form;

use App\Entity\Emprunteur;
use App\Entity\Livre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmprunteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero',NumberType::class,['attr'=>['class'=>'form-control'],
                'label'=>'numero'])
            ->add('nom',TextType::class,['attr'=>['class'=>'form-control'],
                'label'=>'nom'])
            ->add('prenom',TextType::class,['attr'=>['class'=>'form-control'],
                'label'=>'prenom'])
            ->add('livres',EntityType::class,
                ['attr'=>['class'=>'form-control'],'class' => Livre::class, 'choice_label' => 'titre','multiple' => false,

                    'label' => 'livres'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Emprunteur::class,
        ]);
    }
}
