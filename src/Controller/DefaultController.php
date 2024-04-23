<?php

namespace App\Controller;

use App\Entity\AvatarPicture;
use App\Entity\Comments;
use App\Entity\User;
use App\Entity\VideoGame;
use App\Form\CommentsGuestFormType;
use App\Form\CommentsUserFormType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Error;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage', methods:["GET", "HEAD"])]
    public function index(EntityManagerInterface $em): Response
    {
        $videoGames = $em->getRepository(VideoGame::class)->findAll();
        if($videoGames) {
            $randomkeys = array_rand($videoGames, 4);
            $randomVideoGames = array_intersect_key($videoGames, array_flip($randomkeys));
        
            return $this->render('default/index.html.twig', [
                'controller_name' => 'DefaultController',
                'videoGames' => $randomVideoGames
            ]);
        }
        


        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController'
        ]);
    }

    #[Route('/videogames', name: "videogames_list", methods:"GET")]
    public function videogamesList(EntityManagerInterface $em): Response 
    {
        $videoGames = $em->getRepository(VideoGame::class)->findAll();

        return $this->render('videogames/videogame-list.html.twig', [
            'controller_name' => 'DefaultController',
            'videoGames' => $videoGames
        ]);
    }

    #[Route('videogames/{id}', name:"videogame_card", requirements: ['id' => '[1-999]\d*'], methods:["GET", "POST"])]
    public function videogamesCard(EntityManagerInterface $em, int $id, Request $request) : Response 
    {
        $videoGame = $em->getRepository(VideoGame::class)->findOneBy(['id' => $id]);

        if(!$videoGame)
            throw $this->createNotFoundException('Jeu Vidéo introuvable !');

        $comments = $this->updateCommentsList($id, $em);

        $this->calculateAverageUsersGrade($id, $em);
        
        setlocale(LC_TIME, 'fr-FR');
        error_log($id);

        $user = $this->getUser();


        $form = $this->createForm(CommentsUserFormType::class);
        $guestForm = $this->createForm(CommentsGuestFormType::class);

        if($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()) {
                $commentForm = new Comments(
                    $user, 
                    $videoGame,
                    $form['title']->getData(),
                    $form['content']->getData(),
                    $form['grade']->getData(),
                    new DateTime()
                );

                if($commentForm) {
                    $em->persist($commentForm);
                    $em->flush();
                }

                $this->calculateAverageUsersGrade($videoGame->getId(), $em);
                $comments = $this->updateCommentsList($videoGame->getId(), $em);
                $videoGame->setComments($comments);

                return $this->redirectToRoute(
                    'videogame_card', [
                        'id'=> $videoGame->getId()
                    ]);
            }
        } else {
            $u = new User("", "", "", "", "", "Indéterminé", new DateTime(), false, "", "", false);
            $u->setIsRegistered(false);

            $guestForm->handleRequest($request);

            if($guestForm->isSubmitted() && $guestForm->isValid()) {
                $u->setUsername($guestForm['user_username']->getData());
                
                $guestCommentForm = new Comments(
                    $u, 
                    $videoGame, 
                    $guestForm['title']->getData(),
                    $guestForm['content']->getData(),
                    $guestForm['grade']->getData(),
                    new DateTime()
                );
                
                if($guestCommentForm) {
                    $em->persist($guestCommentForm);
                    $em->flush();
                }

                $this->calculateAverageUsersGrade($videoGame->getId(), $em);
                $comments = $this->updateCommentsList($videoGame->getId(), $em);
                $videoGame->setComments($comments);

                return $this->redirectToRoute(
                    'videogame_card', [
                        'id'=> $videoGame->getId()
                    ]);
            }
        }

        return $this->render('videogames/videogame-card.html.twig', [
            'controller_name' => 'DefaultController',
            'videoGame' => $videoGame,
            'id' => $id,
            'platformName' => $videoGame->getPlatform()->getPlatformName(),
            'comments' => $comments,
            'form' => $form,
            'user' => $user,
            'guestForm' => $guestForm
        ]);
    }


    private function calculateAverageUsersGrade($id, EntityManagerInterface $em) {
        $videoGame = $em->getRepository(VideoGame::class)->findOneBy(['id' => $id]);

        if(!$videoGame)
            throw $this->createNotFoundException('Jeu Vidéo introuvable !');

        $averageUsersGrade = 0;
        $comments = $videoGame->getComments();
        
        foreach($comments as $comment)
            $averageUsersGrade += $comment->getGrade();

        if(sizeof($comments) > 0)
            $averageUsersGrade = (int)($averageUsersGrade / sizeof($comments));

        $videoGame->setAverageUsersGrade($averageUsersGrade);
    }


    private function updateCommentsList($id, EntityManagerInterface $em) {
        $videoGame = $em->getRepository(VideoGame::class)->findOneBy(['id' => $id]);

        if(!$videoGame)
            throw $this->createNotFoundException('Jeu Vidéo introuvable !');

        return $videoGame->getComments();
    }
}
