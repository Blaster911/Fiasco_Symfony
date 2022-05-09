<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    /**
     * @Route("/a-propos", name="a-propos")
     */
    public function show()
    {
        $content = ['baseline' => [
            'baseLineWelcome' => '',
            'baseLineName' => 'A propos de nous',
            'baseLineSlogan' => ''
        ]];
        return $this->render('site/pages/about.html.twig', $content);
    }
}
