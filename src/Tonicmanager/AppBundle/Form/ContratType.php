<?php

namespace Tonicmanager\AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContratType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientDoit', 'text')
            ->add('incidentPaiement', 'text')
            ->add('modePaiement', 'text')
            ->add('droitEntree', 'text')
            ->add('dateStart', 'date', array('format' => 'd - M - y','pattern' => "{{ day }} / {{ month }} / {{ year }}", 'years' => range(date('Y'), date('Y') - 100)))
            ->add('dateEnd', 'date', array('format' => 'd - M - y','pattern' => "{{ day }} / {{ month }} / {{ year }}", 'years' => range(date('Y'), date('Y') - 100)))
            ->add('photo', 'text')
            ->add('commentaire', 'text')
			->add('client', new ClientType())
			->add('abonnement', 'entity', array(
				'class' => 'TonicmanagerAppBundle:Abonnement',
				'property' => 'type',
				'empty_value' => 'Choisissez une option',
				'multiple' => false))			
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Tonicmanager\AppBundle\Entity\Contrat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tonicmanager_appbundle_contrat';
    }
}
