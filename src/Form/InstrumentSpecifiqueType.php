<?php

namespace App\Form;

use App\Entity\Poste;
use App\Entity\Marque;
use App\Entity\InstrumentSpecifique;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InstrumentSpecifiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Poste',EntityType::class,[
            'label'=>'poste',
            'class'=>Poste::class,
            'choice_label'=>'poste',
            'placeholder'=>'--choisir--'
        ])
       
        ->add('Marque',EntityType::class,[
            'label'=>'marque',
            'class'=>Marque::class,
            'choice_label'=>'marque',
            'placeholder'=>'--choisir--'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InstrumentSpecifique::class,
        ]);
    }
}
