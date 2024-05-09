<?php

namespace App\Entity;

use App\Repository\VideoGameRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Error;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: VideoGameRepository::class)]
#[Vich\Uploadable]
class VideoGame
{
    /**
     * ____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
     *        |                  type                      |    property name    |          constraints / Relations                            |  informations
     * ____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
     * @param ?int                                           $id                                                                                 the object's id
     * @param ?string                                        $titleReview         ORM\Column(length: 255)                                        the VideoGame's title reviews
     * @param ?string                                        $name                ORM\Column(length: 255)                                        the VideoGame's name ( Example : Pokémon Écarlate )
     * @param App\Entity\Platform                            $platform            ORM\ManyToOne(App\Entity\Platform::class)                      the VideoGame's platform ( Example : 'Nintendo Switch' )
     * @param ?string                                        $description         ORM\Column(length: 1255)                                       the VideoGame's description (some explanations about the story, the gameplay etc... )
     * @param ?string                                        $advide              ORM\Column(length: 1255)                                       my personal advice about the VideoGame
     * @param ?Symfony\Component\HttpFoundation\File\File    $imgBox              Vich\UploadableField(mapping: 'videogame_box)                  the VideoGame's box's image File
     * @param ?string                                        $imgBoxFileName      ORM\Column(length: 1255)                                       the new box's image location and filename after download
     * @param ?int                                           $imgThemeFileSize    #[ORM\Column(type: 'integer')]                                 the new box's image size after download
     * @param ?Symfony\Component\HttpFoundation\File\File    $imgTheme            Vich\UploadableField(mapping: 'videogame_themes)               the VideoGame's theme's image File
     * @param ?string                                        $imgThemeFileName    ORM\Column(length: 1255)                                       the new theme's image location and filename after download
     * @param ?int                                           $imgThemeFileSize    #[ORM\Column(type: 'integer')]                                 the new theme's image size after download
     * @param ?int                                           $graphicsGrade       #[ORM\Column(type: 'integer')] Assert\Range(min:0, max:100)    the VideoGame's graphics's grade
     * @param ?int                                           $gameplayGrade       #[ORM\Column(type: 'integer')] Assert\Range(min:0, max:100)    the VideoGame's gameplay's grade
     * @param ?int                                           $storylineGrade      #[ORM\Column(type: 'integer')] Assert\Range(min:0, max:100)    the VideoGame's storyline's grade
     * @param ?int                                           $executionGrade      #[ORM\Column(type: 'integer')] Assert\Range(min:0, max:100)    the VideoGame's execution's grade
     * @param ?int                                           $grade               #[ORM\Column(type: 'integer')] Assert\Range(min:0, max:100)    the VideoGame's average grade about the VideoGame (calculated with the other grades ($graphicsGrade, $gameplayGrade, $storylineGrade, $executionGrade))
     * @param Doctrine\Common\Collections\Collection         $genders             ORM\ManyToMany(App\Entity\Gender::class)                       the VideoGame's genders ( Example :  'RPG' )
     * @param ?DateTime                                      $releaseDate                                                                        the VideoGame's release date
     * @param ?bool                                          $disponibility                                                                      true if the VideoGame is available in shop and/or websites like Amazon
     * @param ?float                                         $averagePrice                                                                       the average price actually
     * @param ?string                                        $link                ORM\Column(length: 500)                                        the link from Amazon
     * @param ?App\Entity\Likes                              $likes               ORM\OneToOne(Likes::class)                                     corresponds to the likes given by the users (in progress)
     * @param ?int                                           $averageUsersGrade                                                                  the average grade calculated on Comments grades
     * @param Doctrine\Common\Collections\Collection         $comments            ORM\ManyToMany(App\Entity\Comments::class)                     the VideoGame's Comments
     * ____________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titleReview = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * Possible values :
     * 1 = Nintendo Switch,
     * 2 = PC Steam,
     * 3 = PlayStation 5,
     * 4 = GameBoy Advanced,
     * 5 = GameBoy / GameBoy Color
     * 6 = PlayStation 4
     * 7 = Nintendo DS
     * 8 = Nintendo 3DS
     * 9 = PlayStation 3
     * 10 = PlayStation 2
     * 11 = PlayStation
     * 12 = XBox
     * 13 = XBox 360
     * 14 = XBox One
     * 15 = XBox Series
     */
    #[ORM\ManyToOne(targetEntity: Platform::class, inversedBy: 'videoGames', cascade: ["persist"])]
    private Platform $platform;

    #[ORM\Column(length: 1255)]
    private ?string $description = null;

    #[ORM\Column(length: 1255)]
    private ?string $advice = null;



    // the videogame box file
    #[Vich\UploadableField(mapping: 'videogame_box', fileNameProperty: 'imgBoxFileName', size: 'imgBoxSize')]
    private ?File $imgBox = null;

    #[ORM\Column(nullable: true)]
    private ?string $imgBoxFileName = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $imgBoxSize = null;


    // the videogame theme file
    #[Vich\UploadableField(mapping: 'videogame_themes', fileNameProperty: 'imgThemeFileName', size: 'imgThemeSize')]
    private ?File $imgTheme = null;

    #[ORM\Column(nullable: true)]
    private ?string $imgThemeFileName = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $imgThemeSize = null;


    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $graphicsGrade = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $gameplayGrade = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $storylineGrade = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $executionGrade = null;

    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $grade = null;

    /**
     * Possible values :
     * 1 = RPG
     * 2 = Aventure
     * 3 = Fantastique
     * 4 = Création
     * 5 = Open World
     * 6 = Gestion
     * 7 = Réflexion
     * 8 = Ecologie
     * 9 = Santé
     * 10 = Survie
     * 11 = Tactique
     * 12 = Stratégie
     * 13 = Chill
     * 14 = Post-Apo
     */
    #[ORM\ManyToMany(targetEntity: Gender::class, inversedBy: "videoGames", cascade: ["persist"])]
    private Collection $genders;
    #[ORM\Column]
    private ?DateTime $releaseDate = null;

    #[ORM\Column]
    private ?bool $disponibility = null;

    #[ORM\Column]
    private ?float $averagePrice = null;

    #[ORM\Column(length: 2500)]
    private ?string $link = null;

    #[ORM\OneToOne(targetEntity: "Likes", cascade: ["persist"])]
    private Likes $likes;

    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $averageUsersGrade = null;

    #[ORM\OneToMany(targetEntity: Comments::class, mappedBy: "videoGame", cascade: ["persist"])]
    private Collection $comments;

    public function __construct(
        string $titleReview = "",
        string $name = "",
        Platform $platform = new Platform(),
        DateTime $releaseDate = new DateTime(),
        string $description = "",
        string $advice = "",
        int $graphicsGrade = 0,
        int $gameplayGrade = 0,
        int $storylineGrade = 0,
        int $executionGrade = 0,
        float $averagePrice = 0.0,
        bool $disponibility = false,
        string $link = "",
        Likes $likes = new Likes(0)
    ) {
        $this->titleReview = $titleReview;
        $this->name = $name;
        $this->platform = $platform;
        $this->description = $description;
        $this->advice = $advice;
        $this->releaseDate = $releaseDate;

        $this->graphicsGrade = $graphicsGrade;
        $this->gameplayGrade = $gameplayGrade;
        $this->storylineGrade = $storylineGrade;
        $this->executionGrade = $executionGrade;
        $this->setGrade();

        $this->link = $link;
        $this->disponibility = $disponibility;
        $this->likes = $likes;
        $this->averageUsersGrade = 0;
        $this->averagePrice = $averagePrice;

        $this->genders = new ArrayCollection();
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

    public function getTitleReview()
    {
        return $this->titleReview;
    }

    public function setTitleReview($titleReview)
    {
        $this->titleReview = $titleReview;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPlatform(): Platform
    {
        return $this->platform;
    }

    public function setPlatform(Platform $platform): static
    {
        $this->platform = $platform;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAdvice(): ?string
    {
        return $this->advice;
    }

    public function setAdvice(string $advice): static
    {
        $this->advice = $advice;

        return $this;
    }

    public function getGrade(): ?int
    {
        return $this->grade;
    }

    public function setGrade(): static
    {
        $this->grade = intval(ceil(($this->getGraphicsGrade() + $this->getGameplayGrade() + $this->getStorylineGrade() + $this->getExecutionGrade()) / 4));

        return $this;
    }
    public function getGenders(): PersistentCollection
    {
        return $this->genders;
    }

    public function setGenders(ArrayCollection $genders): static
    {
        $this->genders = $genders;

        return $this;
    }

    public function addGender(Gender $gender): static
    {
        if (!$this->genders->contains($gender)) {
            $this->genders->add($gender);
        }
        return $this;
    }

    public function getGenderById(int $id): ?Gender
    {
        $gender = null;
        foreach ($this->genders as $g) {
            if ($g->id === $id) {
                $gender = $g;
            }
        }

        if ($gender) {
            return $gender;
        } else {
            throw new Error("Utilisateur introuvable !");
            return null;
        }
    }

    public function setGenderById(Gender $gender)
    {
        $g = $this->getGenderById($gender->getId());
        if ($g) {
            for ($i = 0; $i < sizeof($this->genders); $i++) {
                if ($this->genders[$i]->id === $g->getId()) {
                    $this->genders[$i] = $gender;
                    break;
                }
            }
        }
    }

    public function getReleaseDate(): DateTime
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(DateTime $releaseDate): static
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getAveragePrice(): float
    {
        return $this->averagePrice;
    }

    public function setAveragePrice(float $averagePrice): static
    {
        $this->averagePrice = $averagePrice;

        return $this;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function getDisponibility(): bool
    {
        return $this->disponibility;
    }

    public function setDisponibility(bool $disponibility): static
    {
        $this->disponibility = $disponibility;

        return $this;
    }

    public function getLikes(): Likes
    {
        return $this->likes;
    }

    public function setLikes(Likes $likes): static
    {
        $this->likes = $likes;

        return $this;
    }

    public function getAverageUsersGrade(): int
    {
        return $this->averageUsersGrade;
    }

    public function setAverageUsersGrade(int $averageUsersGrade): static
    {
        $this->averageUsersGrade = $averageUsersGrade;

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
     * Get the value of imgBox
     */
    public function getImgBox()
    {
        return $this->imgBox;
    }

    /**
     * Set the value of imgBox
     *
     * @return  self
     */
    public function setImgBox($imgBox)
    {
        $this->imgBox = $imgBox;

        return $this;
    }

    /**
     * Get the value of imgBoxFileName
     */
    public function getImgBoxFileName()
    {
        return $this->imgBoxFileName;
    }

    /**
     * Set the value of imgBoxFileName
     *
     * @return  self
     */
    public function setImgBoxFileName($imgBoxFileName)
    {
        $this->imgBoxFileName = $imgBoxFileName;

        return $this;
    }

    /**
     * Get the value of imgBoxSize
     */
    public function getImgBoxSize()
    {
        return $this->imgBoxSize;
    }

    /**
     * Set the value of imgBoxSize
     *
     * @return  self
     */
    public function setImgBoxSize($imgBoxSize)
    {
        $this->imgBoxSize = $imgBoxSize;

        return $this;
    }

    /**
     * Get the value of imgTheme
     */
    public function getImgTheme()
    {
        return $this->imgTheme;
    }

    /**
     * Set the value of imgTheme
     *
     * @return  self
     */
    public function setImgTheme($imgTheme)
    {
        $this->imgTheme = $imgTheme;

        return $this;
    }

    /**
     * Get the value of imgThemeFileName
     */
    public function getImgThemeFileName()
    {
        return $this->imgThemeFileName;
    }

    /**
     * Set the value of imgThemeFileName
     *
     * @return  self
     */
    public function setImgThemeFileName($imgThemeFileName)
    {
        $this->imgThemeFileName = $imgThemeFileName;

        return $this;
    }

    /**
     * Get the value of imgThemeSize
     */
    public function getImgThemeSize()
    {
        return $this->imgThemeSize;
    }

    /**
     * Set the value of imgThemeSize
     *
     * @return  self
     */
    public function setImgThemeSize($imgThemeSize)
    {
        $this->imgThemeSize = $imgThemeSize;

        return $this;
    }

    public function updateImgBoxFileName()
    {
        $this->setImgBoxFileName($this->imgBox->getFilename() . '.' . $this->imgBox->getExtension());
    }

    public function updateImgThemeNewFileName()
    {
        $this->setImgThemeFileName($this->imgTheme->getFilename() . '.' . $this->imgTheme->getExtension());
    }


    /**
     * Get the value of graphicsGrade
     */ 
    public function getGraphicsGrade()
    {
        return $this->graphicsGrade;
    }

    /**
     * Set the value of graphicsGrade
     *
     * @return  self
     */ 
    public function setGraphicsGrade($graphicsGrade)
    {
        $this->graphicsGrade = $graphicsGrade;

        return $this;
    }

    /**
     * Get the value of gameplayGrade
     */ 
    public function getGameplayGrade()
    {
        return $this->gameplayGrade;
    }

    /**
     * Set the value of gameplayGrade
     *
     * @return  self
     */ 
    public function setGameplayGrade($gameplayGrade)
    {
        $this->gameplayGrade = $gameplayGrade;

        return $this;
    }

    /**
     * Get the value of storylineGrade
     */ 
    public function getStorylineGrade()
    {
        return $this->storylineGrade;
    }

    /**
     * Set the value of storylineGrade
     *
     * @return  self
     */ 
    public function setStorylineGrade($storylineGrade)
    {
        $this->storylineGrade = $storylineGrade;

        return $this;
    }

    /**
     * Get the value of executionGrade
     */ 
    public function getExecutionGrade()
    {
        return $this->executionGrade;
    }

    /**
     * Set the value of executionGrade
     *
     * @return  self
     */ 
    public function setExecutionGrade($executionGrade)
    {
        $this->executionGrade = $executionGrade;

        return $this;
    }
}
