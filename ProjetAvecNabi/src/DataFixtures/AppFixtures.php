<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cat1 = new Categorie();
        $cat1->setTypeSupport("PlayStation");
        $cat1->setImgSource("consolePs5.png");
        $manager->persist($cat1);
        
        $scat1 = new SousCategorie();
        $scat1->setTypeJeux("Aventure");
        $scat1->setImgSource("aventure.png");
        $scat1->setCategorie($cat1);
        $manager->persist($scat1);
        
        $scat2 = new SousCategorie();
        $scat2->setTypeJeux("Guerre");
        $scat2->setImgSource("tank.png");
        $scat2->setCategorie($cat1);
        $manager->persist($scat2);


        $cat2 = new Categorie();
        $cat2->setTypeSupport("XBox");
        $cat2->setImgSource("consoleXbox.png");
        $manager->persist($cat2);

        
        $scat3 = new SousCategorie();
        $scat3->setTypeJeux("Aventure");
        $scat3->setImgSource("aventure.png");
        $scat3->setCategorie($cat2);
        $manager->persist($scat3);
        
        $scat4 = new SousCategorie();
        $scat4->setTypeJeux("Guerre");
        $scat4->setImgSource("tank.png");
        $scat4->setCategorie($cat2);
        $manager->persist($scat4);

        $prod1 = new Produit();
        $prod1 ->setNom("Gta aventure ");
        $prod1 ->setPrix("69.99");
        $prod1 ->setPhoto("Gta.png");
        $prod1 ->setLibelleCourt("Produit super description courte(...)");
        $prod1 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod1);
        $prod1->setSouscategorie($scat1);

        $prod2 = new Produit();
        $prod2 ->setNom("Fifa");
        $prod2 ->setPrix("79.99");
        $prod2 ->setPhoto("Fifa2023.png");
        $prod2 ->setLibelleCourt("Produit super description courte(...)");
        $prod2 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod2);
        $prod2->setSouscategorie($scat1);


        $prod3 = new Produit();
        $prod3 ->setNom("Fifa");
        $prod3 ->setPrix("99.99");     
        $prod3 ->setPhoto("Fifa2023.png");
        $prod3 ->setLibelleCourt("Produit super description courte (PlayStation/Guerre");
        $prod3 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod3);
        $prod3->setSouscategorie($scat2);


        $manager->flush();
    }
}
