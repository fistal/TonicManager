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
		return $this->render('TonicmanagerAppBundle:Client:ajouter.html.twig', array('form'=>$form->createView()));
		
	}
}
