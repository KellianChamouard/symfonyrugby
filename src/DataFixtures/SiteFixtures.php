<?php

namespace App\DataFixtures;

use App\Entity\Site;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SiteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $site= new Site();
        $site->setSitedescription('desc');
        $site->setSitelogo('../images/logo.png');
        $site->setSitemaincolor('red');
        $manager->persist($site);

        $manager->flush();
    }
}
