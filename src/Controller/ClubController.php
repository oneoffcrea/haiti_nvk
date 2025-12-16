<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ClubController extends AbstractController
{
    #[Route('/admin/club', name: 'app_club')]
    public function index(): Response
    {



        return $this->render('club/index.html.twig', []);
    }
}
