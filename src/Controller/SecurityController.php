<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class SecurityController extends AbstractController
{
        
    /**
     *  @param UserPasswordHasherInterface  $passwordEncoder     to generate password encoded
    */
    private $passwordEncoder;

    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    // path to registrate new users
    #[Route('/registration', name: 'app_registration', methods: ['GET', 'POST'])]
    public function registration(EntityManagerInterface $em, Request $request): Response 
    {
        $user = new User('', '', false, '', '', '', 'Indéterminé', new DateTime(), false, "", "", true);
        $isMinimumAgeMet = false;
        
        // generating a registration form
        $form = $this->createForm(RegistrationFormType::class, 
            $user, [
                'attr' => [
                    'enctype' => 'multipart/form-data'
                    ]
                ]
            );
        $form->setData($user);

        $form->handleRequest($request);

        // traitement du formulaire
        if($form->isSubmitted() && $form->isValid()) {

            // encoding User's password
            $hashPassword = $this->passwordEncoder->hashPassword($user, $form['password']->getData());
            $user->setPassword($hashPassword);

            $birthday = $form->get('birthday')->getData();


            // Rest of the user data assignment
            $isMinimumAgeMet = $this->isMinimumAgeMet($birthday);

            if(!$form->get('presentation')->getData())
                $user->setPresentation('');
            else
                $user->setPresentation($form->get('presentation')->getData());

            if($user) {

                $em->persist($user);
                $em->flush();
            }
            
            return $this->redirectToRoute('homepage');
        } else if($form->isSubmitted() && !$this->isMinimumAgeMet($form->get('birthday')->getData())) {
            return $this->render('security/registration.html.twig', [
                'user' => $user,
                'form' => $form->createView(),
                'isMinimumAgeMet' => $isMinimumAgeMet
            ]);
        } else {
            error_log("Attention une erreur est survenue pour votre inscription !");
        }
        
        return $this->render('security/registration.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            
        ]);
    }


    // function to determine if new user can registrate himself
    public function calculateAge(DateTime $birthday): int {
        $today = new DateTime();
        $age = $today->format('Y') - $birthday->format('Y'); 
        if ((int)$today->format('md') < (int)$birthday->format('md'))
            return $age - 1; 
        return $age; 
        
    }
    
    public function isMinimumAgeMet(DateTime $birthday): bool {
        return $this->calculateAge($birthday) >= 12;
    }



    // path to login 
    #[Route(path: '/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser())
            return $this->redirectToRoute('user_private_profile');

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error
        ]);
    }

    
    #[Route('/check', name:"app_login_check")]
    public function check(): void { }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
