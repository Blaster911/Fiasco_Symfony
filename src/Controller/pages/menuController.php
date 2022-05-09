<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MenuController extends AbstractController
{

    /**
     * @Route("/menu" , name="menu")
     */
    public function show()
    {
        $content = [
            'baseline' =>
            [
                'baseLineWelcome' => '',
                'baseLineName' => 'Menu',
                'baseLineSlogan' => ''
            ]
        ];
        return $this->render('site/pages/menu.html.twig', $content);
    }
}
