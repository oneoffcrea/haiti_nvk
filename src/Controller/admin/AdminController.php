<?php

namespace App\Controller\admin;

use App\Entity\Categories;
use App\Form\CategorieType;
use App\Form\UserType;
use App\Repository\CategoriesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
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

        return $this->render('admin/profil/index.html.twig', [

            'userAdmin' => $data
        ]);
    }


    #[Route('/admin_club_categorie', name: 'app_admin_categorie')]
    public function profil_admin(Request $request, CategoriesRepository $categories, EntityManagerInterface $entityManager): Response
    {

        $cat = new Categories();
        $form = $this->createForm(CategorieType::class, $cat);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($cat);
            $entityManager->flush();

            $this->addFlash('success', 'Vous ajouter une nouvelle catégorie');

            return $this->redirectToRoute('app_admin_categorie');
        }


        $categories->findAll();

        return $this->render('admin/club/categorie.html.twig', [

            'cate' => $form->createView()
        ]);
    }
}
