<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cat1 = new Categorie();
        $cat1->setTypeSupport("PlayStation®5");
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

        $scat5 = new SousCategorie();
        $scat5->setTypeJeux("Sport");
        $scat5->setImgSource("sports.png");
        $scat5->setCategorie($cat1);
        $manager->persist($scat5);

        $cat2 = new Categorie();
        $cat2->setTypeSupport("XBox®X");
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

        $scat6=new SousCategorie();
        $scat6->setTypeJeux("Sport");
        $scat6->setImgSource("sports.png");
        $scat6->setCategorie($cat2);
        $manager->persist($scat6);




        $prod1 = new Produit();
        $prod1 ->setNom("Gta aventure ");
        $prod1 ->setPrix("69.99");
        $prod1 ->setPhoto("gtaPs5.png");
        $prod1 ->setLibelleCourt("Produit super description courte(...)");
        $prod1 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod1);
        $prod1->setSouscategorie($scat1);

        $prod2 = new Produit();
        $prod2 ->setNom("FifaPs5");
        $prod2 ->setPrix("79.99");
        $prod2 ->setPhoto("fifaPs5.png");
        $prod2 ->setLibelleCourt("Produit super description courte(...)");
        $prod2 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod2);
        $prod2->setSouscategorie($scat1);


        $prod3 = new Produit();
        $prod3 ->setNom("FifaXbox");
        $prod3 ->setPrix("99.99");     
        $prod3 ->setPhoto("fifaXbox.png");
        $prod3 ->setLibelleCourt("Produit super description courte (PlayStation/Guerre");
        $prod3 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod3);
        $prod3->setSouscategorie($scat2);
        

        $u1 = new User();
        $u1->setEmail("user@gmail.com");
        $u1->setRoles(["ROLE_USER"]);
        $u1->setPassword('$2y$13$W7CJMas5HtRbCoJnz7Kss.LIqnqkOgmqfeWJXlFXclXBg1eLRF3xu');
        $manager->persist($u1);

        $u2 = new User();
        $u2->setEmail("admin@gmail.com");
        $u2->setRoles(["ROLE_ADMIN"]);
        $u2->setPassword('$2y$13$W7CJMas5HtRbCoJnz7Kss.LIqnqkOgmqfeWJXlFXclXBg1eLRF3xu');
        $manager->persist($u2);

        $manager->flush();
    }
}
