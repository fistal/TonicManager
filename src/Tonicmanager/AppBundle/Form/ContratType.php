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
            ->add('modePaiement', 'choice', array(
				'choices'=> array('espece'=>'Espece','cheque'=>'Cheque'),
				'empty_value' => 'Choisissez une option',
				'required'=> true))
            ->add('droitEntree', 'text')
            ->add('dateStart', 'datetime',array('required' => false,
                                                      'widget' =>'single_text',
                                                      'format' =>'dd/MM/yyyy'))
            ->add('dateEnd',  'datetime',array('required' => false,
                                                      'widget' =>'single_text',
                                                      'format' =>'dd/MM/yyyy'))
            ->add('commentaire', 'textarea', array(
			'required'=>false))
			->add('client', new ClientType())
			->add('banque', new BanqueType())
			->add('abonnement', 'entity', array(
				'class' => 'TonicmanagerAppBundle:Abonnement',
				'property' => 'type',
				'empty_value' => 'Choisissez un abonnement',
				'multiple' => false))
			->add('supp', 'entity', array(
				'class' => 'TonicmanagerAppBundle:Supp',
				'property' => 'libelle',
				'empty_value' => 'Choisissez une option',
				'expanded' => true,
				'multiple' => true,
				'required'=> false
				))
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
