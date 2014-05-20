<?php

namespace Tonicmanager\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ScanCarteType extends AbstractType
{
	/**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id', 'text');
    }
    

    /**
     * @return string
     */
    public function getName()
    {
        return 'tonicmanager_appbundle_scanCarte';
    }
}
