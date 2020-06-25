<?php

namespace App\Form;

use App\Entity\Club;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clubname', TextType::class,[
                'label' => 'Nom du Club :'
            ])
            ->add('clubcc', TextType::class,[
                'label' => 'Championnat du Club :'
            ])
            ->add('clubadress', TextType::class,[
                'label' => 'Adresse du Club :'
            ])
            ->add('clubcountry', TextType::class,[
                'label' => 'Pays du Club :'
            ])
            ->add('clubphone', TextType::class,[
                'label' => 'N° de téléphone du Club :'
            ])
            ->add('clubmail', TextType::class,[
                'label' => 'Adresse mail du Club :'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Mettre à jour'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Club::class,
        ]);
    }
}
