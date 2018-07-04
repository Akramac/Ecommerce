<?php

namespace Pages\PaagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PagesPaagesBundle:Default:index.html.twig');
    }
}
