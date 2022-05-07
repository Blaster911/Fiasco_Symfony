<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class mainController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function show()
    {
        return $this->render('site/index.html.twig');
    }
}
