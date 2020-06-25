<?php

namespace App\Form;

use App\Entity\Social;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SocialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('POST')
            ->add('facebook', TextType::class,[
                'data' => 'Lien Facebook'
            ])
            ->add('twitter', TextType::class, [
                'data' => 'Lien Twitter'
            ])
            ->add('youtube', TextType::class,[
                'data' => 'Lien Youtube'
            ])
            ->add('instagram', TextType::class,[
                'data' => 'Lien Instagram'
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Mettre à jour'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Social::class,
        ]);
    }
}
