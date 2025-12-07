<?php

namespace App\Form;

use App\Entity\categories;
use App\Entity\Club;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('infos')
            ->add('nom')
            ->add('fondation')
            ->add('statut')
            ->add('couleurs')
            ->add('stade')
            ->add('championnat')
            ->add('proprietaire')
            ->add('president')
            ->add('entraineur')
            ->add('adresse')
            ->add('website')
            ->add('dateCreation', null, [
                'widget' => 'single_text',
            ])
            ->add('Categorie', EntityType::class, [
                'class' => categories::class,
                'choice_label' => 'id',
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
