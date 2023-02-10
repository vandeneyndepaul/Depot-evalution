<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[IsGranted("ROLE_USER")]
    #[Route('/userHome', name: 'app_userHome')]
    public function home(): Response
    {
        return $this->render('user/home.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

}
