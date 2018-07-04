<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class PanierController extends Controller
{

    public function panierAction(Request $request)
    {
      $session=$request->getSession();
     if (!$session->has('ecommerce_panier')) $session->set('ecommerce_panier', array());
    /* var_dump($session->get('ecommerce_panier'));
     die(); //check if it show id of product and qte*/

     $em=$this->getDoctrine()->getManager();
     $produits=$em->getRepository('EcommerceEcommerceBundle:Produits')->findArray(array_keys($session->get('ecommerce_panier')));


     return $this->render('EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig', array('produits' => $produits,
                                                                                                    'panier'=>$session->get('ecommerce_panier')));
    }
    public function livraisonAction()
    {
        return $this->render('EcommerceEcommerceBundle:Default:panier/layout/livraison.html.twig');
    }
    public function validationAction()
    {
        return $this->render('EcommerceEcommerceBundle:Default:panier/layout/validation.html.twig');
    }
    public function ajouterAction(Request $request, $id){
      $session=$request->getSession();

         if (!$session->has('ecommerce_panier')) $session->set('ecommerce_panier',array());
         $panier = $session->get('ecommerce_panier');

         if (array_key_exists($id, $panier)) {
             if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
             $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
         } else {
             if ($request->query->get('qte') != null)
                 $panier[$id] = $request->query->get('qte');
             else
                 $panier[$id] = 1;

             $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
         }

         $session->set('ecommerce_panier',$panier);


         return $this->redirect($this->generateUrl('ecommerce_panier'));
     }

    public function supprimerAction(Request $request,$id){
      $session=$request->getSession();
      $panier=$session->get('ecommerce_panier');
      if(array_key_exists($id,$panier)){
        unset($panier[$id]);
        $session->set('ecommerce_panier',$panier);
      }
      return $this->redirect($this->generateUrl('ecommerce_panier'));

      return $this->render('EcommerceEcommerceBundle:Default:panier/layout/panier.html.twig');
    }

}
