<?php

namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Ecommerce\EcommerceBundle\Entity\Media;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media=new Media();
        $media->setPath('https://cdn.shopify.com/s/files/1/2645/0874/products/Kazak-4112_grande.jpg?v=1527372239');
        $media->setAlt('carpet');

        $manager->persist($media);

        $media2=new Media();
        $media2->setPath('http://yahoo.fr');
        $media2->setAlt('sandals');

        $manager->persist($media2);

        $media3=new Media();
        $media3->setPath('https://cdn.shopify.com/s/files/1/2645/0874/products/product-image-518647863_grande.jpg?v=1527372233');
        $media3->setAlt('bags');

        $manager->persist($media3);

        $media4=new Media();
        $media4->setPath('https://cdn.shopify.com/s/files/1/2645/0874/products/product-image-209580338_grande.jpg?v=1527372234');
        $media4->setAlt('clutch');

        $manager->persist($media4);



        $manager->flush();

        $this->addReference('media1',$media);
        $this->addReference('media2',$media2);
        $this->addReference('media3',$media3);
        $this->addReference('media4',$media4);
    }
    public function getOrder(){
      return 1;
    }
}
