<?php

namespace App\Form;

use App\Entity\Dirigeant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DirigType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dirig_name', TextType::class,[
                'label' => 'Nom :'])
            ->add('dirig_firstname', TextType::class,[
                'label' => 'Prénom :'])
            ->add('dirig_poste', ChoiceType::class,[
                'label' => 'Nom :',
                'choices' => [
                    'Président' => 'Président',
                    'Co-Président' => 'Co-Président',
                ]])
            ->add('dirig_photo', FileType::class,[
                'label' => 'Photo :'])
            ->add('save', SubmitType::class,[
                'label' => 'Ajouter'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dirigeant::class,
        ]);
    }
}
