<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Club;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

use Symfony\Component\Validator\Constraints as Assert;


class ClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('infos', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 500,
                        'maxMessage' => 'Maximum {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('nom', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le nom du club est obligatoire',
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                    ]),
                ],
            ])

            ->add('fondation', TextType::class, [
                'constraints' => [
                    new Assert\Length([
                        'max' => 500,
                        'maxMessage' => 'Maximum {{ limit }} caractères',
                    ]),

                ],
            ])

            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Professionnel' => 'professionnel',
                    'Amateur' => 'amateur',
                ],
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])

            ->add('couleurs', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 50,
                    ]),
                ],
                'help' => 'Ex : Rouge et Blanc',
            ])

            ->add('stade', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 100,
                    ]),
                ],
            ])

            ->add('championnat', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 100,
                    ]),
                ],
            ])

            ->add('proprietaire', TextType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Length([
                        'max' => 100,
                    ]),
                ],
            ])

            ->add('president', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 100,
                    ]),
                ],
            ])

            ->add('entraineur', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 100,
                    ]),
                ],
            ])

            ->add('adresse', TextareaType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length([
                        'max' => 255,
                    ]),
                ],
            ])

            ->add('website', UrlType::class, [
                'required' => false,
                'constraints' => [
                    new Assert\Url([
                        'message' => 'URL invalide',
                    ]),
                ],
            ])

            // ->add('dateCreation', DateType::class, [
            //     'widget' => 'single_text',
            //     'constraints' => [
            //         new Assert\NotBlank(),
            //     ],
            // ])
            ->add('Categorie', EntityType::class, [
                'class' => categories::class,
                'choice_label' => 'categories',
                'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Club::class,
        ]);
    }
}
