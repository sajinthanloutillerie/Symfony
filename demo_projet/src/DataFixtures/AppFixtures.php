<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Produit;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        for($i =1; $i<=10;$i++)
        {
            $produit = new Produit();
            $produit->setTitle("Titre du produit numéro $i")
                    ->setContent("<p>Contenu du produit numéro $i</p>")
                    ->setImage("http://placehold.it/350x150")
                    ->setCreatedAt(new \DateTime());

            $manager->persist($produit);
        }

        $manager->flush();
    }
}
