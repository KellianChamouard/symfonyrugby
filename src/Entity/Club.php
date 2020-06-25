<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClubRepository::class)
 */
class Club
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
    private $clubname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clubcc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clubadress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clubcountry;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clubphone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clubmail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClubname(): ?string
    {
        return $this->clubname;
    }

    public function setClubname(string $clubname): self
    {
        $this->clubname = $clubname;

        return $this;
    }

    public function getClubcc(): ?string
    {
        return $this->clubcc;
    }

    public function setClubcc(string $clubcc): self
    {
        $this->clubcc = $clubcc;

        return $this;
    }

    public function getClubadress(): ?string
    {
        return $this->clubadress;
    }

    public function setClubadress(string $clubadress): self
    {
        $this->clubadress = $clubadress;

        return $this;
    }

    public function getClubcountry(): ?string
    {
        return $this->clubcountry;
    }

    public function setClubcountry(string $clubcountry): self
    {
        $this->clubcountry = $clubcountry;

        return $this;
    }

    public function getClubphone(): ?string
    {
        return $this->clubphone;
    }

    public function setClubphone(string $clubphone): self
    {
        $this->clubphone = $clubphone;

        return $this;
    }

    public function getClubmail(): ?string
    {
        return $this->clubmail;
    }

    public function setClubmail(string $clubmail): self
    {
        $this->clubmail = $clubmail;

        return $this;
    }
}
