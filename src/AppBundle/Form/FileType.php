<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nazwa', 'text', array(
            'required' => true,
            'label' => 'Nazwa pliku',
            'attr' => array(
                'class' => 'is-large'
            )
        ))
        ->add('sciezka', 'file', array(
            'required' => true,
            'label' => 'Wybierz plik',
            'attr' => array(
                'class' => 'file-input'
            )
        ))
        ->add('nrKursu', 'text', array(
            'required' => true,
            'label' => 'Podaj nr kursu',
            'attr' => array(
                'class' => 'is-large'
            )
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\File'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_file';
    }


}
