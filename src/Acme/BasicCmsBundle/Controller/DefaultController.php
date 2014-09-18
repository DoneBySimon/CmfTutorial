<?php

namespace Acme\BasicCmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeBasicCmsBundle:Default:index.html.twig', array('name' => $name));
    }

    /**
     * @Template()
     */
    public function pageAction($contentDocument)
    {
        $dm = $this->get('doctrine_phpcr')->getManagerForClass('AcmeBasicCmsBundle:Post');
        $posts = $dm->getRepository('AcmeBasicCmsBundle:Post')->findAll();

        return array(
            'page'  => $contentDocument,
            'posts' => $posts,
        );
    }

    /**
     * @Template()
     */
    public function postAction($contentDocument){
        return array(
            'post'  => $contentDocument,

        );
    }
}
