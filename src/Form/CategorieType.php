<?php

namespace App\Form;

use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('categories');
        // ->add('clubs', EntityType::class, [
        //     'class' => Club::class,
        //     'choice_label' => 'id',
        //     'multiple' => true,
        // ])
        // ->add('sportifs', EntityType::class, [
        //     'class' => Sportif::class,
        //     'choice_label' => 'id',
        //     'multiple' => true,
        // ])
        // ->add('submit', SubmitType::class, [
        //     'attr' => [
        //         'class' => 'btn btn-success'
        //     ],
        //     'label' => 'Envoyer',

        // ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categories::class,
        ]);
    }
}
