<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\User;

use App\Entity\Categories;
use App\Entity\Commandes;
use App\Entity\Produits;
use App\Entity\SeCompose;
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
        $prod1 ->setName("Montre bleu");
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
        $prod3 ->setLibelleCourt("Produit super description courteUser (PlayStation/Guerre");
        $prod3 ->setLibelleLong("Description en detail du produit couleur forme de ou ca viens etc etc etc descriptif long");
        $manager->persist($prod3);
        $prod3->setSouscategorie($scat1);


        $u1 = new User();
        $u1->setEmail("user@gmail.com");
        $u1->setRoles(["ROLE_USER"]);
        $u1->setPassword('$2y$13$W7CJMas5HtRbCoJnz7Kss.LIqnqkOgmqfeWJXlFXclXBg1eLRF3xu');
        $u1->setLastname('vde');
        $u1->setFirstname('paul');
        $u1->setAdress('21 rue bertreux');
        $u1->setZipcode('80000');
        $u1->setCity('Amiens');
        $manager->persist($u1);

        $u2 = new User();
        $u2->setEmail("admin@gmail.com");
        $u2->setRoles(["ROLE_ADMIN"]);
        $u2->setPassword('$2y$13$W7CJMas5HtRbCoJnz7Kss.LIqnqkOgmqfeWJXlFXclXBg1eLRF3xu');
        $u2->setLastname('harlif');
        $u2->setFirstname('moh');
        $u2->setAdress('18 rue btx');
        $u2->setZipcode('80000');
        $u2->setCity('Amiens');
        $manager->persist($u2);


        $u3 = new User();
        $u3->setEmail("user2@gmail.com");
        $u3->setRoles(["ROLE_USER"]);
        $u3->setPassword('$2y$13$W7CJMas5HtRbCoJnz7Kss.LIqnqkOgmqfeWJXlFXclXBg1eLRF3xu');
        $u3->setLastname('bit');
        $u3->setFirstname('toto');
        $u3->setAdress('21 rue beige');
        $u3->setZipcode('80000');
        $u3->setCity('Amiens');
        $manager->persist($u3);

    

        $com1 = new Commandes();
        $com1->setUser($u1);
        $com1->setDate(new DateTime());
        $manager->persist($com1);

        $sc1 = new SeCompose();
        $sc1->setProduit($prod1);
        $sc1->setCommande($com1);
        $sc1->setQuantite(5);
        $manager->persist($sc1);

        // $sc2 = new SeCompose();
        // $sc2->setProduit($prod2);
        // $sc2->setCommande($com1);
        // // $sc2->setQuantite(2);
        // $manager->persist($sc2);
        // $manager->flush();
        // // $product = new Product();
        // // $manager->persist($product);

        $manager->flush();
    }
}
