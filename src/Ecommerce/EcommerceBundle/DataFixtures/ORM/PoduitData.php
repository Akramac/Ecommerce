<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Poduit;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class PoduitData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $Produit1 =new Poduit();
       $Produit1->setCategorie($this->getReference('categorie2'));
       $Produit1->setDescription('Carpet guenuine quality');
       $Produit1->setNom('Colors');
       $Produit1->setPrix('115');
       $Produit1->setTva('20');

       $manager->persist($Produit1);

       $Produit2 =new Poduit();
       $Produit2->setCategorie($this->getReference('categorie2'));
       $Produit2->setDescription('Type');
       $Produit2->setNom('Design');
       $Produit2->setPrix('79');
       $Produit2->setTva('20');

       $manager->persist($Produit2);

       $Produit3 =new Poduit();
       $Produit3->setCategorie($this->getReference('categorie1'));
       $Produit3->setDescription('Using');
       $Produit3->setNom('Drop');
       $Produit3->setPrix('195');
       $Produit3->setTva('20');

       $manager->persist($Produit3);

       $manager->flush();
    }
    public function getOrder(){
      return 4;
    }
}
