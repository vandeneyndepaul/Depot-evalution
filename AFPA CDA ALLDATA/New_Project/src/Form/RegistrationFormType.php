<?php

namespace App\Form;

use App\Entity\User;
use PHPUnit\Framework\Error\Notice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email', EmailType::class , [
            'attr' =>['class'=>'form-control']
        ])
        ->add('lastname', TextType::class , [
            'attr' =>['class'=>'form-control'],
        ])
        ->add('firstname', TextType::class , [
            'attr' =>['class'=>'form-control'],
        ])
        ->add('adress', TextType::class , [
            'attr' =>['class'=>'form-control'],
        ])
        ->add('zipcode', TextType::class , [
            'attr' =>['class'=>'form-control'],
        ])
        ->add('city', TextType::class , [
            'attr' =>['class'=>'form-control'],
        ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            

            ->add('Password', RepeatedType::class, [
                'type'=>PasswordType::class,
                'invalid_message'=>'les mots de passe doivent etre identiques.',
                'options'=>['attr'=> ['class' => 'password-field']],
                'required'=> false,
                'first_options' => ['label'=> 'mot de passe',
                    'attr' => ['placeholder' => 'Confirmez votre mot de passe'],
                    'attr' =>['placeholder'=> 'entrez votre mot de passe'],
                    'attr' =>['class' => 'form-control'],
                    'help' => "*Votre mot de passe doit contenir au moins : 6 caractères"],

                'second_options' =>['label' => 'Confirmation de mots de passe',
                    'attr' => ['placeholder' => 'Confirmez votre mot de passe'],
                    'attr' => ['class' => 'form-control'],
                    'constraints' => [
                        new NotBlank([
                            'message' =>'*Veuillez confirmer votre mot de passe'
                    ])
                ]],

                'constraints' => [
                                new NotBlank([
                                    'message' => '*Vueillez rensigner votre mot de passe.',
                                ]),
                                new Length([
                                    'min' => 6,
                                    'minMessage' => 'Your password should be at least {{ limit }} characters',
                                    'max' => 4096,
                                ]),
                            ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
