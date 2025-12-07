<?php

namespace App\Form;

use App\Entity\categories;
use App\Entity\club;
use App\Entity\Sportif;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SportifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('infos')
            ->add('nom')
            ->add('prenom')
            ->add('naissance')
            ->add('age')
            ->add('categorie_age')
            ->add('taille')
            ->add('poste')
            ->add('photo')
            ->add('dateCreation', null, [
                'widget' => 'single_text',
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
