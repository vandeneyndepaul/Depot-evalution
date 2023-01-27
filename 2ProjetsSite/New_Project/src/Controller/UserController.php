<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditProfilType;
use Doctrine\ORM\Mapping\Id;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
    
        return $this->render('user/index.html.twig', [
        
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


    #[Route('/EditProfil', name: 'app_editprofil')]
    public function EditProfil(Request $request, EntityManagerInterface $em)
    {
        $user=$this->getUser();
        $form = $this->createForm(EditProfilType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($user);
            $em->flush();
            

            $this->addflash('message', "profil mis a jour");
            return $this->redirectToRoute(('app_user'));
        }

        return $this->render('user/EditProfil.html.twig', [
            'form' => $form->createView(),
        ]);

    }


    #[Route('/livraison', name: 'app_editlivraison')]
    public function Editlivraison(Request $request, EntityManagerInterface $em)
    {
        $user=$this->getUser();
        $form = $this->createForm(EditProfilType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($user);
            $em->flush();
            

            return $this->redirectToRoute(('app_valid'));
        }

        return $this->render('user/Editlivraison.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}



