<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $content = ['baseline' => [
            'baseLineWelcome' => 'Bienvenue',
            'baseLineName' => 'Le Fiasco',
            'baseLineSlogan' => 'spécialité méditerranéenne'
        ]];
        return $this->render('site/pages/home.html.twig', $content);
    }
}
