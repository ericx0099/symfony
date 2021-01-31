<?php

namespace App\Form;

use App\Entity\Arbitre;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
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
            ->add('Register',SubmitType::class,[
                'attr'=>[
                    'class'=>' button is-block is-primary is-fullwidth is-medium mt-5'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Arbitre::class,
        ]);
    }
}
