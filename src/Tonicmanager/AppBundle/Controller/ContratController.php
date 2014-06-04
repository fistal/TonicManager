<?php

namespace Tonicmanager\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tonicmanager\AppBundle\Entity\Contrat;
use Tonicmanager\AppBundle\Entity\Client;
use Tonicmanager\AppBundle\Entity\Supp;
use Tonicmanager\AppBundle\Form\ContratType;

class ContratController extends Controller
{
	public function ajoutAction()
	{
		$contrat = new Contrat();
		$form = $this->createForm(new ContratType(), $contrat);
		$request = $this->get('request');
		
		if($request->getMethod() == 'POST')		
		{
			$form->bind($request);
			if($form->isValid())
			{
			

				// Ici : On traite manuellement le fichier uploadé
				$contrat->getClient()->upload();
				
				$em = $this->getDoctrine()
						->getManager();
				$em->persist($contrat);
				$em->flush();
				
				return $this->redirect( $this->generateUrl('tonicmanagerAppBundle_listeClient'));

			}
		}
				
		return $this->render('TonicmanagerAppBundle:Contrat:ajouter.html.twig', array('form'=>$form->createView()));
		
	}
	
	public function ficheAction($idClient)
	{		
		$contrat = $this->getDoctrine()->getManager()->getRepository('TonicmanagerAppBundle:Contrat')->findOneByClient($idClient);
		return $this->render('TonicmanagerAppBundle:Contrat:fiche.html.twig', array('contrat'=>$contrat));
	}
}
