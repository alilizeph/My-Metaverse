<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surname', TextType::class, [
                'label' => 'Prénom',
                'required' => true
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Nom',
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true
            ])
            ->add('username', TextType::class, [
                'label' => 'Nom utilisateur',
                'required' => true
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true
            ])
            ->add('gender', ChoiceType::class, [
                'label' => 'genre',
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
            ->add('privateFieldsDisponibility', CheckboxType::class, [
                'label' => 'Voulez-vous rendre vos informations personnelles (nom, prénom) disponibles ? (par défaut, les informations ne seront pas disponibles ;) )',
                'required' => false,
            ]);
        //$builder->get('avatar')->addModelTransformer(new AvatarPictureToUploadedFileTransformer());
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
