<?php

namespace Acme\BasicCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeBasicCmsBundle:Default:index.html.twig', array('name' => $name));
    }
}
