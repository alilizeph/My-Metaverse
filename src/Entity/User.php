<?php

namespace App\Entity;

use App\Repository\UserRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Error;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_USERNAME', fields: ['username'])]
#[Vich\Uploadable]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * ________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
     *        |                  type                    |          property name          |                                constraints / Relations                             |                                               informations
     * ________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
     * @param ?int                                         $id                                                                                                                     the unique id
     * @param ?string                                      $username                         ORM\Column(length: 180, unique: true)                                                 the unique username
     * @param ?array                                       $roles                                                                                                                  property from UserInterface
     * @param ?string                                      $password                         Assert\NotBlank                                                                       User's password (encoded when the user is created)
     * @param ?string                                      $surname                          Assert\NotBlank    & ORM\Column(length: 255)                                          User's surname
     * @param ?bool                                        $privateFieldsDisponibility       ORM\Column(type: 'boolean', options: ['nullable' => false, 'default' => false])       If it's true, the personal informations ($fisrtName, $surname, $birthday) will be available 
     *                                                                                                                                                                             on the public profile, if it's false, these fields will not be available on this profile.
     * @param ?string                                      $email                            Assert\Email(message: 'Adresse mail "{{ value }}" invalide.') &                       User's email adress
     *                                                                                       ORM\Column(length: 255)  
     * @param ?string                                      $gender                           ORM\Column(length: 255, ...)                                                          User's gender : The possible values are 'Homme', 'Femme', 'Ielle', 'Indéterminé'
     * @param ?DateTime                                    $birthday                         Assert\NotBlank                                                                       User's date of birth (the User cannot be younger than 12 years old)
     * @param ?int                                         $nbLikes                                                                                                                number of likes given by the User (in progress)
     * @param ?int                                         $nbComments                                                                                                             number of Comments given by the User
     * @param ?bool                                        $isRegistered                                                                                                           to verify if the User is registered (it's used for Comments creating)
     * @param ?Symfony\Component\HttpFoundation\File\File  $avatarFile                       Vich\UploadableField(mapping: 'user_avatars', ...)                                    the avatar's File downloaded with VichUploader bundle
     * @param ?string                                      $avatarNewFileName                ORM\Column(nullable: true)                                                            the avatar's new name from downloadedFile generated by VichUploader bundle
     * @param ?int                                         $avatarFileSize                   ORM\Column(nullable: true)                                                            the avatar's File size
     * @param ?bool                                        $isAdmin                                                                                                                to determine if the User has admin rights
     * @param Doctrine\Common\Collections\Collection       $likes                            ORM\ManyToMany(Likes::class)                                                          Likes Collection
     * @param Doctrine\Common\Collections\Collection       $comments                        ORM\ManyToMany(Comments::class)                                                        Comments Collection
     * ________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
     * 
     */


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true, options: ["nullable" => false])]
    #[Assert\NotBlank]
    private ?string $username = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column()]
    #[Assert\Regex(
        pattern: "/^(?=.*[0-9].*){3,}(?=.*[!@#$%^&*])(?=.*[A-Z].*[A-Z]).{8,15}$/",
        message: "Pour votre sécurité, votre mot de passe doit :\n
            - faire entre 8 et 15 caractères\n
            - poséder minimum 3 chiffres\n
            - posséder au moins 1 caractère spécial (# , @ , _ , - , \" , \\ , = , & , ...)\n
            - posséder minimum 2 majuscules."
    )]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Assert\NotBlank]
    private ?string $password = null;

    #[ORM\Column(length: 255, options: ["nullable" => false])]
    #[Assert\NotBlank]
    private ?string $surname = null;

    #[ORM\Column(length: 255, options: ["nullable" => false])]
    #[Assert\NotBlank]
    private ?string $firstName = null;

    #[ORM\Column(type: 'boolean', options: ['nullable' => false, 'default' => false])]
    #[Assert\NotBlank]
    private ?bool $privateFieldsDisponibility = null;

    #[Assert\Email(message: 'Adresse mail "{{ value }}" invalide.',)]
    #[ORM\Column(length: 255, options: ["nullable" => false])]
    private ?string $email = null;

    #[ORM\Column(length: 255, options: ["nullable" => false, "required" => true])]
    #[Assert\NotBlank]
    private ?string $gender = null;

    #[ORM\Column(options: ["nullable" => false, "required" => true])]
    #[Assert\NotBlank]
    private ?DateTime $birthday = null;

    #[ORM\Column()]
    private ?int $nbLikes = null;

    #[ORM\Column()]
    private ?int $nbComments = null;

    // the avatar upladed File
    #[Vich\UploadableField(mapping: 'user_avatars', fileNameProperty: 'avatarNewFileName', size: 'avatarFileSize')]
    private ?File $avatarFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $avatarNewFileName = null;

    #[ORM\Column(nullable: true)]
    private ?int $avatarFileSize = null;

    #[ORM\Column(length: 1555, options: ["nullable" => true, "required" => false])]
    private ?string $presentation = null;

    #[ORM\Column(length: 255, options: ["default" => false, "nullable" => false, "required" => false])]
    private ?bool $isAdmin = false;

    #[ORM\Column(type: "boolean", options: ["default" => false, "nullable" => false, "required" => false])]
    private ?bool $isRegestered = true;

    #[ORM\ManyToMany(targetEntity: Likes::class, mappedBy: "users", cascade: ["persist"])]
    private Collection $likes;

    #[ORM\OneToMany(targetEntity: Comments::class, mappedBy: "user", cascade: ["persist"])]
    private Collection $comments;


    public function __construct(
        string $firstName = "",
        string $surname = "",
        bool $privateFieldsDisponibility = false,
        string $email = "",
        string $username = "",
        string $pwd = "",
        string $gender = "Homme" | "Femme" | "Ielle" | "Indéterminé",
        DateTime $birthday = new DateTime(),
        bool $isAdmin = false,
        string $presentation = "",
        bool $isRegestered = false
    ) {

        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->privateFieldsDisponibility = $privateFieldsDisponibility;
        $this->email = $email;
        $this->username = $username;
        $this->setPassword($pwd);
        $this->gender = $gender;
        $this->birthday = $birthday;
        //$this->isAdmin = $isAdmin;

        $this->setIsAdmin($isAdmin);
        $this->nbLikes = 0;
        $this->nbComments = 0;
        $this->isRegestered = $isRegestered;

        if ($presentation)
            $this->presentation = $presentation;
        else
            $this->presentation = "";



        $this->likes = new ArrayCollection();

        $this->comments = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            $this->email = $email;
            return $this;
        } else {
            throw new Error("Problème avec l'adresse mail saisie !");
        }
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        if ($gender == 'Homme' || $gender == 'Femme' || $gender == 'Indéterminé' || $gender == 'Ielle')
            $this->gender = $gender;
        else
            throw new Error('Erreur avec la valeur du genre : "' . $gender . '" saisie !');

        return $this;
    }

    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(DateTime $birthday): static
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getnbLikes(): ?int
    {
        return $this->nbLikes;
    }

    public function setnbLikes(int $nbLikes): static
    {
        $this->nbLikes = $nbLikes;

        return $this;
    }

    public function getNbComments(): ?int
    {
        return $this->nbComments;
    }

    public function setNbComments(int $nbComments): static
    {
        $this->nbComments = $nbComments;

        return $this;
    }

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): static
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): static
    {
        $this->isAdmin = $isAdmin;

        if ($isAdmin) {
            $this->roles[] = 'ROLE_ADMIN';
        }

        return $this;
    }

    public function isRegistered(): bool
    {
        return $this->isRegestered;
    }

    public function setIsRegistered(bool $isRegestered): static
    {
        $this->isRegestered = $isRegestered;
        return $this;
    }


    public function getLikes(): ?Collection
    {
        return $this->likes;
    }

    public function setLikes(Collection $likes): static
    {
        $this->likes = $likes;

        return $this;
    }

    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function setComments(Collection $comments): static
    {
        $this->comments = $comments;

        return $this;
    }
    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }


    /**
     * Get the value of avatarFile
     */
    public function getAvatarFile()
    {
        return $this->avatarFile;
    }

    /**
     * Set the value of avatarFile
     *
     * @return  self
     */
    public function setAvatarFile($avatarFile)
    {
        $this->avatarFile = $avatarFile;

        return $this;
    }

    /**
     * Get the value of avatarFileSize
     */
    public function getAvatarFileSize()
    {
        return $this->avatarFileSize;
    }

    /**
     * Set the value of avatarFileSize
     *
     * @return  self
     */
    public function setAvatarFileSize($avatarFileSize)
    {
        $this->avatarFileSize = $avatarFileSize;

        return $this;
    }

    /**
     * Get the value of avatarNewFileName
     */
    public function getAvatarNewFileName()
    {
        return $this->avatarNewFileName;
    }

    /**
     * Set the value of avatarNewFileName
     *
     * @return  self
     */
    public function setAvatarNewFileName($avatarNewFileName)
    {
        $this->avatarNewFileName = $avatarNewFileName;

        return $this;
    }

    public function updateAvatarNewFileName()
    {
        $this->setAvatarNewFileName($this->avatarFile->getFilename() . '.' . $this->avatarFile->getExtension());
    }

    /**
     * Get the value of privateFieldsDisponibility
     */ 
    public function getPrivateFieldsDisponibility()
    {
        return $this->privateFieldsDisponibility;
    }

    /**
     * Set the value of privateFieldsDisponibility
     *
     * @return  self
     */ 
    public function setPrivateFieldsDisponibility($privateFieldsDisponibility)
    {
        $this->privateFieldsDisponibility = $privateFieldsDisponibility;

        return $this;
    }
}
