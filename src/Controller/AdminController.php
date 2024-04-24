<?php

namespace App\Controller;

use App\Entity\Platform;
use App\Entity\VideoGame;
use App\Form\AdminNewVideoGameFormType;
use App\Form\AdminRemoveFormType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Error;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function admin(EntityManagerInterface $em): Response
    {
        $videoGamesList = $em->getRepository(VideoGame::class)->findAll();
        $user = $this->getUser();
        return $this->render('admin/admin-home.html.twig', [
            'controller_name' => 'AdminController',
            'videogames' => $videoGamesList,
            'user' => $user
        ]);
    }

    #[Route('/admin/new', name:'app_admin_new', methods:["GET", "POST"])]
    public function adminAddVideoGame(Request $request, EntityManagerInterface $em): Response
    {
        $videoGame = new VideoGame();
        $platforms = $em->getRepository(Platform::class)->findAll();
        $form = $this->createForm(
            AdminNewVideoGameFormType::class,
            $videoGame, [
                'attr' => [
                    'enctype' => 'multipart/form-data'
                ]
                ]
                ,
        );

        $isAvailable = $form->get('disponibility')->getData();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
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

    #[Route('/admin/edit/', name:'app_admin_edit', requirements:['id' => '[1-999]\d*'], methods:["GET", "POST"])]
    public function  adminEditVideoGame(): Response
    {
        return $this->render('admin/admin-edit-videogame.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    

    #[Route('/admin/remove/', name:'app_admin_remove', methods:["GET", "POST"])]
    public function  adminRemoveVideoGame(EntityManagerInterface $em, Request $request): Response
    {
        $videoGame = new VideoGame();

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
