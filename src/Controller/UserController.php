<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserProfileFormType;
use App\Form\UserType;
use App\Repository\CommentsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherAwareInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     *  @param UserPasswordHasherInterface  $passwordEncoder     to generate encoded password
     */
    private $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    // path to the public profile
    #[Route('/{id}/public', name: 'user_public_profile', methods: ['GET', 'POST'])]
    public function publicProfile(User $user, CommentsRepository $cr): Response
    {
        $comments = $cr->findCommentsByUser($user);
        if ($comments && count($comments) > 0) {

            $average = 0;

            foreach ($comments as $comment)
                $average += (int)($comment->getGrade());

            if (count($comments) >= 2) {
                $user->setNbComments(count($cr->findCommentsByUser($user->getId())));
                $randomKeys = array_rand($comments, 2);
                $randomComments = array_intersect_key($comments, array_flip($randomKeys));

                return $this->render('user/public-profile.html.twig', [
                    'user' => $user,
                    'averageComments' => (int)($average / count($cr->findCommentsByUser($user->getId()))),
                    'nbLikes' => count($user->getLikes()),
                    'randomComments' => $randomComments,
                    'nbRandomComments' => count($randomComments)
                ]);
            } else if (count($comments) == 1) {
                return $this->render('user/public-profile.html.twig', [
                    'user' => $user,
                    'averageComments' => (int)($average / count($cr->findCommentsByUser($user->getId()))),
                    'nbLikes' => count($user->getLikes()),
                    'randomComments' => $comments
                ]);
            }
        } else {

            return $this->render('user/public-profile.html.twig', [
                'user' => $user,
                'nbLikes' => count($user->getLikes())
            ]);
        }
    }


    // path to the private profile (only if the user is connected)
    #[Route('/{id}/private', name: 'user_private_profile', methods: ['GET'])]
    public function privateProfile(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var App\Entity\User */
        $user = $this->getUser();

        return $this->render('user/private-profile.html.twig', [
            'user' => $user,
            'id' => $user->getId()
        ]);
    }

    // path to the editing profile fields page (only if the user is connected)
    #[Route("/{id}/private/edit", name: "update_user", methods: ["GET", "POST"])]
    public function updateProfileFields(EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User */
        $user = $this->getUser();

        $form = $this->createForm(
            EditUserProfileFormType::class,
            $user,
            [
                'attr' => [
                    'enctype' => 'multipart/form-data'
                ]
            ]
        );
        $form->get('surname')->setData($user->getSurname());
        $form->get('firstName')->setData($user->getFirstName());
        $form->get('gender')->setData($user->getGender());
        $form->get('birthday')->setData($user->getBirthday());
        $form->get('presentation')->setData('');
        $presentation = $user->getPresentation();

        $form->handleRequest($request);


        if ($form->isSubmitted()) {

            if ($user) {
                $em->persist($user);
                $em->flush();
            }

            return $this->redirectToRoute('user_private_profile', ['id' => $user->getId()]);
        }

        if ($user->getId() !== $user->getId())
            throw $this->createAccessDeniedException("Vous n'êtes pas autorisé à accéder à cette page");

        return $this->render('user/update-user.html.twig', [
            'form' => $form,
            'presentation' => $presentation,
            'user' => $user
        ]);
    }
}
