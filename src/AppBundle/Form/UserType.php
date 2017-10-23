<?php

namespace AppBundle\Form;

use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
 * Created by PhpStorm.
 * User: sgaido
 * Date: 06/10/17
 * Time: 10:02
 */
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
//            ->add('username', TextType::class)
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->add('nome',TextType::class)
            ->add('cognome',TextType::class)
            ->add('dataNascita',DateType::class,array(
                'widget' => 'choice',
                'years' => range(date('Y') -18, date('Y')-70),
            ))
            ->add('altroTeam',TextType::class)
            ->add('altriPortali',TextType::class)
            ->add('tempoDedicato', ChoiceType::class, array(
                'choices' => array('2 Ore al giorno' => 0,'2 Volte a settimana' => 1, '1 volta a settimana' =>2, '1 Volta ogni 2 settimane' =>3)
            ))
            ->add('perifericaGioco', ChoiceType::class, array(
                'choices' => array('Confermo di avere un volante compatibile' => true, 'Non ho un volante' => false)
            ))
            ->add('Accettazione', ChoiceType::class, array(
                'choices' => array('Accetto' => true, 'Non accetto' => false)
            ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}