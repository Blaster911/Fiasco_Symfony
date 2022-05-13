<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AbstractController
{
    /**
     * @Route("/a-propos", name="a-propos")
     */
    public function index(): Response
    {
        $content = ['baseline' => [
            'baseLineWelcome' => '',
            'baseLineName' => 'à propos de nous',
            'baseLineSlogan' => ''
        ]];
        return $this->render('site/pages/about.html.twig', $content);
    }
}
