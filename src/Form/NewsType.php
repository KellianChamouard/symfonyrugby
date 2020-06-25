<?php

namespace App\Form;

use App\Entity\News;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $today = date("d/m/Y");  
        $builder
            ->add('news_title', TextType::class, [
                'label' => 'Titre de l\'article :',
            ])
            ->add('news_content', TextareaType::class, [
                'label' => 'Contenu de l\'article :',
            ])
            ->add('news_date', TextType::class, [
                'label' => 'Date de l\'article :',
                'data' => $today,
            ])
            ->add('news_cat', ChoiceType::class, [
                'label' => 'Catégorie de l\'article :',
                'choices' => [
                    'Évènement' => 'Évènement',
                    'Résultat' => 'Résultat',
                    'Recrutement' => 'Recrutement',
                    'Annonce' => 'Annonce',
                    'Divers' => 'Divers',
                ],
            ])
            ->add('news_state', CheckboxType::class, [
                'label' => 'Publier',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Ajouter l\'article'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => News::class,
        ]);
    }
}
