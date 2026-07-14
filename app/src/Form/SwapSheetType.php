<?php

namespace App\Form;

use App\Entity\SwapSheet;
use Symfony\Component\DomCrawler\Field\TextareaFormField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SwapSheetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('diskSize',ChoiceType::class, [
                'label' => 'Taille Disque',
                'choices'  => [
                    '256 Go' => '256 Go',
                    '512 Go' => '512 Go',
                    'Inconnu' => '',
                ],
            ])
            ->add('newModel', TextType::class, [
                'label' => 'Modèle',
            ])
            ->add('bios', TextType::class, [
                'label' => 'BIOS',
            ])
//            ->add('masterDate', DateType::class, [
//                'label' => 'Date Master',
//            ])
            ->add('newSerialNumber', TextType::class)
            ->add('tattooNumber', TextType::class)
            ->add('tspName', ChoiceType::class, [
                'choices'  => [
                    'LACOUR Vincent' => 'LACOUR Vincent',
                    'FERCAK Florian' => 'FERCAK Florian',
                    'BOUET Pascal' => 'BOUET Pascal',
                ]
            ])
            ->add('userName', TextType::class)
            ->add('cuid', TextType::class)
            ->add('incidentNumber', TextType::class)
//            ->add('allocationDate', DateType::class)
            ->add('comment', TextareaType::class)
            ->add('oldComputer', TextType::class)
            ->add('oldModel', TextType::class)
            ->add('oldSerialNumber', TextType::class)
            ->add('symptom', TextType::class)
            ->add('Print', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SwapSheet::class,
        ]);
    }
}
