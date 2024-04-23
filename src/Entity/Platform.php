<?php

namespace App\Entity;

use App\Repository\PlatformRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlatformRepository::class)]
class Platform
{
    
    /**
     * _____________________________________________________________________________________________________________________________________________________________________
     *        |                  type                |  property name  |          constraints / Relations             |                  informations
     * _____________________________________________________________________________________________________________________________________________________________________
     * @param ?int                                      $id                                                              the unique id
     * @param ?string                                   $string           ORM\Column(length:255)                         the platform name ( Example: 'Nintendo Switch' )
     * @param Doctrine\Common\Collections\Collection    $videoGames       ORM\OneToMany(App\Entity\VideoGame::class)     the collection of VideoGames
     * _____________________________________________________________________________________________________________________________________________________________________
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $platformName = null;

    #[ORM\OneToMany(targetEntity:VideoGame::class, mappedBy:'platform', cascade: ["persist"])]
    private Collection $videoGames;

    public function __construct(string $platformName = "")
    {
        $this->platformName = $platformName;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlatformName(): ?string
    {
        return $this->platformName;
    }

    public function setPlatformName(string $platformName): static
    {
        $this->platformName = $platformName;

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
