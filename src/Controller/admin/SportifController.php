<?php

namespace App\Controller\admin;

use App\Entity\Sportif;
use App\Form\SportifType;
use App\Repository\SportifRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

final class SportifController extends AbstractController
{

    #[Route('/admin/sportif', name: 'app_admin_sportif')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        SportifRepository $sportifRepository,
        #[Autowire('%kernel.project_dir%/public/assets/img/photo_sportif/')] string $dossier,
        SluggerInterface $slugger
    ): Response {

        $sportifuser = new Sportif;
        $form = $this->createForm(SportifType::class, $sportifuser);

        $createdate = new DateTimeImmutable();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            // ENVOYER UNE PHOTO
            $photo = $form->get('photo')->getData();
            $nom = $form->get('nom')->getData();

            if ($photo) {

                // PATHINFO extrait le nom du fichier sans son extension
                $nomDuFichier = pathinfo($photo->getClientOriginalName(), PATHINFO_FILENAME);

                // Le slug permet de nettoyer le nom du fichier (sans espaces ni caractères spéciaux)
                $nomModifier = $slugger->slug($nomDuFichier);

                // Nom final du fichier avec le nom + slug + extension
                $vraiNom = $nom . '-' . $nomModifier . '.' . $photo->guessExtension();

                // Déplace le fichier dans le dossier cible avec le nom final
                try {
                    $photo->move($dossier, $vraiNom);
                } catch (FileException $e) {
                    // Gère l’exception en cas d’erreur lors de l’upload du fichier
                }
            }
            // FIN ENVOYER UNE PHOTO

            $user = $form->get('nom')->getData();

            $infosNom = $sportifRepository->findBy([
                'nom' => $user
            ]);


            // SI L'UtiLISATEUR N'EXISTE PAS  - ON CREER L'UTILISATEUR

            if (!$infosNom) {

                $sportifuser->setPhoto($vraiNom);
                $sportifuser->setDateCreation($createdate);

                $entityManager->persist($sportifuser);
                $entityManager->flush();

                $this->addFlash('success', 'Vous avez creer un sportif');
            } else {

                $this->addFlash('warning', 'Ce profil existe déja');
            }

            // FIN 'UTiLISATEUR N'EXISTE PAS  - ON CREER L'UTILISATEUR



        }


        $sportifAll = $sportifRepository->findAll();
        return $this->render('admin/sportif/index.html.twig', [
            'sportif' => $form->createView(),
            'formSportif' => $sportifAll
        ]);
    }


    #[Route('/admin/sportif-show', name: 'app_admin_sportif_show')]
    public function show(SportifRepository $sportifRepository): Response
    {

        $sportifAll = $sportifRepository->findAll();

        return $this->render('admin/sportif/show.html.twig', [
            'formSportif' => $sportifAll,
        ]);
    }

    #[Route('/admin/sportif/profil/{id}', name: 'app_admin_sportif_profil')]
    public function profil(Sportif $sportif): Response
    {
        $infos = $sportif;
        return $this->render('admin/sportif/profil.html.twig', [
            'sportif' => $infos
        ]);
    }
}
