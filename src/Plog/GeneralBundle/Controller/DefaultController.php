<?php

namespace Plog\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
    /* $doctrine=$this->getDoctrine();
     $en=$doctrine->getManager();
     $repo=$en->getRepository('PlogGeneralBundle:Article')->findOneBy(['id'=>'1']);
    var_dump($repo);
    echo $repo->getTitle();
    return new Response('<body>Ok</body>');
     */
     return $this->render('@PlogGeneral/Default/index.html.twig');

    }
}
