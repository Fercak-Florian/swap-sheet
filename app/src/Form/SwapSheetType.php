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
            ->add('newComputerTattoo', TextType::class)
            ->add('tspName', ChoiceType::class, [
                'choices'  => [
                    'FERCAK Florian' => 'LACOUR Vincent',
                    'LACOUR Vincent' => 'FERCAK Florian',
                    'BOUET Pascal' => 'BOUET Pascal',
                ]
            ])
//            ->add('masterDate', DateType::class, [
//                'label' => 'Date Master',
//            ])
            ->add('userName', TextType::class)
            ->add('cuid', TextType::class)
            ->add('incidentNumber', TextType::class)
//            ->add('allocationDate', DateType::class)
            ->add('comment', TextareaType::class)
            ->add('oldComputerTattoo', TextType::class)
            ->add('oldComputerModel', TextType::class)
            ->add('symptom', TextType::class)
            ->add('Imprimer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SwapSheet::class,
        ]);
    }
}
