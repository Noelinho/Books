<?php

namespace Books\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelpController extends Controller
{
    public function indexAction($pagina)
    {
        return $this->render('WebBundle:Help:' . $pagina . '.html.twig');
    }
}
