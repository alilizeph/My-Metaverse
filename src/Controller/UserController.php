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
        if($comments && count($comments) > 0) {
                
            $average = 0;

            foreach($comments as $comment)
                $average += (int)($comment->getGrade());
            
            if(count($comments) >= 2) {
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
            } else if(count($comments) == 1 ) {
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
    public function privateProfile(AuthenticationUtils $au, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var App\Entity\User */ 
        $user = $this->getUser();



        $isAdmin = $this->isGranted('ROLE_ADMIN');
        $isConnected = $this->isGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('user/private-profile.html.twig', [
            'user' => $user,
            'isAdmin' => $isAdmin,
            'isConnected' => $isConnected,
            'id' => $user->getId()
        ]);
    }

    #[Route("/{id}/private/edit", name: "update_user", methods: ["GET", "POST"])]
    public function updateProfileFields(EntityManagerInterface $em, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        
        $user = $this->getUser();

        if($user instanceof User && $user !== null){

            $form = $this->createForm(EditUserProfileFormType::class, 
                $user, [
                    'attr' => [
                        'enctype' => 'multipart/form-data'
                        ]
                    ]
                );

            $form->handleRequest($request);

            $form->setData('surname', $user->getSurname());
            $form->setData('firstName', $user->getFirstName());
            $form->setData('gender', $user->getGender());
            $form->setData('birthday', $user->getBirthday());        
            $presentation = $user->getPresentation();

            if($form->isSubmitted() && $form->isValid())
            {
                if($user instanceof PasswordHasherAwareInterface) {
                    $hashPassword = $this->passwordEncoder->hashPassword($user, $form['password']->getData());
                    $user->setPassword($hashPassword);
                }

                if(!$form->get('presentation')->getData())
                    $user->setPresentation('');
                else
                    $user->setPresentation($form->get('presentation')->getData());

                if($user) {
                    $em->persist($user);
                    $em->flush();
                }
                
                return $this->redirectToRoute('user_private_profile', ['id' => $user->getId()]);
            }
            
            if($user->getId() !== $user->getId())
                throw $this->createAccessDeniedException("Vous n'êtes pas autorisé à modifier cette présentation");
        }
        
        return $this->redirectToRoute('user/update-user.html.twig', [
            'form' => $form->createView(),
            'presentation' => $presentation,
            'user' => $user
        ]);
    }
}
