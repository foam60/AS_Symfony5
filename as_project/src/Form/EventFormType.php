<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Sport;
use App\Entity\Evenement;
use App\Entity\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('description', TextareaType::class)
            ->add('date_debut', DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text',
            ])
            ->add('nombre_places', NumberType::class)
            ->add('duree', NumberType::class)
            ->add('date_fin', DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text',
            ])
            ->add('sport_id', EntityType::class, [
                'class' => Sport::class,
                'choice_label' => 'nom',
                'expanded' => true
            ])
            ->add('type_id', EntityType::class, [
                'class' => Type::class,
                'choice_label' => 'nom',
                'expanded' => true
            ])
            ->add('categorie_id', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'expanded' => true
            ])
            ->add('nom_fichier', TextType::class)
            ->add('description_fichier', TextType::class)
            ->add('categorie_fichier', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'expanded' => true
            ])
            ->add('vignette', FileType::class)
            ->add('fichier', FileType::class)
            ->add('image', FileType::class)
            ->add('save', SubmitType::class, [
            'attr' => ['class' => 'btn waves-effect waves-light']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
