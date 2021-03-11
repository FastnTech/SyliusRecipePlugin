<?php

namespace FastnTech\RecipePlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class RecipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Başlık',
                'required' => true
            ])
            ->add('slug', TextType::class, [
                'label' => 'Url',
                'required' => true
            ])
            ->add('category', TextType::class, [
                'label' => 'Kategori',
                'required' => true
            ])
            ->add('list', CKEditorType::class, [
                'label' => 'Liste',
                'required' => true
            ])
            ->add('content', CKEditorType::class, [
                'label' => 'İçerik',
                'required' => true
            ])
        ;
    }

    public function getBlockPrefix(): string
    {
        return 'fastntech_recipe';
    }
}