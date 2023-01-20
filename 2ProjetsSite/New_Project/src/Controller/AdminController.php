<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[IsGranted("ROLE_ADMIN")]
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    #[IsGranted("ROLE_ADMIN")]
    #[Route('/adminHome', name: 'app_adminHome')]
    public function home(): Response
    {
        return $this->render('admin/home.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
