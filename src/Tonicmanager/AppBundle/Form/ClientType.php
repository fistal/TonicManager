<?php

namespace Tonicmanager\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', 'choice', array(
				'choices'=> array('Mr'=>'Mr','Mme'=>'Mme','Mlle'=>'Mlle'),
				'required'=> true))
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('email', 'text')
            ->add('telephone', 'text')
            ->add('portable', 'text')
            ->add('dateNaissance', 'date', array('format' => 'd - M - y','pattern' => "{{ day }} / {{ month }} / {{ year }}", 'years' => range(date('Y'), date('Y') - 100)))
            ->add('lieuNaissance', 'text')
            ->add('adresse', 'text')
            ->add('ville', 'text')
            ->add('cp', 'text')	
            ->add('photo', 'file')			
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tonicmanager\AppBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tonicmanager_appbundle_client';
    }
}
