<?php

namespace Tonicmanager\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tonicmanager\AppBundle\Entity\Client;
use Tonicmanager\AppBundle\Form\ClientType;

class ClientController extends Controller
{
	public function ajoutAction()
	{
		$cli = new Client();
		$form = $this->createForm(new ClientType(), $cli);
		$request = $this->get('request');
		
		if($request->getMethod() == 'POST')		
		{
			$form->bind($request);
			if($form->isValid())
			{
				$em = $this->getDoctrine()
						->getManager();
				$em->persist($cli);
				$em->flush();
				
				return $this->redirect( $this->generateUrl('tonicmanagerAppBundle_listeClient'));

			}
		}
				
		return $this->render('TonicmanagerAppBundle:Client:ajouter.html.twig', array('form'=>$form->createView()));
		
	}
	public function listeAction()
	{
		$repo = $this->getDoctrine()
					->getManager()
					->getRepository('TonicmanagerAppBundle:Client');
					
		$clients = $repo->findAll();
		
		return $this->render('TonicmanagerAppBundle:Client:liste.html.twig', array('clients'=>$clients));
		
	}
}
