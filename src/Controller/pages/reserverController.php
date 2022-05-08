<?php

namespace App\Controller\pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class reserverController extends AbstractController
{
    /**
     * @Route("/reserver", name="reserver")
     */
    public function show()
    {
        return $this->render('site/pages/reserver.html.twig', ['baseline' => ['baseLineWelcome' => 'reserver', 'baseLineName' => '', 'baseLineSlogan' => '']]);
    }
}
