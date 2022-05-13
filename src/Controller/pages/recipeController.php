<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class RecipeController extends AbstractController
{
    /**
     * @Route("/recette", name="recette")
     */
    public function index(): Response
    {
        $content = ['baseline' => [
            'baseLineWelcome' => 'Recette',
            'baseLineName' => 'SALT CHICKEN',
            'baseLineSlogan' => 'Facile à cuisiner | 10MIN DE PREPARATION'
        ]];
        return $this->render('site/pages/recipe.html.twig', $content);
    }
}
