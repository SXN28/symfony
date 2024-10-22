<?php 

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
#[ORM\Table(name: "artists")]
class Artist
{
    #[ORM\Id]
    #[ORM\Column(type: "string", length: 255)]
    private string $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $name;

    #[ORM\Column(type: "string", length: 255)]
    private string $spotifyUrl;


    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'favoriteArtists')]
    private Collection $users;

    public function __construct(string $id, string $name, string $spotifyUrl)
    {
        $this->id = $id;
        $this->name = $name;
        $this->spotifyUrl = $spotifyUrl;
        $this->users = new ArrayCollection();
    }

    // Getters and Setters...

    public function getId(): string
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getSpotifyUrl(): string
    {
        return $this->spotifyUrl;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addArtist($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            $user->removeFavoriteArtist($this);
        }

        return $this;
    }
}
