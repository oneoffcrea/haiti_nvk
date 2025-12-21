<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                "attr" => [
                    "placeholder" => "Votre adresse email"

                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques.',
                'first_options'  => [
                    'label' => 'Votre mot de passe',
                    'attr' => ['placeholder' => 'Mot de passe']
                ],
                'second_options' => [
                    'mapped' => false,
                    'label' => 'Répéter votre mot de passe',
                    'attr' => ['placeholder' => 'Confirmez le mot de passe']
                ],
            ])
            ->add('prenom', TextType::class, [
                "attr" => [
                    "placeholder" => "Votre prenom"
                ]
            ])
            ->add('nom', TextType::class, [
                "attr" => [
                    "placeholder" => "Votre nom "
                ]
            ]);
        // ->add('role')
        // ->add('dateCreation', null, [
        //     'widget' => 'single_text',
        // ])

        // ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
