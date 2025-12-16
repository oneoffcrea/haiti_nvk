<?php

namespace App\Form;

use App\Entity\categories;
use App\Entity\club;
use App\Entity\Sportif;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\IntegerType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\LessThan;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;

class SportifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('infos', TextareaType::class, [
                'required' => false,
                'constraints' => [
                    new Length([
                        'max' => 500,
                        'maxMessage' => 'Maximum {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom est obligatoire',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                    ]),
                ],
            ])

            ->add('prenom', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le prénom est obligatoire',
                    ]),
                    new Length([
                        'min' => 2,
                        'max' => 50,
                    ]),
                ],
            ])

            ->add('naissance', DateType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new NotBlank(),
                    new LessThan([
                        'value' => 'today',
                        'message' => 'La date de naissance doit être dans le passé',
                    ]),
                ],
            ])

            ->add('age', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Range([
                        'min' => 5,
                        'max' => 100,
                        'notInRangeMessage' => 'L’âge doit être entre {{ min }} et {{ max }} ans',
                    ]),
                ],
            ])

            ->add('categorie_age', ChoiceType::class, [
                'choices' => [
                    'U10' => 'U10',
                    'U12' => 'U12',
                    'U15' => 'U15',
                    'U18' => 'U18',
                    'Senior' => 'Senior',
                ],
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('taille', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Range([
                        'min' => 100,
                        'max' => 250,
                        'notInRangeMessage' => 'La taille doit être entre {{ min }} et {{ max }} cm',
                    ]),
                ],
            ])

            ->add('poste', ChoiceType::class, [
                'choices' => [
                    'Gardien' => 'gardien',
                    'Défenseur' => 'defenseur',
                    'Milieu' => 'milieu',
                    'Attaquant' => 'attaquant',
                ],
                'constraints' => [
                    new NotBlank(),
                ],
            ])

            ->add('photo', FileType::class, [
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Format d’image invalide',
                    ]),
                ],
            ])
            ->add('categorie', EntityType::class, [
                'class' => categories::class,
                'choice_label' => 'id',
                'multiple' => true,
            ])
            ->add('club', EntityType::class, [
                'class' => club::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sportif::class,
        ]);
    }
}
