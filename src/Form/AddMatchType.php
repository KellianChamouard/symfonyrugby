<?php

namespace App\Form;

use App\Entity\Match;
use App\Entity\Teams;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddMatchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('match_dom', EntityType::class,[
                'label' => 'Équipe domicile :',
                'class' => Teams::class,
                'choice_label' => 't_name',
            ])
            ->add('match_ext', EntityType::class,[
                'label' => 'Équipe extérieure :',
                'class' => Teams::class,
                'choice_label' => 't_name',
            ])
            ->add('match_date', DateType::class,[
                'label' => 'Date du match :'
            ])
            ->add('match_type', ChoiceType::class, [
                'label' => 'Type de match :',
                'choices' => [
                    'Championnat' => 'Championnat',
                    'Coupe' => 'Coupe',
                    'Amical' => 'Amical',
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Ajouter le match'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Match::class,
        ]);
    }
}
