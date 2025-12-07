<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;


final class AdminRegisterController extends AbstractController
{
    #[Route('/login_admin_register', name: 'app_admin_register')]
    public function index(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {

        $user = new User();

        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);




        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $form->get('password')->getData();

            $hashed = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashed);

            $user->setRole('ROLE_ADMIN');
            $user->setDateCreation(new \DateTimeImmutable());

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Vous êtes bien enregistré en mode Administrateur');

            return $this->redirectToRoute('app_admin');
        } else {

            $this->addFlash('danger', 'Erreur lors de l’envoi du formulaire !');
        }




        return $this->render('register_admin/index.html.twig', [
            'formRender' => $form->createView()
        ]);
    }
}
