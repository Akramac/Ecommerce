<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
  public function menuAction(){

    $em=$this->getdoctrine()->getManager();
    $categories=$em->getRepository('EcommerceEcommerceBundle:Categories')->findAll();

    return $this->render('EcommerceEcommerceBundle:Default:categories/modulesUsed/menu.html.twig',array('categories'=>$categories));
  }
}
