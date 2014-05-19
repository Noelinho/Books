<?php

namespace Books\DomainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DomainBundle:Default:index.html.twig', array('name' => $name));
    }
}
