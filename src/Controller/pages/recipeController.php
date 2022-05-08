<?php

namespace App\Controller\pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class recipeController extends AbstractController
{
    /**
     * @Route("/recipes", name="recipes")
     */
    public function show()
    {
        return $this->render('site/pages/recipe.html.twig', ['baseline' => ['baseLineWelcome' => 'Recette', 'baseLineName' => 'SALT CHICKEN', 'baseLineSlogan' => 'Facile à cuisiner | 10MIN DE PREPARATION']]);
    }
}
