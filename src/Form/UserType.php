<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use PHPUnit\TextUI\XmlConfiguration\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType as EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType as FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType as PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType as TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
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
            ->add('pwd', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true
            ])
            ->add('gender', TextType::class)
            ->add('birthday', DateType::class, [
                'label' => 'Date de naissance',
                'required' => true
            ])
            ->add('avatar', FileType::class, [
                'label' => 'Avatar'
            ])
            ->add('presentation', TextareaType::class, [
                'label' => 'Présentation'
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
