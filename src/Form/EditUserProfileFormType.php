<?php

namespace App\Form;

use App\Entity\Likes;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditUserProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surname', TextType::class, [
                'label' => 'Votre prénom',
                'required' => true
                ])
            ->add('firstName', TextType::class, [
                'label' => 'Votre nom',
                'required' => true
                ])
            ->add('gender', ChoiceType:: class, [
                'label' => 'Votre genre',
                'required' => true,
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => "Femme",
                    'Ielle' => 'Ielle',
                    'Indéterminé' => 'Indéterminé'
                ]
                ])
            ->add('birthday', BirthdayType::class, [
                    'label' => 'Date de naissance',
                    'required' => true,
                    'years' => range(1900, date('Y')-10)
                ])
            ->add('avatarFile', FileType::class, [
                'label' => 'Avatar',
                "required" => false,
                'data_class' => null
                ])
            ->add('presentation', TextareaType::class, [
                'label' => 'Présentation',
                "required" => false
                ])
            ->add('Confirmer', SubmitType::class, [

                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
