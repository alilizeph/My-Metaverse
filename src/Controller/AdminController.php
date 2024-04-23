<?php

namespace App\Controller;

use App\Entity\VideoGame;
use App\Form\AdminNewVideoGameFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function admin(EntityManagerInterface $em): Response
    {
        $videoGamesList = $em->getRepository(VideoGame::class)->findAll();

        return $this->render('admin/admin-home.html.twig', [
            'controller_name' => 'AdminController',
            'videogames' => $videoGamesList
        ]);
    }

    #[Route('/admin/new', name:'app_admin_new', methods:["GET", "POST"])]
    public function  adminAddVideoGame(Request $request, EntityManagerInterface $em): Response
    {
        $videoGame = new VideoGame();
        $form = $this->createForm(AdminNewVideoGameFormType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($videoGame);
            $em->flush();

            return $this->redirectToRoute('videogame_card', 
                [
                    'id' => $videoGame->getId()
                ]
            );
        }

        return $this->render('admin/admin-add-videogame.html.twig', [
            'controller_name' => 'AdminController',
            'form' => $form
        ]);
    }

    #[Route('/admin/edit/{id}', name:'app_admin_edit', requirements:['id' => '[1-999]\d*'], methods:["GET", "POST"])]
    public function  adminEditVideoGame(): Response
    {
        return $this->render('admin/admin-edit-videogame.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    

    #[Route('/admin/remove/{id}', name:'app_admin_remove', requirements:['id' => '[1-999]\d*'], methods:["GET", "POST"])]
    public function  adminRemoveVideoGame(): Response
    {
        return $this->render('admin/admin-remove-videogame.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
