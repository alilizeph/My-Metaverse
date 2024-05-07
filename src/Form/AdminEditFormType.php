<?php

namespace App\Form;

use App\Entity\Comments;
use App\Entity\Gender;
use App\Entity\Platform;
use App\Entity\VideoGame;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminEditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $grades = range(0, 100);

        $builder
            ->add('titleReview', TextType::class, [
                'label' => 'Nom de la critique',
                'required' => true
                ])
            ->add('name', TextType::class, [
                'label' => 'Nom du jeu',
                'required' => true
                ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du jeu',
                'required' => true
                ])
            ->add('advice', TextareaType::class, [
                'label' => 'Votre avis sur le jeu',
                'required' => true
                ])
            ->add('imgBox', FileType::class, [
                'label' => 'Image de boîte de jeu',
                'required' => 'false',
                'data_class' => null
                ])
            ->add('imgTheme', FileType::class, [
                'label' => 'Image de thème de jeu',
                'required' => 'false',
                'data_class' => null
                ])
            ->add('graphicsGrade', ChoiceType::class, [
                'label' => 'Note sur les Graphismes',
                'required' => 'true',
                'choices' => array_combine($grades, $grades)
                ])
            ->add('gameplayGrade', ChoiceType::class, [
                'label' => 'Note sur le GamePlay',
                'required' => 'true',
                'choices' => array_combine($grades, $grades)
                ])
            ->add('storylineGrade', ChoiceType::class, [
                'label' => 'Note sur le Scénario',
                'required' => 'true',
                'choices' => array_combine($grades, $grades)
                ])
            ->add('executionGrade', ChoiceType::class, [
                'label' => 'Note sur la Réalisation',
                'required' => 'true',
                'choices' => array_combine($grades, $grades)
                ])
            ->add('releaseDate', BirthdayType::class,[
                'label' => 'Date de sortie',
                'required' => false,
                'years' => range(1900, date('now'))
                ])
            ->add('disponibility', CheckboxType::class, [
                'label' => 'Disponibilité du jeu',
                'required' => false
                ])
            ->add('averagePrice', NumberType::class, [
                'label' => 'Prix moyen',
                'required' => false
                ])
            ->add('link', TextType::class, [
                'label' => 'Lien d\'achat',
                'required' => false
                ])
            ->add('platform', EntityType::class, [
                    'class' => Platform::class,
                    'choice_label' => 'platformName',
                    'label' => 'Plateforme de jeu',
                    'mapped' => false

                ])
            ->add('genders', EntityType::class, [
                'class' => Gender::class,
                'choice_label' => 'genderName',
                'label' => 'Genres',
                'multiple' => true,
                'expanded' => true,
                'mapped' => false
            ]
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VideoGame::class,
        ]);
    }
}