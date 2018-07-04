<?php

namespace Page\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EcommerceEcommerceBundle:Produits:produits.html.twig');
    }
}
