<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function show()
    {
        return $this->render('site/_pages/home.html.twig', ['baseline' => ['baseLineWelcome' => 'Bienvenue', 'baseLineName' => 'Le Fiasco', 'baseLineSlogan' => 'spécialité méditerranéenne']]);
    }
}
