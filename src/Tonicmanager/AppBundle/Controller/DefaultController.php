<?php

namespace Tonicmanager\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tonicmanager\AppBundle\Form\ScanCarteType;
use Tonicmanager\AppBundle\Form\RechercheClientType;
use Tonicmanager\AppBundle\Entity\Client;
use Tonicmanager\AppBundle\Entity\Contrat;
use Tonicmanager\AppBundle\Form\ClientType;
use Tonicmanager\AppBundle\Form\ConsultationType;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('TonicmanagerAppBundle:Default:index.html.twig');
    }

    public function dashboardAction()
    {
        return $this->render('TonicmanagerAppBundle:Default:dashboard.html.twig');
    }

    public function scanCarteAction()
    {	
		$contrat = new Contrat();
		$form = $this->createForm(new ScanCarteType());
		
		//On récupère la requête
		$request = $this->getRequest();		
		
		if($request->getMethod() == 'POST')		
		{
			$form->bind($request);
			if($form->isValid())
			{
				//On récupère les données entrées dans le formulaire par l'utilisateur
				$data = $this->getRequest()->request->get('tonicmanager_appbundle_scanCarte');

				$repo = $this->getDoctrine()
							->getManager()
							->getRepository('TonicmanagerAppBundle:Contrat');
				

				$TBcontrat = $repo->findByClient($data["id"]);				
				$contrat = $TBcontrat[0];				
				
				return $this->render('TonicmanagerAppBundle:Contrat:fiche.html.twig', array('contrat'=>$contrat));
			}			
		}
		        
		return $this->render('TonicmanagerAppBundle:Default:scanCarte.html.twig', array('form'=>$form->createView()));
    }

    public function consultationAction()
    {	
		$contrat = new Contrat();
		$form = $this->createForm(new ConsultationType());
		
		//On récupère la requête
		$request = $this->getRequest();		
		
		if($request->getMethod() == 'POST')		
		{
			$form->bind($request);
			if($form->isValid())
			{
				//On récupère les données entrées dans le formulaire par l'utilisateur
				$data = $this->getRequest()->request->get('tonicmanager_appbundle_consultation');

				$repo = $this->getDoctrine()
							->getManager()
							->getRepository('TonicmanagerAppBundle:Contrat');
				

				$TBcontrat = $repo->findByClient($data["id"]);				
				$contrat = $TBcontrat[0];	
				
				return $this->render('TonicmanagerAppBundle:Contrat:fiche.html.twig', array('contrat'=>$contrat));
			}			
		}
		        
		return $this->render('TonicmanagerAppBundle:Default:consultation.html.twig', array('form'=>$form->createView()));
    }    
	
	public function rechercheClientAction()
    {
		$contrat = new Contrat();
		$form = $this->createForm(new RechercheClientType());
		
		//On récupère la requête
		$request = $this->getRequest();
		
		if($request->getMethod() == 'POST')		
		{
			$form->bind($request);
			if($form->isValid())
			{
				//On récupère les données entrées dans le formulaire par l'utilisateur
				$data = $this->getRequest()->request->get('tonicmanager_appbundle_rechercheClient');
				$nom = $data["nom"];
				$TBdateNaissance = $data["dateNaissance"];
				$dateNaissance = $TBdateNaissance["year"].'-'.$TBdateNaissance["month"].'-'.$TBdateNaissance["day"];
				
				$em = $this->getDoctrine()
							->getManager();
				
				$TBclient = $em->getRepository('TonicmanagerAppBundle:Client')->findRechercheClient($nom, $dateNaissance);		
				$client = $TBclient[0];	

				$TBcontrat = $em->getRepository('TonicmanagerAppBundle:Contrat')->findByClient($client->getId());				
				$contrat = $TBcontrat[0];
			
				return $this->render('TonicmanagerAppBundle:Contrat:fiche.html.twig', array('contrat'=>$contrat));
			}
		}
		        
		return $this->render('TonicmanagerAppBundle:Default:rechercheClient.html.twig', array('form'=>$form->createView()));
    }
}
