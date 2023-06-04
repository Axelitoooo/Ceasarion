<?php

// src/DataFixtures/PersonnaliteFixture.php
namespace App\DataFixtures;

use App\Entity\Personnalite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class PersonnaliteFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $personnalitesData = [
            [
                'name' => 'Kylian Mbappé',
                'dateNaissance' => new \DateTime('1290-01-01'),
                'dateMort' => new \DateTime('1320-12-31'),
                'description' => "Kylian Mbappé, né le 20 décembre 1998 à Paris, est un footballeur international français qui évolue au poste d'attaquant au Paris Saint-Germain. Vainqueur du championnat de France en 2017 avec l'AS Monaco, il est transféré le 31 août 2017 au Paris Saint-Germain.",
                'imageURL' => 'https://img.a.transfermarkt.technology/portrait/big/342229-1682683695.jpg?lm=1',
            ],
            [
                'name' => 'Benjamin Pavard',
                'dateNaissance' => new \DateTime('1280-02-15'),
                'dateMort' => new \DateTime('1322-05-20'),
                'description' => "Benjamin Pavard, né le 28 mars 1996 à Maubeuge, est un footballeur international français qui évolue au poste de défenseur central et de latéral droit au Bayern Munich.",
                'imageURL' => 'https://assets-fr.imgfoot.com/media/cache/1200x1200/benjamin-pavard-2223.jpg',
            ],
            [
                'name' => 'Dayot Upamecano',
                'dateNaissance' => new \DateTime('1275-06-10'),
                'dateMort' => new \DateTime('1323-01-05'),
                'description' => "Dayot Upamecano, né le 27 octobre 1998 à Évreux, est un footballeur international français qui évolue au poste de défenseur dans l'équipe du Bayern Munich.",
                'imageURL' => 'https://www.voici.fr/imgre/fit/~1~voi~2022~12~19~9a7fc7c2-f1fc-4769-b4a4-397eba3cdf45.jpeg/1703x2286/quality/80/dayot-upamecano.jpeg',
            ],
            [
                'name' => 'Antoine Griezmann',
                'dateNaissance' => new \DateTime('1225-11-20'),
                'dateMort' => new \DateTime('1324-09-15'),
                'description' => "Antoine Griezmann, surnommé « Grizi », « Grizou » ou encore « Petit Prince » par ses fans et coéquipiers, né le 21 mars 1991 à Mâcon, est un footballeur international français jouant au poste d'attaquant ou milieu offensif à l'Atlético de Madrid.",
                'imageURL' => 'https://img.lemde.fr/2021/07/07/0/0/5479/3653/664/0/75/0/b6781ad_5167376-01-06.jpg',
            ],
        ];

        foreach ($personnalitesData as $personnaliteData) {
            $personnalite = new Personnalite();
            $personnalite->setName($personnaliteData['name']);
            $personnalite->setDateNaissance($personnaliteData['dateNaissance']);
            $personnalite->setDateMort($personnaliteData['dateMort']);
            $personnalite->setDescription($personnaliteData['description']);
            $personnalite->setImageURL($personnaliteData['imageURL']);
            $personnalite->setSlug($personnaliteData['name']);

            $manager->persist($personnalite);
        }

        $manager->flush();
    }
    public static function getGroups(): array
    {
        return ['personnalite'];
    }
}
