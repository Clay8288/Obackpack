<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TypeTextType::class, array(
                'label' => 'titre',
                'attr' => array(
                    'placeholder' => 'Titre'
                )
            ))
            ->add('content', TextareaType::class, array(
                'label' => 'Contenu',
                'attr' => array(
                    'placeholder' => 'Votre article'
                )
            ))
            ->add('country',CountryType::class, [
                'placeholder' => 'Choisir un pays',
                'mapped' => false,
            ])

            ->add('picture', FileType::class, [
                'label' => 'Ajouter une image',
                'required' =>false,
                ])
            ->add('Valider', SubmitType::class );
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}