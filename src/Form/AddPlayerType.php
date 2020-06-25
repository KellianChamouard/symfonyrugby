<?php

namespace App\Form;

use App\Entity\Player;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AddPlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('player_name', TextType::class, [
                'label' => 'Nom du joueur :'
            ])
            ->add('player_firstname', TextType::class, [
                'label' => 'Prénom du joueur :'
            ])
            ->add('player_age', IntegerType::class, [
                'label' => 'Age du joueur :'
            ])
            ->add('player_taille', IntegerType::class, [
                'label' => 'Taille du joueur (cm):'
            ])
            ->add('player_poids', IntegerType::class, [
                'label' => 'Poids du joueur (kg):'
            ])
            ->add('player_licence_number', TextType::class, [
                'label' => 'N° de Licence du joueur (Si pas de licence, mettre "..."):',
                'required' => false,
            ])
            ->add('player_number', IntegerType::class, [
                'label' => 'N° Maillot du joueur :'
            ])
            ->add('player_state', CheckboxType::class, [
                'label' => 'Joueur bléssé',
                'required' => false,
            ])
            ->add('player_poste', ChoiceType::class, [
                'label' => 'Poste du joueur :',
                'choices' => [
                    'Arrière' => 'Arrière',
                    'Ailier' => 'Ailier',
                    'Centre' => 'Centre',
                    'Demi D\'ouverture' => 'Demi D\'ouverture',
                    'Demi de Mêlée' => 'Demi de Mêlée',
                    'Troisième Ligne' => 'Troisième Ligne',
                    'Seconde Ligne' => 'Seconde Ligne',
                    'Pilier' => 'Pilier',
                    'Talonneur' => 'Talonneur',
                ]
            ])
            ->add('player_total_match', IntegerType::class, [
                'label' => 'Nombre de Matchs du joueur :'
            ])
            ->add('player_total_tries', IntegerType::class, [
                'label' => 'Nombre d\'éssais du joueur :'
            ])
            ->add('player_total_points', IntegerType::class, [
                'label' => 'Nombre de points du joueurs :'
            ])
            ->add('player_photo', FileType::class, [
                'label' => 'Photo du joueur :',
                'required' => false,
                'data_class' => NULL,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Ajouter le joueur'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Player::class,
        ]);
    }
}
