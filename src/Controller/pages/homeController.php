<?php

namespace App\Controller\pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class homeController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function show()
    {
        return $this->render('site/pages/home.html.twig', ['baseline' => ['baseLineWelcome' => 'Bienvenue', 'baseLineName' => 'Le Fiasco', 'baseLineSlogan' => 'spécialité méditerranéenne']]);
    }
}
