<?php

namespace App\Controller\admin;

use App\Entity\Categories;
use App\Entity\Club;
use App\Form\ClubType;
use App\Repository\ClubRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


final class ClubController extends AbstractController
{

    #[Route('/admin/club', name: 'app_admin_club')]
    public function index(Request $request, EntityManagerInterface $entity, ClubRepository $clubRepository): Response
    {


        $club = new Club;
        $cat = new Categories;
        $form = $this->createForm(ClubType::class, $club);

        $form->handleRequest($request);
        $date = new DateTimeImmutable();


        if ($form->isSubmitted() && $form->isValid()) {

            $dataClub = $form->getData();
            $infos = $dataClub->getNom();


            $exist = $clubRepository->findBy(['nom' => $infos]);

            if (!$exist) {
                $club->setDateCreation($date);


                $entity->persist($club);
                $entity->flush();
            }

            $this->addFlash('warning', 'Ce club est dja en base de donnée');
        }

        return $this->render('admin/club/index.html.twig', [
            'formClub' => $form->createView()
        ]);
    }


    #[Route('/admin/show-club', name: 'app_admin_club_show')]
    public function show(ClubRepository $clubRepository): Response
    {

        $clubs = $clubRepository->findAll();


        return $this->render('admin/club/show.html.twig', [
            'showClub' => $clubs
        ]);
    }


    #[Route('/admin/profil-club/{id}', name: 'app_admin_club_profil')]
    public function profil(Club $club): Response
    {

        return $this->render('admin/club/profil.html.twig', [
            'profil' => $club,
        ]);
    }
}
