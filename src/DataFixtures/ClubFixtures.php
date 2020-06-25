<?php

namespace App\DataFixtures;

use App\Entity\Club;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ClubFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $club= new Club();
        $club->setClubname('Belvèze Razes XIII');
        $club->setClubcc('Fédérale');
        $club->setClubadress('33 Avenue du Lac, 11240 Belvèze-du-Razès');
        $club->setClubcountry('France');
        $club->setClubphone('04 68 69 14 08');
        $club->setClubmail('contact@belvezerazes13.fr');
        $manager->persist($club);

        $manager->flush();
    }
}
