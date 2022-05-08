<?php

namespace App\Controller\pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class aboutController extends AbstractController
{
    /**
     * @Route("/a-propos", name="a-propos")
     */
    public function show()
    {
        return $this->render('site/pages/about.html.twig', ['baseline' => ['baseLineWelcome' => '', 'baseLineName' => 'A propos de nous', 'baseLineSlogan' => '']]);
    }
}
