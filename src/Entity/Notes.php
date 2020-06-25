<?php

namespace App\Entity;

use App\Repository\NotesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotesRepository::class)
 */
class Notes
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
    private $datenote;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contentnote;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatenote(): ?string
    {
        return $this->datenote;
    }

    public function setDatenote(string $datenote): self
    {
        $this->datenote = $datenote;

        return $this;
    }

    public function getContentnote(): ?string
    {
        return $this->contentnote;
    }

    public function setContentnote(string $contentnote): self
    {
        $this->contentnote = $contentnote;

        return $this;
    }
}
