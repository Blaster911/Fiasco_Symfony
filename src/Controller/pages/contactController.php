<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        $content = ['baseline' => [
            'baseLineWelcome' => '',
            'baseLineName' => 'Contact',
            'baseLineSlogan' => ''
        ]];
        return $this->render('site/pages/contact.html.twig', $content);
    }
}
