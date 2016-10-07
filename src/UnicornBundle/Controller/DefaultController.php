<?php

namespace UnicornBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UnicornBundle:Default:index.html.twig');
    }
}
