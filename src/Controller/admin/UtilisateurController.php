<?php

namespace App\Controller\admin;

use App\Entity\Categories;
use App\Entity\User;
use App\Form\CategorieType;
use App\Form\UserType;
use App\Repository\CategoriesRepository;
use App\Repository\UserRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class UtilisateurController extends AbstractController
{


    #[Route('/admin/utilisateur', name: 'app_admin_utilisateur')]
    public function index(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, CategoriesRepository $catego): Response
    {
        $data = new DateTimeImmutable();

        // ===== FORMULAIRE UTILISATEUR (GAUCHE) =====
        $user = new User();
        $formUserAd = $this->createForm(UserType::class, $user);  // ← Nom DISTINCT
        $formUserAd->handleRequest($request);

        if ($formUserAd->isSubmitted() && $formUserAd->isValid()) {
            $us = $formUserAd->getData();
            $infos = $us->getNom();
            $existe = $userRepository->findOneBy(['nom' => $infos]);

            if (!$existe) {
                $user->setRole('ROLE_USER');
                $user->setDateCreation($data);
                $entityManager->persist($user);
                $entityManager->flush();
                $this->addFlash('success', 'Nouvel utilisateur créé !');
            } else {
                $this->addFlash('warning', 'Cet utilisateur existe déjà');
            }
        }

        // ===== FORMULAIRE CATÉGORIE (DROITE) =====
        $cat = new Categories();
        $formCat = $this->createForm(CategorieType::class, $cat);  // ← Nom DISTINCT
        $formCat->handleRequest($request);

        if ($formCat->isSubmitted() && $formCat->isValid()) {
            $entityManager->persist($cat);
            $entityManager->flush();
            $this->addFlash('success', 'Catégorie créée !');
        }

        $allUser = $userRepository->findAll();
        $catAll = $catego->findAll();



        return $this->render('admin/utilisateur/index.html.twig', [
            'formUserAd' => $formUserAd->createView(),  // ← Formulaire User
            'formCat'    => $formCat->createView(),     // ← Formulaire Catégorie
            'Allusers'   => $allUser,
            'cateAll'    => $catAll
        ]);
    }




    #[Route('/admin/utilisateur-show', name: 'app_admin_utilisateur_show')]
    public function show(UserRepository $userRepository): Response
    {

        $allUser = $userRepository->findAll();
        return $this->render('admin/utilisateur/show.html.twig', [
            'allUsers' => $allUser

        ]);
    }



    #[Route('/admin/utilisateur-message', name: 'app_admin_utilisateur_message')]
    public function message(): Response
    {
        return $this->render('admin/utilisateur/message.html.twig', []);
    }



    #[Route('/admin/utilisateur-profil/{id}', name: 'app_admin_utilisateur_profil')]
    public function profil(User $user): Response
    {

        $infos = $user;

        return $this->render('admin/utilisateur/profil.html.twig', [
            'user' => $infos
        ]);
    }
}
