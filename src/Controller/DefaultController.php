<?php

namespace App\Controller;


use App\Entity\Comments;
use App\Entity\Gender;
use App\Entity\User;
use App\Entity\VideoGame;
use App\Form\CommentsGuestFormType;
use App\Form\CommentsUserFormType;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use Error;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage', methods: ["GET", "HEAD"])]
    public function index(EntityManagerInterface $em): Response
    {
        $videoGames = $em->getRepository(VideoGame::class)->findAll();
        if ($videoGames) {
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


    #[Route('/videogames', name: "videogames_list", methods: ["GET", "POST"])]
    public function videogamesList(EntityManagerInterface $em, Request $request): Response
    {
        $videoGames = $em->getRepository(VideoGame::class)->findAll(); 
        // filters 
        $alpha = $request->query->get('alpha'); 
        // Mettre à jour la variable alphabeticalSortOn en fonction de la valeur de alpha 
        $alphabeticalSortOn = $alpha ? true : false; 

        // Effectuer le tri des jeux vidéo en fonction de l'ordre alphabétique si alphabeticalSortOn est vrai
        $sortedVideoGames = $videoGames; 
        if ($alpha) {
            usort($sortedVideoGames, function($a, $b) { 
                return strcmp($a->getName(), $b->getName()); 
            });
        } 
        /*$videoGamesAlphabeticalFiltered = usort($vgprepa, function($a, $b) {
            if ($a->getName() < $b->getName()) {
                return -1;
            }
            if ($a->getName() > $b->getName()) {
                return 1;
            }
        });*/
/*

        $gradeSortOn = false;
        $grade = $request->request->get('gradeB');

        $videoGamesGradeSortFiltered = usort($videoGames, function($a, $b) {
            if ($a->getGrade() < $b->getGrade()) {
                return -1;
            }
            if ($a->getGrade() > $b->getGrade()) {
                return 1;
            }
        });

        $priceSortOn = false;
        $price = $request->request->get('priceB');
        
        $videoGamesPriceSortFiltered = usort($videoGames, function($a, $b) {
            if ($a->getAveragePrice() < $b->getAveragePrice()) {
                return -1;
            }
            if ($a->getAveragePrice() > $b->getAveragePrice()) {
                return 1;
            }
        });

        $randomSortOn = false;
        $random = $request->request->get('randomB');
        $keys = array_rand($videoGames, sizeof($videoGames));
        $videoGamesRandomSortFiltered = $randomVideoGames = array_intersect_key($videoGames, array_flip($keys));
*/
        return $this->render('videogames/videogame-list.html.twig', [
            'controller_name' => 'DefaultController', 
            'videoGames' => $videoGames, 
            'alphabeticalSortOn' => $alphabeticalSortOn, 
            'alpha' => $alpha, 
            'alphaSortedVideoGames' => $sortedVideoGames
            /*
            'videoGamesAlphabeticalFiltered' => $videoGamesAlphabeticalFiltered,
            'gradeSortOn' => $gradeSortOn,
            'grade' => $grade,
            'priceSortOn' => $priceSortOn,
            'price' => $price,
            'randomSortOn' => $randomSortOn,
            'random' => $random
            */
        ]);
    }

    #[Route('videogames/gender/{id}', name: "videogames_list_gender", requirements: ['id' => '[1-999]\d*'], methods: ["GET", "POST"])]
    public function videogameListByGender(EntityManagerInterface $em, int $id, Request $request): Response
    {
        $videoGamesList = $em->getRepository(VideoGame::class)->findAll(); 

        $videoGames = array();

        /** @var Gender $gender */
        $gender = $em->getRepository(Gender::class)->findOneBy(['id' => $id]);

        /** @var VideoGame $vg */
        foreach($videoGamesList as $vg)
            /** @var Gender $g */
            foreach($vg->getGenders() as $g)
                if($g->getId() == $id)
                    $videoGames[] = $vg;

        return $this->render('videogames/videogame-list.html.twig', [
            'controller_name' => 'DefaultController',
            'gender_name' => $gender->getGenderName(),
            'videoGames' => $videoGames
        ]);
    }

    #[Route('videogames/{id}', name: "videogame_card", requirements: ['id' => '[1-999]\d*'], methods: ["GET", "POST"])]
    public function videogamesCard(EntityManagerInterface $em, int $id, Request $request): Response
    {
        /** @var VideoGame */
        $videoGame = $em->getRepository(VideoGame::class)->findOneBy(['id' => $id]);

        if (!$videoGame)
            throw $this->createNotFoundException('Jeu Vidéo introuvable !');

        /** @var Comments */
        $comments = $this->updateCommentsList($id, $em);

        $this->calculateAverageUsersGrade($id, $em);

        setlocale(LC_TIME, 'fr-FR');
        error_log($id);

        /** @var User */
        $user = $this->getUser();


        $form = $this->createForm(CommentsUserFormType::class);
        $guestForm = $this->createForm(CommentsGuestFormType::class);

        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $commentForm = new Comments(
                    $user,
                    $videoGame,
                    $form['title']->getData(),
                    $form['content']->getData(),
                    $form['grade']->getData(),
                    new DateTime()
                );

                if ($commentForm) {
                    $em->persist($commentForm);
                    $em->flush();
                }

                $this->calculateAverageUsersGrade($videoGame->getId(), $em);
                $comments = $this->updateCommentsList($videoGame->getId(), $em);
                $videoGame->setComments($comments);

                return $this->redirectToRoute(
                    'videogame_card',
                    [
                        'id' => $videoGame->getId()
                    ]
                );
            }
        } else {
            $u = new User("", "", false, "", "", "", "Indéterminé", new DateTime(), false, "", "", false);
            $u->setIsRegistered(false);

            $guestForm->handleRequest($request);

            if ($guestForm->isSubmitted() && $guestForm->isValid()) {
                $u->setUsername($guestForm['user_username']->getData());

                $guestCommentForm = new Comments(
                    $u,
                    $videoGame,
                    $guestForm['title']->getData(),
                    $guestForm['content']->getData(),
                    $guestForm['grade']->getData(),
                    new DateTime()
                );

                if ($guestCommentForm) {
                    $em->persist($guestCommentForm);
                    $em->flush();
                }

                $this->calculateAverageUsersGrade($videoGame->getId(), $em);
                $comments = $this->updateCommentsList($videoGame->getId(), $em);
                $videoGame->setComments($comments);

                return $this->redirectToRoute(
                    'videogame_card',
                    [
                        'id' => $videoGame->getId()
                    ]
                );
            }
        }

        return $this->render('videogames/videogame-card.html.twig', [
            'controller_name' => 'DefaultController',
            'videoGame' => $videoGame,
            'id' => $id,
            'comments' => $comments,
            'form' => $form,
            'user' => $user,
            'guestForm' => $guestForm
        ]);
    }


    private function calculateAverageUsersGrade($id, EntityManagerInterface $em)
    {
        $videoGame = $em->getRepository(VideoGame::class)->findOneBy(['id' => $id]);

        if (!$videoGame)
            throw $this->createNotFoundException('Jeu Vidéo introuvable !');

        $averageUsersGrade = 0;
        $comments = $videoGame->getComments();

        foreach ($comments as $comment)
            $averageUsersGrade += $comment->getGrade();

        if (sizeof($comments) > 0)
            $averageUsersGrade = (int)($averageUsersGrade / sizeof($comments));

        $videoGame->setAverageUsersGrade($averageUsersGrade);
    }


    private function updateCommentsList($id, EntityManagerInterface $em)
    {
        $videoGame = $em->getRepository(VideoGame::class)->findOneBy(['id' => $id]);

        if (!$videoGame)
            throw $this->createNotFoundException('Jeu Vidéo introuvable !');

        return $videoGame->getComments();
    }
}
