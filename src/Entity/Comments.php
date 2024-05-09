<?php

namespace App\Entity;

use App\Repository\CommentsRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CommentsRepository::class)]
class Comments
{
    /**
     * __________________________________________________________________________________________________________________________________
     *       |         type          | property name  |    constraints / Relations      |                informations
     * __________________________________________________________________________________________________________________________________
     * @param ?int                     $id                                                 the unique id
     * @param ?User                    $user            ORM\ManyToOne(User::class)         the Comments owner User
     * @param ?App\Entity\VideoGame    $videoGame       ORM\ManyToOne(VideoGame::class)    the Comments owner VideoGame
     * @param ?string                  $title           ORM\Column(length: 255)            the Comments title given by the owner User
     * @param ?string                  $content         ORM\Column(length: 1255)           the Comments content given by the owner User
     * @param ?int                     $grade           Assert\Range(min:0, max:100)       the Comments grade given by the owner User
     * @param ?DateTime                $postDate                                           the date when the Comments was posted
     * __________________________________________________________________________________________________________________________________
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity:User::class, inversedBy:"comments", cascade: ["persist"])]
    private User $user;

    #[ORM\ManyToOne(targetEntity:VideoGame::class, inversedBy:"comments", cascade: ["persist"])]
    private VideoGame $videoGame;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 1255)]
    private ?string $content = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min:0, max:100)]
    private ?int $grade = null;

    #[ORM\Column()]
    private ?DateTime $postDate = null;

    public function __construct(User $user = null, VideoGame $videoGame = null, string $title = "",
        string $content = "", int $grade = 0, DateTime $postDate = null)
    {
        $this->user = $user ?? new User();
        $this->videoGame = $videoGame ?? new VideoGame();
        $this->title = $title;
        $this->content = $content;
        if($grade != null && $grade >= 0 && $grade <= 100)
            $this->grade = $grade;
        else
            $this->grade = 0;
        $this->postDate = $postDate ?? new DateTime();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }
    
    public function getVideoGame(): VideoGame
    {
        return $this->videoGame;
    }

    public function setVideoGame(VideoGame $videoGame): static
    {
        $this->videoGame = $videoGame;

        return $this;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }
    
    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }
    
    public function getGrade(): int
    {
        return $this->grade;
    }

    public function setGrade(int $grade): static
    {
        $this->grade = $grade;

        return $this;
    }

    public function getPostDate(): DateTime
    {
        return $this->postDate;
    }

    public function setPostDate(Date $postDate): static
    {
        $this->postDate = $postDate;

        return $this;
    }
}
