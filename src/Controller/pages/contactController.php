<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function show()
    {
        return $this->render('site/pages/_contact.html.twig', ['baseline' => ['baseLineWelcome' => '', 'baseLineName' => 'Contact', 'baseLineSlogan' => '']]);
    }
}
