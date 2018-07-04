<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Categories;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $categorie1 =new Categories();
       $categorie1->setNom('Carpets');
       $categorie1->setImage($this->getReference('media1'));

       $manager->persist($categorie1);

       $categorie2 =new Categories();
       $categorie2->setNom('Accesories');
       $categorie2->setImage($this->getReference('media2'));

       $manager->persist($categorie2);

       $categorie3 =new Categories();
       $categorie3->setNom('Clutchs');
       $categorie3->setImage($this->getReference('media4'));

       $manager->persist($categorie3);

       $categorie4 =new Categories();
       $categorie4->setNom('Foot Wear');
       $categorie4->setImage($this->getReference('media3'));

       $manager->persist($categorie4);

       $manager->flush();
       $this->addReference('categorie1',$categorie1);
       $this->addReference('categorie2',$categorie2);
       $this->addReference('categorie3',$categorie3);
       $this->addReference('categorie4',$categorie4);
    }
    public function getOrder(){
      return 2;
    }
}
