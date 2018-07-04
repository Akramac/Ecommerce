<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Tva;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class TvaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $Tva1 =new Tva();
       $Tva1->setMultiplicate('0.982');
       $Tva1->setNom('TVA 1.75%');
       $Tva1->setValeur('1.75');

       $manager->persist($Tva1);

       $Tva2 =new Tva();
       $Tva2->setMultiplicate('0.833');
       $Tva2->setNom('TVA 20%');
       $Tva2->setValeur('20');

       $manager->persist($Tva2);
       $manager->flush();

       $this->addReference('Tva1',$Tva1);
       $this->addReference('Tva2',$Tva2);
    }
    public function getOrder(){
      return 3;
    }
}
