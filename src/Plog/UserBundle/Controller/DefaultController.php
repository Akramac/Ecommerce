<?php

namespace Plog\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlogUserBundle:Default:index.html.twig');
    }
}
