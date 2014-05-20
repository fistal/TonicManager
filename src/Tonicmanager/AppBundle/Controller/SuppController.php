<?php

namespace Tonicmanager\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tonicmanager\AppBundle\Entity\Supp;
use Tonicmanager\AppBundle\Form\SuppType;

class SuppController extends Controller
{
	public function ajoutAction()
	{
		$supp = new Supp();
		$form = $this->createForm(new SuppType(), $supp);
		$request = $this->get('request');
		
		if($request->getMethod() == 'POST')		
		{
			$form->bind($request);
			if($form->isValid())
			{
				$em = $this->getDoctrine()
						->getManager();
				$em->persist($supp);
				$em->flush();
				
				return $this->redirect( $this->generateUrl('tonicmanagerAppBundle_listeOption'));

			}
		}
				
		return $this->render('TonicmanagerAppBundle:Supp:ajouter.html.twig', array('form'=>$form->createView()));
		
	}
	public function listeAction()
	{
		$repo = $this->getDoctrine()
					->getManager()
					->getRepository('TonicmanagerAppBundle:Supp');
					
		$options = $repo->findAll();
		
		return $this->render('TonicmanagerAppBundle:Supp:liste.html.twig', array('options'=>$options));
		
	}
}
