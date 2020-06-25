<?php

namespace App\Form;

use App\Entity\Teams;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ModifTeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('t_name', TextType::class, [
            'label' => 'Nom du club :'
        ])
        ->add('t_logo', FileType::class, [
            'label' => 'Logo du club :',
            'required' => false,
            'data_class' => NULL,
        ])
        ->add('t_stade', TextType::class, [
            'label' => 'Stade du club :'
        ])
        ->add('t_pts', IntegerType::class, [
            'label' => 'Totals des points :',
            'data' => '0',
        ])
        ->add('t_win', IntegerType::class, [
            'label' => 'Victoires :',
            'data' => '0',
        ])
        ->add('t_lose', IntegerType::class, [
            'label' => 'Défaites :',
            'data' => '0',
        ])
        ->add('t_nul', IntegerType::class, [
            'label' => 'Nuls :',
            'data' => '0',
        ])
        ->add('t_total_matchs', IntegerType::class, [
            'label' => 'Total des matchs :',
            'data' => '0',
        ])
        ->add('save', SubmitType::class, [
            'label' => 'Ajouter le club'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Teams::class,
        ]);
    }
}
