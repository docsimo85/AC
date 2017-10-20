<?php

namespace AppBundle\Form;

use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titolo')
            ->add('contenuto',TextareaType::class)
            ->add('img',FileType::class, array('label' => 'Immagine (JPEG/BMP)'))
            ->add('dataInizio',DateType::class, array('data' => new \DateTime))
            ->add('dataFine', DateType::class, array('data' => new \DateTime))
            ->add('dataInizioProve',TimeType::class, array('data' => new \DateTime('21:00')))
            ->add('dataFineProve', TimeType::class, array('data' => new \DateTime('21:29')))
            ->add('dataInizioQual',TimeType::class, array('data' => new \DateTime('21:30')))
            ->add('dataFineQual', TimeType::class, array('data' => new \DateTime('21:55')))
            ->add('dataInizioGara',TimeType::class, array('data' => new \DateTime('22:00')))
//            ->add('dataFineGara', TimeType::class, array('data' => new \DateTime('23:00')))
            ->add('girigara')
            ->add('attivo',CheckboxType::class)
            ->add('altro');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_post';
    }


}
