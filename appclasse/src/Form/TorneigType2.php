<?php

namespace App\Form;

use App\Entity\Torneig;
use App\Repository\TorneigRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TorneigType2 extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('data'    )
            ->add('nom', TextType::class,[
                'attr'=>[
                    'placeholder'=>'Brandy Vaughan',
                    'class' => 'input'
                ]
            ])
            ->add('NumRondes', RangeType::class,[
                'attr'=>[
                    'class'=>'slider myRange',
                    'min'=> 0,
                    'max'=> 100,
                    'value'=>50
                ],
                'label'=> false


            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Torneig::class,
        ]);
    }
}
