<?php

namespace App\Entity;

use App\Repository\LikesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Error;

#[ORM\Entity(repositoryClass: LikesRepository::class)]
class Likes
{
    /**
     * __________________________________________________________________________________________________________________________________________
     *        |                type                   |  property name  |   constraints / Relations   |             informations
     * __________________________________________________________________________________________________________________________________________
     * @param ?int                                      $id                                             the unique id 
     * @param ?int                                      $nbLikes                                        the number of likes given by a user
     * @param Doctrine\Common\Collections\Collection    $users            ORM\ManyToMany(User::class)   the collection of Users
     * __________________________________________________________________________________________________________________________________________
     */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column()]
    private ?int $nbLikes = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'likes', cascade: ["persist"])]
    private Collection $users;

    public function __construct(int $nbLikes = 0)
    {
        $this->nbLikes = $nbLikes;
        $this->users = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbLikes(): ?int
    {
        return $this->nbLikes;
    }

    public function setNbLikes(int $nbLikes): static
    {
        $this->nbLikes = $nbLikes;

        return $this;
    }

    public function getUsers(): ArrayCollection
    {
        return $this->users;
    }

    public function setUsers(ArrayCollection $users): static
    {
        $this->users = $users;

        return $this;
    }

    public function addNewLike(User $user): void
    {
        $this->users->add($user);
        $this->nbLikes++;
    }

    public function addUser(User $user)
    {
        $this->addNewLike($user);
    }

    public function getUserById(int $id): ?User
    {
        $user = null;
        for ($i = 0; $i < sizeof($this->users); $i++) {
            if ($this->users[$i]->id === $id) {
                $user = $this->users[$i];
            }
        }

        if ($user) {
            return $user;
        } else {
            throw new Error("Utilisateur introuvable !");
            return null;
        }
    }

    public function setUserById(User $user)
    {
        $u = $this->getUserById($user->getId());
        if ($u) {
            for ($i = 0; $i < sizeof($this->users); $i++) {
                if ($this->users[$i]->id === $u->getId()) {
                    $this->users[$i] = $user;
                    break;
                }
            }
        }
    }
}
