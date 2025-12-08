<?php

namespace App\Controller\admin;

use App\Entity\User;
use App\Form\UserType;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class UtilisateurController extends AbstractController
{


    #[Route('/admin/utilisateur', name: 'app_admin_utilisateur')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $data = new DateTimeImmutable();

        if ($form->isSubmitted() && $form->isValid()) {

            $user->setRole('ROLE_USER');
            $user->setDateCreation($data);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', ' Creation d\'un nouvelle utilisateur');
            return $this->redirectToRoute('app_admin_utilisateur');
        }


        return $this->render('admin/utilisateur/index.html.twig', [
            'formUserAd' => $form->createView()
        ]);
    }
}
