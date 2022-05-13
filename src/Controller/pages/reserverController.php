<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ReserverController extends AbstractController
{
    /**
     * @Route("/reserver", name="reserver")
     */
    public function index(): Response
    {
        $content = ['baseline' => [
            'baseLineWelcome' => '',
            'baseLineName' => 'réserver',
            'baseLineSlogan' => ''
        ]];
        return $this->render('site/pages/reserver.html.twig', $content);
    }
}
