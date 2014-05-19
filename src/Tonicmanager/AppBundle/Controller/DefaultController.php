<?php

namespace Tonicmanager\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('TonicmanagerAppBundle:Default:index.html.twig');
    }
}
