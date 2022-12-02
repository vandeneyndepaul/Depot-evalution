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
        $cat1->setImgSource("IMG/consolePs5.png");
        $manager->persist($cat1);
        
        $scat1 = new SousCategorie();
        $scat1->setTypeJeux("Aventure");
        $scat1->setImgSource("IMG/aventure.png");
        $scat1->setCategorie($cat1);
        $manager->persist($scat1);
        
        $scat2 = new SousCategorie();
        $scat2->setTypeJeux("Guerre");
        $scat2->setImgSource("IMG/tank.png");
        $scat2->setCategorie($cat1);
        $manager->persist($scat2);


        $cat2 = new Categorie();
        $cat2->setTypeSupport("XBox");
        $cat2->setImgSource("IMG/consoleXbox.png");
        $manager->persist($cat2);

        
        $scat1 = new SousCategorie();
        $scat1->setTypeJeux("Aventure");
        $scat1->setImgSource("IMG/aventure.png");
        $scat1->setCategorie($cat2);
        $manager->persist($scat1);
        
        $scat2 = new SousCategorie();
        $scat2->setTypeJeux("Guerre");
        $scat2->setImgSource("IMG/tank.png");
        $scat2->setCategorie($cat2);
        $manager->persist($scat2);

        $prod1 = new Produit();
        $prod1 ->setPrix("69.99");
        $prod1 ->setPhoto("IMG/Gta.png");
        $prod1 ->setLibelleCourt("Profuit super description courte(...)");
        $prod1 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod1);
        $prod1->setSouscategorie($scat1);

        $prod2 = new Produit();
        $prod2 ->setPrix("59.99");
        $prod2 ->setPhoto("IMG/Fifa2023.png");
        $prod2 ->setLibelleCourt("Profuit super description courte(...)");
        $prod2 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod2);
        $prod2->setSouscategorie($scat1);


        $manager->flush();
    }
}
