<?php

namespace App\Form;

use App\Entity\Comments;
use App\Entity\Gender;
use App\Entity\Platform;
use App\Entity\VideoGame;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminRemoveFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('advice')
            ->add('imgBox')
            ->add('imgTheme')
            ->add('grade')
            ->add('releaseDate')
            ->add('disponibility')
            ->add('averagePrice')
            ->add('link')
            ->add('averageUsersGrade')
            ->add('platform', Platform::class, [
                'class' => Platform::class,
                'choice_label' => 'platformName'])
            ->add('genders', Gender::class, [
                'class' => Gender::class,
                'choice_label' => 'genderName'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VideoGame::class,
        ]);
    }
}