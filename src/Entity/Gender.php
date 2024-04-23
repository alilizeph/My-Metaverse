<?php

namespace App\Entity;

use App\Repository\GenderRepository;
use DateTime;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GenderRepository::class)]
class Gender
{
    /**
     * __________________________________________________________________________________________________________________________________________________________
     *        | type                                  | property name  | constraints / Relations          | informations
     * __________________________________________________________________________________________________________________________________________________________
     * @param ?int                                      $id                                                  the unique id 
     * @param ?string                                   $genderName      ORM\Column(length: 255)             the gender name of a VideoGame (Example: 'RPG')
     * @param Doctrine\Common\Collections\Collection    $videoGames      ORM\ManyToMany(VideoGame::class)    the relation with the class VideoGame
     * __________________________________________________________________________________________________________________________________________________________
    */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $genderName;

    #[ORM\ManyToMany(targetEntity:VideoGame::class, mappedBy:"genders", cascade: ["persist"])]
    private Collection $videoGames;

    public function __construct(string $genderName = "")
    {
        $this->genderName = $genderName;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenderName(): ?string
    {
        return $this->genderName;
    }

    public function setGenderName(string $genderName): static
    {
        $this->genderName = $genderName;

        return $this;
    }

    public function getVideoGames(): Collection
    {
        return $this->videoGames;
    }

    public function setVideoGames(Collection $videoGames): static
    {
        $this->videoGames = $videoGames;

        return $this;
    }

}
