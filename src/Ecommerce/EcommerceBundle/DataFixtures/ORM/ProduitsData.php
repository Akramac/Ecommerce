<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
       $Produit1 =new Produits();
       $Produit1->setCategorie($this->getReference('categorie2'));
       $Produit1->setDescription('Carpet guenuine quality');
       $Produit1->setNom('Colors');
       $Produit1->setPrix('116');
       $Produit1->setTva('20');
       $Produit1->setDisponible('1');
       $Produit1->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/babouche-berbere-orange_grande.jpg?v=1527372232');

       $manager->persist($Produit1);

       $Produit2 =new Produits();
       $Produit2->setCategorie($this->getReference('categorie2'));
       $Produit2->setDescription(' Type: Cow LeatherStyle: VintageItem Height: 19cmItem Length: 10cmItem Weight: 0.26Item Width: 2.2cm');
       $Produit2->setNom('Design FASHION PURSE');
       $Produit2->setPrix('80');
       $Produit2->setTva('20');
       $Produit2->setDisponible('1');
       $Produit2->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/product-image-209580339_large.jpg?v=1527372234');

       $manager->persist($Produit2);

       $Produit3 =new Produits();
       $Produit3->setCategorie($this->getReference('categorie1'));
       $Produit3->setDescription('Dimensions: 68x235cm Using a blend of Argentinian and New Zealand Wool yarns. The timeless, traditional design is reminiscent of the original century old kilim rugs');
       $Produit3->setNom('Drop');
       $Produit3->setPrix('196');
       $Produit3->setTva('20');
       $Produit3->setDisponible('1');
       $Produit3->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/Kazak-4111_grande.jpg?v=1527372239');

       $manager->persist($Produit3);

       $Produit4 =new Produits();
       $Produit4->setCategorie($this->getReference('categorie1'));
       $Produit4->setDescription('Dimensions: 120x170cm (5’7"x4’0") Skillfully hand woven to create a beautiful flatweave effect with a patchwork design containing intricate patterns in contrasting warm red tones. Each piece is crafted to the highest standard using a blend of...');
       $Produit4->setNom('KELIM RUG 651');
       $Produit4->setPrix('295');
       $Produit4->setTva('20');
       $Produit4->setDisponible('1');
       $Produit4->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/Kelims-KP014_grande.jpg?v=1527372246');

       $manager->persist($Produit4);

       $Produit5 =new Produits();
       $Produit5->setCategorie($this->getReference('categorie1'));
       $Produit5->setDescription('Dimensions: 107x168cm (5’5"x3’6") Will bring a cool, casual vibe into your home with the tribal-influenced design with ivory, red, blue and yellow colour tones.   52% cotton, 23% polyester, 13% acrylic and 12% rayon yarn and...');
       $Produit5->setNom('IVORY RUGS');
       $Produit5->setPrix('184');
       $Produit5->setTva('20');
       $Produit5->setDisponible('1');
       $Produit5->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/BAJ01-IVORY1_grande.jpg?v=1527372245');

       $manager->persist($Produit5);

       $Produit6 =new Produits();
       $Produit6->setCategorie($this->getReference('categorie2'));
       $Produit6->setDescription('Type: HandbagsStyle: Fashion Shape: heartColor: Red black blue pinkMain Material: Rhinestone diamond Size: 25*16*8cm');
       $Produit6->setNom('HEART SHAPED DIAMONDS WOMEN EVENING BAGS');
       $Produit6->setPrix('38');
       $Produit6->setTva('20');
       $Produit6->setDisponible('1');
       $Produit6->setImage('https://cdn.shopify.com/s/files/1/2645/0874/products/product-image-426220870_grande.jpg?v=1527372244');

       $manager->persist($Produit6);

       $manager->flush();
    }
    public function getOrder(){
      return 8;
    }
}
