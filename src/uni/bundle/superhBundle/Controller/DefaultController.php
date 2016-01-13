<?php

namespace uni\bundle\superhBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('uniSuperhBundle:Default:index.html.twig');
    }
    
    public function indexAdminAction()
    {
        return $this->render('uniSuperhBundle:Default:indexAdmin.html.twig');
    }
}
