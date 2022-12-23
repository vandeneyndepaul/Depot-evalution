<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Produits;
use App\Entity\Souscategories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DataFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $cat1 = new Categories();
        $cat1->setTypeMontre('Homme');
        $cat1->setImgSource('montrehomme.jpg');
        $manager->persist($cat1);

        $cat2 = new Categories();
        $cat2->setTypeMontre('Femme');
        $cat2->setImgSource('montrefemme.jpg');
        $manager->persist($cat2);

        $scat1 = new Souscategories();
        $scat1->setTaille("19'");
        $scat1->setImgsource("LOGO.png");
        $scat1->setCategorie($cat1);
        $manager->persist($scat1);

        $scat2 = new Souscategories();
        $scat2->setTaille("21'");
        $scat2->setImgsource("LOGO.png");
        $scat2->setCategorie($cat1);
        $manager->persist($scat2);
        
        $scat3 = new Souscategories();
        $scat3->setTaille("23'");
        $scat3->setImgsource("LOGO.png");
        $scat3->setCategorie($cat1);
        $manager->persist($scat3);
        
        $scat4 = new Souscategories();
        $scat4->setTaille("19'");
        $scat4->setImgsource("LOGO.png");
        $scat4->setCategorie($cat2);
        $manager->persist($scat4);

        $scat5 = new Souscategories();
        $scat5->setTaille("21'");
        $scat5->setImgsource("LOGO.png");
        $scat5->setCategorie($cat2);
        $manager->persist($scat5);

        $scat6 = new Souscategories();
        $scat6->setTaille("23'");
        $scat6->setImgsource("LOGO.png");
        $scat6->setCategorie($cat2);
        $manager->persist($scat6);
        
        

        $prod1 = new Produits();
        $prod1 ->setName("Montre 1");
        $prod1 ->setPrice("69.99");
        $prod1 ->setPhoto("produit1.png");
        $prod1 ->setLibelleCourt("Produit super description courte(...)");
        $prod1 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod1);
        $prod1->setSouscategorie($scat1);

        $prod2 = new Produits();
        $prod2 ->setName("Montre 2");
        $prod2 ->setPrice("79.99");
        $prod2 ->setPhoto("produit2.png");
        $prod2 ->setLibelleCourt("Produit super description courte(...)");
        $prod2 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod2);
        $prod2->setSouscategorie($scat1);


        $prod3 = new Produits();
        $prod3 ->setName("Montre 3");
        $prod3 ->setPrice("99.99");     
        $prod3 ->setPhoto("produit3.png");
        $prod3 ->setLibelleCourt("Produit super description courte (PlayStation/Guerre");
        $prod3 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod3);
        $prod3->setSouscategorie($scat1);




        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
