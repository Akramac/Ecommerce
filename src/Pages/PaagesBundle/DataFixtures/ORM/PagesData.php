<?php
namespace Pages\PagesBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Pages\PaagesBundle\Entity\Pages;

class PagesData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $page1 = new Pages();
        $page1->setTitre('CGV');
        $page1->setContenu('
            <div class="row">
                <h4>Item Brand and Category</h4>
                <h5>Model S235</h5>
                <p>Colorful Slippers /// Beautiful Moroccan leather sandals 100% handmade</p>
            </div>
            <div class="row">
                <h4>Item Brand and Category</h4>
                <h5>Model S236</h5>
                <p>14 COLORS BACKPACK 100% GENUINE LEATHER BACKPACKS</p>
            </div>
            <div class="row">
                <h4>Item Brand and Category</h4>
                <h5>Model S237</h5>
                <p>DECORATIVE MOROCCAN PILLOW COVER - HANDMADE KILIM RUG - HANDSTITCHING
                       - NO ZIPPERS - 16 "X 20" (41CM X 51CM)</p>
            </div>');
        $manager->persist($page1);

        $page2 = new Pages();
        $page2->setTitre('Mentions légales');
        $page2->setContenu('<div class="row">
                <h4>DROP RUGS</h4>
                <h5>Model 238</h5>
                <p>Dimensions: 68x235cm Using a blend of Argentinian and New Zealand Wool yarns. The timeless, traditional design</p>
            </div>
            <div class="row">
                <h4>IVORY RUGS</h4>
                <h5>Model 239</h5>
                <p>Dimensions: 107x168cm (5’5"x3’6") Will bring a cool, casual vibe into your home with the tribal-influenced design with ivory</p>
            </div>
            <div class="row">
                <h4>KELIM RUG </h4>
                <h5>Model 240 </h5>
                <p>Dimensions: 47x47 cm Hand woven to the highest of standards using a blend of chenille and cotton yarn to create a beautiful flatweave rug.</p>
            </div>');
        $manager->persist($page2);

        $manager->flush();
    }
}
