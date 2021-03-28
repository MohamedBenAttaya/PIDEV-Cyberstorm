<?php

namespace App\Form;

use App\Entity\Participation;
use App\Entity\Voy;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParticipationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idInternaute')
            ->add('type')
            ->add('voy', EntityType::class,[
                'class'=>Voy::class,
                'choice_label'=>'point_arrive'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Participation::class,
        ]);
    }
}
