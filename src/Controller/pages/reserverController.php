<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReserverController extends AbstractController
{
    /**
     * @Route("/reserver", name="reserver")
     */
    public function show()
    {
        return $this->render('site/_pages/reserver.html.twig', ['baseline' => ['baseLineWelcome' => 'reserver', 'baseLineName' => '', 'baseLineSlogan' => '']]);
    }
}
