<?php

namespace App\Form;

use App\Entity\Jugador;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class JugadorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('elo',IntegerType::class,[
                    'attr' =>[
                        'placeholder'=>'2000',
                        'class' => 'input'
                    ]
                ])
            ->add('nom',TextType::class,[
                'attr' =>[
                    'placeholder'=>'Xavier Benet',
                    'class' => 'input'
                ]
            ])
            ->add('pais',TextType::class,[
                'attr' =>[
                    'placeholder'=>'Espanya',
                    'class' => 'input'
                ]
            ])
            ->add('equip',TextType::class,[
                'attr' =>[
                    'placeholder'=>'Granollers-Canovelles',
                    'class' => 'input'
                ]
            ])
            ->add('dataNaixament',DateType::class,[
                'attr' =>[
                    'color' => 'blue',
                  
                ]
            ])
            ->add('codiFide',IntegerType::class,[
                'attr' =>[
                    'placeholder' => '5414142',
                    'class' => 'input'
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Jugador::class,
        ]);
    }
}
