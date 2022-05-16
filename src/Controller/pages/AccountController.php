<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;

class AccountController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    /**
     * @Route("/mon-compte", name="account")
     */
    public function index(): Response
    {
        $user = $this->security->getUser();


        $content = [
            'baseline' => [
                'baseLineWelcome' => "",
                'baseLineName' => 'Mon compte',
                'baseLineSlogan' => '',
            ],
            $user
        ];
        return $this->render('users/account.html.twig', $content);
    }
}
