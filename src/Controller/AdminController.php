<?php

namespace App\Controller;

use Error;
use App\Entity\Platform;
use App\Entity\VideoGame;
use App\Form\AdminFirstEditVGFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\AdminEditFormType as AdminEditFormType;
use App\Form\AdminRemoveFormType as AdminRemoveFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\AdminNewVideoGameFormType as AdminNewVideoGameFormType;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function admin(EntityManagerInterface $em, Request $request): Response
    {
        $videoGamesList = $em->getRepository(VideoGame::class)->findAll();
        $user = $this->getUser();

        $form = $this->createForm(AdminFirstEditVGFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            /** @var VideoGame */
            $vg = $form->get('videogame')->getData();

            if($vg) {
                $id = $vg->getId();

                return $this->redirectToRoute('app_admin_edit', ['id' => $id]);
            } else {
                throw new Error('erreur à la sélection du jeu');
            }
        }


        return $this->render('admin/admin-home.html.twig', [
            'controller_name' => 'AdminController',
            'videogames' => $videoGamesList,
            'user' => $user,
            'form' => $form
        ]);
    }

    #[Route('/admin/new', name:'app_admin_new', methods:["GET", "POST"])]
    public function adminAddVideoGame(Request $request, EntityManagerInterface $em): Response
    {
        $videoGame = new VideoGame();
        $platforms = $em->getRepository(Platform::class)->findAll();
        $form = $this->createForm(
            AdminNewVideoGameFormType::class,
            $videoGame,
            [
                'attr' => [
                    'enctype' => 'multipart/form-data'
                ]
            ]
        );

        $isAvailable = $form->get('disponibility')->getData();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            // grade's treatment
            $videoGame->setGraphicsGrade($form->get('graphicsGrade')->getData());
            $videoGame->setGameplayGrade($form->get('gameplayGrade')->getData());
            $videoGame->setStorylineGrade($form->get('storylineGrade')->getData());
            $videoGame->setExecutionGrade($form->get('executionGrade')->getData());
            $videoGame->setGrade();

            $em->persist($videoGame);
            $em->flush();

            return $this->redirectToRoute('videogames_list');
        }

        return $this->render('admin/admin-add-videogame.html.twig', [
            'controller_name' => 'AdminController',
            'form' => $form->createView(),
            'dispo' => $isAvailable,
            'platforms' => $platforms
        ]);
    }

    #[Route('/admin/edit/{id}', name:'app_admin_edit', requirements:['id' => '[1-999]\d*'], methods:["GET", "POST"])]
    public function  adminEditVideoGame(EntityManagerInterface $em, Request $request, int $id = 1): Response
    {
        $videoGame = $em->getRepository(VideoGame::class)->findOneBy(['id' => $id]);

        $form = $this->createForm(AdminEditFormType::class, $videoGame); // passez l'objet $videogame au formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // grade's treatment
            $videoGame->setGraphicsGrade($form->get('graphicsGrade')->getData());
            $videoGame->setGameplayGrade($form->get('gameplayGrade')->getData());
            $videoGame->setStorylineGrade($form->get('storylineGrade')->getData());
            $videoGame->setExecutionGrade($form->get('executionGrade')->getData());
            $videoGame->setGrade();
            // Les données du formulaire ont été soumises, vous n'avez donc pas besoin de modifier les données du jeu ici
            $em->flush();

            return $this->redirectToRoute('videogame_card', ['id' => $videoGame->getId()]);
        }

        return $this->render('admin/admin-edit-videogame.html.twig', [
            'controller_name' => 'AdminController',
            'videogame' => $videoGame,
            'form' => $form->createView() // Utilisez createView() pour passer le formulaire à la vue
        ]);
    }
    

    #[Route('/admin/remove/', name:'app_admin_remove', methods:["GET", "POST"])]
    public function  adminRemoveVideoGame(EntityManagerInterface $em, Request $request): Response
    {
        $videoGame = new VideoGame();
        /** @var App\Form\AdminRemoveFormType */
        $form = $this->createForm(AdminRemoveFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() && $request->get('question'))
        {
            $videoGame = $em->getRepository(VideoGame::class)->find($form->get('videogame')->getData());

            if($videoGame)  {
                $em->remove($videoGame);
                $em->flush();
                
                return $this->redirectToRoute('videogames_list');
            } else {
                throw new Error('Impossible de trouver le jeu vidéo en question');
            }

        }

        return $this->render('admin/admin-remove-videogame.html.twig', [
            'controller_name' => 'AdminController',
            'form' => $form
        ]);
    }
}
