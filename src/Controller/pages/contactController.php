<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        $content = ['baseline' => [
            'baseLineWelcome' => '',
            'baseLineName' => 'Contact',
            'baseLineSlogan' => ''
        ]];
        return $this->render('site/pages/contact.html.twig', $content);
    }
}
