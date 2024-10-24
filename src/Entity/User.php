<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'Il y a déjà un compte avec cet email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    /**
     * @var list<string> Les rôles de l'utilisateur
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string Le mot de passe haché
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\ManyToMany(targetEntity: Track::class, inversedBy: 'users')]
    private Collection $favoriteTracks;

    #[ORM\ManyToMany(targetEntity: Artist::class, inversedBy: 'users')]
    private Collection $favoriteArtists;

    public function __construct()
    {
        $this->favoriteTracks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Un identifiant visuel qui représente cet utilisateur.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
    }

    /**
     * @return Collection<int, Track>
     */
    public function getFavoriteTracks(): Collection
    {
        return $this->favoriteTracks;
    }

    public function addTrack(Track $track): static
    {
        if (!$this->favoriteTracks->contains($track)) {
            $this->favoriteTracks->add($track);
            $track->addUser($this);
        }

        return $this;
    }

    public function removeFavoriteTrack(Track $track): static
    {
        if ($this->favoriteTracks->removeElement($track)) {
            $track->removeUser($this);
        }

        return $this;
    }

    public function hasTrack(string $trackId): bool
    {
        foreach ($this->favoriteTracks as $track) {
            if ($track->getId() === $trackId) {
                return true;        }
        }
        return false;
    }

    public function addArtist(Artist $artist): static
    {
        if (!$this->favoriteArtists->contains($artist)) {
            $this->favoriteArtists->add($artist);
        }
        return $this;
    }

    public function removeFavoriteArtist(Artist $artist): static
    {
        $this->favoriteArtists->removeElement($artist);
        return $this;
    }

    public function getFavoriteArtists(): Collection
    {
        return $this->favoriteArtists;
    }

    public function hasArtist(string $artistId): bool
    {
        foreach ($this->favoriteArtists as $artist) {
            if ($artist->getId() === $artistId) {
                return true;
            }
        }
        return false;
    }
}
