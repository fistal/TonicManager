<?php

namespace Tonicmanager\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tonicmanager\AppBundle\Entity\Abonnement;
use Tonicmanager\AppBundle\Form\AbonnementType;

class AbonnementController extends Controller
{
	public function ajoutAction()
	{
		$abo = new Abonnement();
		$form = $this->createForm(new AbonnementType(), $abo);
		$request = $this->get('request');
		
		if($request->getMethod() == 'POST')		
		{
			$form->bind($request);
			if($form->isValid())
			{
				$em = $this->getDoctrine()
						->getManager();
				$em->persist($abo);
				$em->flush();
				
				return $this->redirect( $this->generateUrl('tonicmanagerAppBundle_listeAbonnement'));

			}
		}
				
		return $this->render('TonicmanagerAppBundle:Abonnement:ajouter.html.twig', array('form'=>$form->createView()));
		
	}
	public function listeAction()
	{
		$repo = $this->getDoctrine()
					->getManager()
					->getRepository('TonicmanagerAppBundle:Abonnement');
					
		$abonnements = $repo->findAll();
		
		return $this->render('TonicmanagerAppBundle:Abonnement:liste.html.twig', array('abonnements'=>$abonnements));
		
	}
}
