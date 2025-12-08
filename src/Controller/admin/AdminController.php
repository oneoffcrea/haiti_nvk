<?php

namespace App\Controller\admin;

use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(Request $request, UserRepository $UserRepo): Response
    {

        $user = $this->getUser();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        }


        $data = $UserRepo->findAll();

        return $this->render('admin/index.html.twig', [

            'userAdmin' => $data
        ]);
    }


    #[Route('/admin_profil', name: 'app_admin_profil')]
    public function profil_admin(Request $request, UserRepository $UserRepo): Response
    {




        return $this->render('admin/profil/index.html.twig', []);
    }
}
