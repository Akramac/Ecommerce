<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;

class UtilisateursAdressesData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
       $Adresse1 =new UtilisateursAdresses();
       $Adresse1->setUtilisateur($this->getReference('utilisateur1'));
       $Adresse1->setNom('Kan');
       $Adresse1->setPrenom('Ali');
       $Adresse1->setTelephone('061111111');
       $Adresse1->setCp('abc');
       $Adresse1->setAdresse('rue1');
       $Adresse1->setPays('Maroc');
       $Adresse1->setVille('Marrakech');
       $Adresse1->setComplement('face à Suzuki');

       $manager->persist($Adresse1);

       $Adresse2 =new UtilisateursAdresses();
       $Adresse2->setUtilisateur($this->getReference('utilisateur2'));
       $Adresse2->setNom('San');
       $Adresse2->setPrenom('Sara');
       $Adresse2->setTelephone('062222222');
       $Adresse2->setCp('abc');
       $Adresse2->setAdresse('rue2');
       $Adresse2->setPays('Maroc');
       $Adresse2->setVille('Jadida');
       $Adresse2->setComplement('face à Suzuki');

       $manager->persist($Adresse2);

       $Adresse3 =new UtilisateursAdresses();
       $Adresse3->setUtilisateur($this->getReference('utilisateur3'));
       $Adresse3->setNom('Ran');
       $Adresse3->setPrenom('Janette');
       $Adresse3->setTelephone('063333333');
       $Adresse3->setCp('abc');
       $Adresse3->setAdresse('rue3');
       $Adresse3->setPays('Maroc');
       $Adresse3->setVille('Tanger');
       $Adresse3->setComplement('face à Suzuki');

       $manager->persist($Adresse3);

       $manager->flush();


    }
    public function getOrder(){
      return 6;
    }
}
