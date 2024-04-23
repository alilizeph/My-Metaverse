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
     * ______________________________________________________________________________________________________________________________________________________________________________________________________________
     *        |                  type                |    property name    |          constraints / Relations            |  informations
     * ______________________________________________________________________________________________________________________________________________________________________________________________________________
     * @param ?int                                     $id                                                                 the object's id
     * @param ?string                                  $name                ORM\Column(length: 255)                        the VideoGame's name ( Example : Pokémon Écarlate )
     * @param App\Entity\Platform                      $platform            ORM\ManyToOne(App\Entity\Platform::class)      the VideoGame's platform ( Example : 'Nintendo Switch' )
     * @param ?string                                  $description         ORM\Column(length: 1255)                       the VideoGame's description (some explanations about the story, the gameplay etc... )
     * @param ?string                                  $advide              ORM\Column(length: 1255)                       my personal advice about the VideoGame
     * @param ?string                                  $imgTheme                                                           (will change soon for an object VideoGameThemePicture)
     * @param ?string                                  $imgBox                                                             (will change soon for an object VideoGameBoxPicture)
     * @param ?int                                     $grade               Assert\Range(min:0, max:100)                   my personal grade about the VideoGame
     * @param Doctrine\Common\Collections\Collection   $genders             ORM\ManyToMany(App\Entity\Gender::class)       the VideoGame's genders ( Example :  'RPG' )
     * @param ?DateTime                                $releaseDate                                                        the VideoGame's release date
     * @param ?bool                                    $disponibility                                                      true if the VideoGame is available in shop and/or websites like Amazon
     * @param ?float                                   $averagePrice                                                       the average price actually
     * @param ?string                                  $link                ORM\Column(length: 500)                        the link from Amazon
     * @param ?App\Entity\Likes                        $likes               ORM\OneToOne(Likes::class)                     represents the likes given by the users (in progress)
     * @param ?int                                     $averageUsersGrade                                                  the average grade calculated on Comments grades
     * @param Doctrine\Common\Collections\Collection   $comments            ORM\ManyToMany(App\Entity\Comments::class)     the VideoGame's Comments
     * ______________________________________________________________________________________________________________________________________________________________________________________________________________
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

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
    #[ORM\ManyToOne(targetEntity:Platform::class, inversedBy: 'videoGames', cascade: ["persist"])]
    private Platform $platform;

    #[ORM\Column(length: 1255)]
    private ?string $description = null;

    #[ORM\Column(length: 1255)]
    private ?string $advice = null;



    // the videogame box file
    #[Vich\UploadableField(mapping: 'videogame_box', fileNameProperty:'imgBoxFileName', size: 'imgBoxSize')]
    private ?File $imgBox = null;

    #[ORM\Column(nullable:true)]
    private ?string $imgBoxFileName = null;

    #[ORM\Column(nullable:true)]
    private ?int $imgBoxSize = null;


    // the videogame theme file
    #[Vich\UploadableField(mapping: 'videogame_themes', fileNameProperty:'imgThemeFileName', size: 'imgThemeSize')]
    private ?File $imgTheme = null;

    #[ORM\Column(nullable:true)]
    private ?string $imgThemeFileName = null;

    #[ORM\Column(nullable:true)]
    private ?int $imgThemeSize = null;
    


    #[ORM\Column(type: 'integer')]
    #[Assert\Range(min:0, max:100)]
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
     */
    #[ORM\ManyToMany(targetEntity:Gender::class, inversedBy:"videoGames", cascade: ["persist"])]
    private Collection $genders;
    
    #[ORM\Column]
    private ?DateTime $releaseDate = null;

    #[ORM\Column]
    private ?bool $disponibility = null;

    #[ORM\Column]
    private ?float $averagePrice = null;

    #[ORM\Column(length: 500)]
    private ?string $link = null;

    #[ORM\OneToOne(targetEntity:"Likes", cascade: ["persist"])]
    private Likes $likes;

    #[ORM\Column(type:'integer')]
    #[Assert\Range(min:0, max:100)]
    private ?int $averageUsersGrade = null; 

    #[ORM\OneToMany(targetEntity:Comments::class, mappedBy:"videoGame", cascade: ["persist"])]
    private Collection $comments;

    public function __construct(string $name = "", Platform $platform = new Platform(), DateTime $releaseDate = new DateTime(),
        string $description = "", string $advice = "", int $grade = 0, float $averagePrice = 0.0, 
        bool $disponibility = false, string $link = "", Likes $likes = new Likes(0))
    {
        $this->name = $name;
        $this->platform = $platform;
        $this->description = $description;
        $this->advice = $advice;
        $this->releaseDate = $releaseDate;
        $this->grade = $grade;
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

    public function setGrade(int $grade): static
    {
        $this->grade = $grade;

        return $this;
    }

    public function getGenders():PersistentCollection
    {
        return $this->genders;
    }

    public function setGenders(ArrayCollection $genders): static
    {
        $this->genders = $genders;

        return $this;
    }

    public function addGender(Gender $gender)
    {
        $this->genders->add($gender);
    }

    public function getGenderById(int $id): ?Gender
    {
        $gender = null;
        foreach($this->genders as $g) {
            if($g->id === $id) {
                $gender = $g;
            }
        }
        
        if($gender){
            return $gender;
        } else {
            throw new Error("Utilisateur introuvable !");
            return null;
        }
    }

    public function setGenderById(Gender $gender) {
        $g = $this->getGenderById($gender->getId());
        if($g){
            for($i = 0; $i < sizeof($this->genders); $i++) {
                if($this->genders[$i]->id === $g->getId()){
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

    public function getAverageUsersGrade():int
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

    public function updateImgBoxFileName() {
        $this->setImgBoxFileName($this->imgBox->getFilename().'.'.$this->imgBox->getExtension());
    }

    public function updateImgThemeNewFileName() {
        $this->setImgThemeFileName($this->imgTheme->getFilename().'.'.$this->imgTheme->getExtension());
    }
}
