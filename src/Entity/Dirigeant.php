<?php

namespace App\Entity;

use App\Repository\DirigeantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DirigeantRepository::class)
 */
class Dirigeant
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
    private $dirig_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dirig_firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dirig_photo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dirig_poste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDirigName(): ?string
    {
        return $this->dirig_name;
    }

    public function setDirigName(string $dirig_name): self
    {
        $this->dirig_name = $dirig_name;

        return $this;
    }

    public function getDirigFirstname(): ?string
    {
        return $this->dirig_firstname;
    }

    public function setDirigFirstname(string $dirig_firstname): self
    {
        $this->dirig_firstname = $dirig_firstname;

        return $this;
    }

    public function getDirigPhoto(): ?string
    {
        return $this->dirig_photo;
    }

    public function setDirigPhoto(string $dirig_photo): self
    {
        $this->dirig_photo = $dirig_photo;

        return $this;
    }

    public function getDirigPoste(): ?string
    {
        return $this->dirig_poste;
    }

    public function setDirigPoste(string $dirig_poste): self
    {
        $this->dirig_poste = $dirig_poste;

        return $this;
    }
}
