<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Form\testType;


class TestController extends Controller
{
  

/*
    public function ajoutAction()
    {
        $em=$this->getDoctrine()->getManager();

       /*
        $produit= new Produits();
        $produit->setCategorie('Accesories');
        $produit->setDescription('Sandals');
        $produit->setDisponible('1');
        $produit->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/Rainbow_Sandals_grande.jpg?v=1527372237');
        $produit->setNom('Rainbow Sandal');
        $produit->setPrix('49');
        $produit->setTva('20');



        $produit2= new Produits();
        $produit2->setCategorie('Accesories');
        $produit2->setDescription('Ballerinas');
        $produit2->setDisponible('1');
        $produit2->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/ballerine_orientale2_grande.jpg?v=1527372249');
        $produit2->setNom('Oriental Ballerinas');
        $produit2->setPrix('49');
        $produit2->setTva('20');

        $em->persist($produit2);
        $em->flush();


      $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();
        return $this->render('EcommerceEcommerceBundle:Default:test.html.twig', array('produits'=> $produits));
    }*/

}
