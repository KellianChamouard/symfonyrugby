<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayerRepository::class)
 */
class Player
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $player_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $player_firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $player_age;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_taille;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_poids;

    /**
     * @ORM\Column(type="text")
     */
    private $player_licence_number;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_number;

    /**
     * @ORM\Column(type="boolean")
     */
    private $player_state;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $player_poste;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_total_match;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_total_tries;

    /**
     * @ORM\Column(type="integer")
     */
    private $player_total_points;

    /**
     * @ORM\Column(type="text")
     */
    private $player_photo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayerName(): ?string
    {
        return $this->player_name;
    }

    public function setPlayerName(string $player_name): self
    {
        $this->player_name = $player_name;

        return $this;
    }

    public function getPlayerFirstname(): ?string
    {
        return $this->player_firstname;
    }

    public function setPlayerFirstname(string $player_firstname): self
    {
        $this->player_firstname = $player_firstname;

        return $this;
    }

    public function getPlayerAge(): ?string
    {
        return $this->player_age;
    }

    public function setPlayerAge(string $player_age): self
    {
        $this->player_age = $player_age;

        return $this;
    }

    public function getPlayerTaille(): ?int
    {
        return $this->player_taille;
    }

    public function setPlayerTaille(int $player_taille): self
    {
        $this->player_taille = $player_taille;

        return $this;
    }

    public function getPlayerPoids(): ?int
    {
        return $this->player_poids;
    }

    public function setPlayerPoids(int $player_poids): self
    {
        $this->player_poids = $player_poids;

        return $this;
    }

    public function getPlayerLicenceNumber(): ?string
    {
        return $this->player_licence_number;
    }

    public function setPlayerLicenceNumber(string $player_licence_number): self
    {
        $this->player_licence_number = $player_licence_number;

        return $this;
    }

    public function getPlayerNumber(): ?int
    {
        return $this->player_number;
    }

    public function setPlayerNumber(int $player_number): self
    {
        $this->player_number = $player_number;

        return $this;
    }

    public function getPlayerState(): ?bool
    {
        return $this->player_state;
    }

    public function setPlayerState(bool $player_state): self
    {
        $this->player_state = $player_state;

        return $this;
    }

    public function getPlayerPoste(): ?string
    {
        return $this->player_poste;
    }

    public function setPlayerPoste(string $player_poste): self
    {
        $this->player_poste = $player_poste;

        return $this;
    }

    public function getPlayerTotalMatch(): ?int
    {
        return $this->player_total_match;
    }

    public function setPlayerTotalMatch(int $player_total_match): self
    {
        $this->player_total_match = $player_total_match;

        return $this;
    }

    public function getPlayerTotalTries(): ?int
    {
        return $this->player_total_tries;
    }

    public function setPlayerTotalTries(int $player_total_tries): self
    {
        $this->player_total_tries = $player_total_tries;

        return $this;
    }

    public function getPlayerTotalPoints(): ?int
    {
        return $this->player_total_points;
    }

    public function setPlayerTotalPoints(int $player_total_points): self
    {
        $this->player_total_points = $player_total_points;

        return $this;
    }

    public function getPlayerPhoto(): ?string
    {
        return $this->player_photo;
    }

    public function setPlayerPhoto(string $player_photo): self
    {
        $this->player_photo = $player_photo;

        return $this;
    }
}
