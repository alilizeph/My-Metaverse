<?php

namespace App\Form;

use App\Entity\Comments;
use App\Entity\Gender;
use App\Entity\Platform;
use App\Entity\VideoGame;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminRemoveFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('videogame', EntityType::class, [
                'class' => VideoGame::class,
                    'choice_label' => 'name',
                    'label' => 'Nom du jeu ciblé',
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