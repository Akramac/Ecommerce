<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Ecommerce\EcommerceBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements FixtureInterface,ContainerAwareInterface,OrderedFixtureInterface
{
    private $container;
    public function setContainer(ContainerInterface $container = null){

      $this->container=$container;

    }

    public function load(ObjectManager $manager)
    {
       $Utilisateur1 =new Utilisateurs();
       $Utilisateur1->setUserName('Ali');
       $Utilisateur1->setEmail('Ali@gmail.com');
       $Utilisateur1->setEnabled(1);
       $Utilisateur1->setPassword($this->container->get('security.encoder_factory')->getEncoder($Utilisateur1)->encodePassword('pass',$Utilisateur1->getSalt()));

       $manager->persist($Utilisateur1);

       $Utilisateur2 =new Utilisateurs();
       $Utilisateur2->setUserName('Sara');
       $Utilisateur2->setEmail('sara@gmail.com');
       $Utilisateur2->setEnabled(1);
       $Utilisateur2->setPassword($this->container->get('security.encoder_factory')->getEncoder($Utilisateur1)->encodePassword('pass',$Utilisateur1->getSalt()));

       $manager->persist($Utilisateur2);

       $Utilisateur3 =new Utilisateurs();
       $Utilisateur3->setUserName('Janette');
       $Utilisateur3->setEmail('Janette@gmail.com');
       $Utilisateur3->setEnabled(1);
       $Utilisateur3->setPassword($this->container->get('security.encoder_factory')->getEncoder($Utilisateur1)->encodePassword('pass',$Utilisateur1->getSalt()));

       $manager->persist($Utilisateur3);

       $manager->flush();

       $this->addReference('utilisateur1',$Utilisateur1);
       $this->addReference('utilisateur2',$Utilisateur2);
       $this->addReference('utilisateur3',$Utilisateur3);

    }
    public function getOrder(){
      return 5;
    }
}
