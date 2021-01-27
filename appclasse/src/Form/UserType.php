<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom',TextType::class,[
                'attr' => [
                    'placeholder'=>'Brandy Vaughan',
                    'class' => 'input'
                ]
            ])
            ->add('Email',EmailType::class,[
                'attr' => [
                    'placeholder'=>'example@email.com',
                    'class' => 'input'
                ]
            ])
            ->add('Password',PasswordType::class,[
                'attr' => [
                    'placeholder'=>'********',
                    'class' => 'input'
                ]
            ])
            ->add('Dni',TextType::class,[
                'attr' => [
                    'placeholder'=>'44488825E',
                    'class' => 'input'
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
