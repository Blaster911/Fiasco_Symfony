<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReserverController extends AbstractController
{
    /**
     * @Route("/reserver", name="reserver")
     */
    public function index()
    {
        $content = ['baseline' => [
            'baseLineWelcome' => '',
            'baseLineName' => 'reserver',
            'baseLineSlogan' => ''
        ]];
        return $this->render('site/pages/reserver.html.twig', $content);
    }
}
