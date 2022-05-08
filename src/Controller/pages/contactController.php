<?php

namespace App\Controller\pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class contactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function show()
    {
        return $this->render('site/pages/contact.html.twig', ['baseline' => ['baseLineWelcome' => '', 'baseLineName' => 'Contact', 'baseLineSlogan' => '']]);
    }
}
