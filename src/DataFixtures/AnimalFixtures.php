<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Famille;
use App\Entity\Continent;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Familles
        $c1 = new Famille();
        $c1->setLibelle('mammifères');
        $c1->setDescription('Animaux vertébrés nourissent leurs petits avec du lait');
        $manager->persist($c1);

        $c2 = new Famille();
        $c2->setLibelle('reptiles');
        $c2->setDescription('Animaux vertébrés qui rampent');
        $manager->persist($c2);

        $c3 = new Famille();
        $c3->setLibelle('poissons');
        $c3->setDescription('Animaux invertébrés du monde aquatique');
        $manager->persist($c3);

        // Animaux
        $a1 = new Animal();
        $a1->setNom('Chien')
            ->setDescription('Un animal domestique')
            ->setImage('chien.png')
            ->setPoids(10)
            ->setDangereux(false)
            ->setFamille($c1);
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom('Cochon')
            ->setDescription('Un animal d\'élevage')
            ->setImage('cochon.png')
            ->setPoids(150)
            ->setDangereux(false)
            ->setFamille($c1);
        ;
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom('Serpent')
            ->setDescription('Un animal dangereux')
            ->setImage('serpent.png')
            ->setPoids(3)
            ->setDangereux(true)
            ->setFamille($c2);
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom('Crocodile')
            ->setDescription('Un animal très dangereux')
            ->setImage('crocodile.png')
            ->setPoids(80)
            ->setDangereux(true)
            ->setFamille($c2);
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom('Requin')
            ->setDescription('Un animal marin très dangereux')
            ->setImage('requin.png')
            ->setPoids(800)
            ->setDangereux(true)
            ->setFamille($c3);
        ;
        $manager->persist($a5);

        //Continents
        $c1 = new Continent();
        $c1->setLibelle('Europe');
        $c1->addAnimaux($a1);
        $c1->addAnimaux($a2);
        $manager->persist($c1);

        $c2 = new Continent();
        $c2->setLibelle('Asie');
        $c2->addAnimaux($a1);
        $c2->addAnimaux($a3);
        $manager->persist($c2);

        $c3 = new Continent();
        $c3->setLibelle('Afrique');
        $c3->addAnimaux($a1);
        $c3->addAnimaux($a3);
        $c3->addAnimaux($a4);
        $manager->persist($c3);

        $c4 = new Continent();
        $c4->setLibelle('Océanie');
        $c4->addAnimaux($a1);
        $c4->addAnimaux($a3);
        $c4->addAnimaux($a4);
        $c4->addAnimaux($a5);
        $manager->persist($c4);

        $c5 = new Continent();
        $c5->setLibelle('Amérique');
        $c5->addAnimaux($a1);
        $c5->addAnimaux($a2);
        $c5->addAnimaux($a5);
        $manager->persist($c5);

        $manager->flush();
    }
}
