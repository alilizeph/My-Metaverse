<?php

namespace App\Form;

use App\Entity\Comments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentsGuestFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $grades = range(0, 100);

        $builder
            ->add('user_username', TextType::class, [
                'label' => 'Votre nom',
                'required' => true,
                'mapped' => false
                ])
            ->add('title', TextType::class, [
                'label' => 'Titre du commentaire',
                'required' => true
                ])
            ->add('content', TextareaType::class, [
                'label' => 'Contenu du commentaire'
                ])
            ->add('grade', ChoiceType::class, [
                'label' => 'Votre note',
                'required' => true,
                'choices' => array_combine($grades, $grades)
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comments::class,
        ]);
    }
}
