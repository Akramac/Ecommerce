<?php

namespace Blog\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $doctrine=$this->getDoctrine();
        $en=$doctrine->getManager();
        $repo=$en->getRepository('BlogGeneralBundle:Article')->findAll();

        return new Response('Ok');
    }


    //public function viewAction(){



}
/*
<?php

namespace Blog\GeneralBundle\Controller;
//require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    public function indexAction($name,Request $r)
    {   $id=$r->query->get('id');
        return new Response("Salam ".$name."! ton id est :".$id." ");
    }
}

*/
