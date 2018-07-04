<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class CommandesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $Commande1 =new Commandes();
       $Commande1->setUtilisateur($this->getReference('utilisateur1'));
       $Commande1->setValider('1');
       $Commande1->setDate(new \DateTime());
       $Commande1->setReference('1');
       $Commande1->setCommande(array('0'=>array('1'=>'2'),
                                     '1'=>array('2'=>'1'),
                                     '2'=>array('3'=>'3')));

       $manager->persist($Commande1);

       $Commande2 =new Commandes();
       $Commande2->setUtilisateur($this->getReference('utilisateur2'));
       $Commande2->setValider('1');
       $Commande2->setDate(new \DateTime());
       $Commande2->setReference('2');
       $Commande2->setCommande(array('0'=>array('1'=>'1'),
                                     '1'=>array('2'=>'1'),
                                     '2'=>array('3'=>'1')));

       $manager->persist($Commande2);

       $manager->flush();

    }
    public function getOrder(){
      return 7;
    }
}
