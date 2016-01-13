<?php

namespace uni\bundle\superhBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class superheroeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('habilidades')
            ->add('edad')
            ->add('sexo')
            ->add('tipo')
            ->add('zona')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uni\bundle\superhBundle\Entity\superheroe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'uni_bundle_superhbundle_superheroe';
    }
}
