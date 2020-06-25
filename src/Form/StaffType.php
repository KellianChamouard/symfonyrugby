<?php

namespace App\Form;

use App\Entity\Staff;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class StaffType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('staff_name', TextType::class,[
                'label' => 'Nom :',
            ])
            ->add('staff_firstname', TextType::class,[
                'label' => 'Prénom :',
            ])
            ->add('staff_poste', ChoiceType::class,[
                'label' => 'Poste :',
                'choices' => [
                    'Entraineur' => 'Entraineur',
                    'Co-Entraineur' => 'Co-Entraineur',
                ]
            ])
            ->add('staff_photo', FileType::class,[
                'label' => 'Photo :'
            ])
            ->add('save', SubmitType::class,[
                'label' => 'Ajouter'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Staff::class,
        ]);
    }
}
