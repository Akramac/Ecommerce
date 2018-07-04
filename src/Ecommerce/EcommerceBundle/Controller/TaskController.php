<?php
namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\userss;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskController extends Controller
{
    public function regAction(Request $request)
    {
        $user= new userss();
        $user->setUserName('Alain0');
        $user->setFirstName('Alain');
        $user->setLastName('Becker');
        $user->setEmail('Alain@gmail.com');
        $user->setPassword('pass');
        $user->setRegDate(new \DateTime('today'));


        $form = $this->createFormBuilder($user)
            ->add('userName', TextType::class)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('email', TextType::class)
            ->add('password', TextType::class)
            ->add('regDate', DateType::class)
            ->add('Register', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();


            $form->handleRequest($request);

              if ($form->isSubmitted() && $form->isValid()) {

                  $un=$form['userName']->getData();
                  $fn=$form['firstName']->getData();
                  $ln=$form['lastName']->getData();
                  $email=$form['email']->getData();
                  $pass=$form['password']->getData();
                  $regDate=$form['regDate']->getData();

                  $user->setUserName($un);
                  $user->setFirstName($fn);
                  $user->setLastName($ln);
                  $user->setEmail($email);
                  $user->setPassword($pass);
                  $user->setRegDate($regDate);

                  $em=$this->getDoctrine()->getManager();

                  $em->persist($user);
                  $em->flush();
              }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
