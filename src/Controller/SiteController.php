<?php

namespace App\Controller;

use App\Entity\Club;
use App\Entity\Site;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        return $this->render('site/index.html.twig', [
            'site' => $site,
            'club' => $club,
            'page_name' => 'Accueil',
        ]);
    }

    /**
     * @Route("/equipe", name="equipe")
     */
    public function equipe()
    {

        $club = $this->getDoctrine()->getRepository(Club::class)->findOneBy(array('id' => '1'));
        $site = $this->getDoctrine()->getRepository(Site::class)->findOneBy(array('id' => '1'));

        return $this->render('site/equipe.html.twig', [
            'site' => $site,
            'club' => $club,
            'page_name' => 'Equipe',
        ]);
    }
}
