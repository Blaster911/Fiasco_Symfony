<?php

namespace App\Controller\Pages;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AccountController extends AbstractController
{

    /**
     * @Route("/mon-compte", name="account")
     */
    public function index(): Response
    {

        // On vérifie si l'utilisateur est bien authentifié
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        // Récupération de l'objet User et injection dans la page
        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $email = $user->getEmail();

        $content = [
            'baseline' => [
                'baseLineWelcome' => "Mon compte",
                'baseLineName' => "LE FIASCO",
                'baseLineSlogan' => $email,
            ]

        ];
        return $this->render('users/account.html.twig', $content);
    }
}
