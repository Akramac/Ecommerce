<?php
namespace Blog\GeneralBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskController extends Controller
{
    public function regAction(Request $request)
    {
        $user= new users1();
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
            die('submitted'); 
        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
