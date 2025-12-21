<?php

namespace App\Controller\admin;

use App\Entity\User;
use App\Form\UserType;
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
    public function index(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $data = new DateTimeImmutable();

        if ($form->isSubmitted() && $form->isValid()) {

            $us = $form->getData();
            $infos = $us->getNom();

            $existe = $userRepository->findOneBy(['nom' => $infos]);

            if (!$existe) {


                $user->setRole('ROLE_USER');
                $user->setDateCreation($data);

                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', ' Creation d\'un nouvelle utilisateur');
                // return $this->redirectToRoute('app_admin_utilisateur');

            } else {

                $this->addFlash('warning', 'Cette utilisateur exite déja');
            }
        }


        $allUser = $userRepository->findAll();



        return $this->render('admin/utilisateur/index.html.twig', [
            'formUserAd' => $form->createView(),
            'Allusers' => $allUser
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
