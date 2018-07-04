<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Categories;

class ProduitsController extends Controller
{
    /*public function produitsAction()
    {
        return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/produits.html.twig');
    }*/
    public function presentaAction($id)
    {

      $em=$this->getDoctrine()->getManager();
      $produit=$em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
      return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/presenta.html.twig', array('produit'=>$produit));
    }
    /*public function presentaAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $produit=$em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
        return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/presenta.html.twig'),array('produit'=>$produit));
    }*/
    public function categorie1Action()
    {

        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie1(); //EcommerceEcommerceBundle:Produits is the Produits entity
        return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/produits.html.twig',array('produits'=>$produits));
    }
    public function categorie2Action()
    {

        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie2(); //EcommerceEcommerceBundle:Produits is the Produits entity
        return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/produits.html.twig',array('produits'=>$produits));
    }

    public function categorie3Action()
    {

        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie3(); //EcommerceEcommerceBundle:Produits is the Produits entity
        return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/produits.html.twig',array('produits'=>$produits));
    }
    public function categorie4Action()
    {

        $em=$this->getDoctrine()->getManager();
        $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->byCategorie4(); //EcommerceEcommerceBundle:Produits is the Produits entity
        return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/produits.html.twig',array('produits'=>$produits));
    }
    public function produitsAction(){

      $em=$this->getDoctrine()->getManager();
      $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();

      return $this->render('EcommerceEcommerceBundle:Default:produits/modulesUsed/produits.html.twig',array('produits'=>$produits));
    }
}
