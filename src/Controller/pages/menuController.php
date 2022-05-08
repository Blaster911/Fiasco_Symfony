<?php

namespace App\Controller\pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class menuController extends AbstractController
{
    /**
     * @Route("/menu", name="menu")
     */
    public function show()
    {
        return $this->render('site/pages/menu.html.twig', ['baseline' => ['baseLineWelcome' => '', 'baseLineName' => 'Menu', 'baseLineSlogan' => '']]);
    }
}
