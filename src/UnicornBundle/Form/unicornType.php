<?php

namespace UnicornBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class unicornType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('color')
            ->add('furColor')
            ->add('cornColor')
            ->add('cornForm')
            ->add('furTexture')
            ->add('hairType')
            ->add('hoof')
            ->add('habitat')
            ->add('temperature')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UnicornBundle\Entity\unicorn'
        ));
    }
}
