<?php

namespace Tonicmanager\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContratEditType extends ContratType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		parent::buildForm($builder, $options);
    }
	
	
    
    /**
     * @param OptionsResolverInterface $resolver
     */
/*     public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tonicmanager\AppBundle\Entity\Contrat'
        ));
    } */

    /**
     * @return string
     */
    public function getName()
    {
        return 'tonicmanager_appbundle_contratedit';
    }
}
