<?php

namespace App\Entity;

use App\Repository\DocsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocsRepository::class)
 */
class Docs
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
    private $docname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doclink;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="docs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $docauthor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocname(): ?string
    {
        return $this->docname;
    }

    public function setDocname(string $docname): self
    {
        $this->docname = $docname;

        return $this;
    }

    public function getDoclink(): ?string
    {
        return $this->doclink;
    }

    public function setDoclink(string $doclink): self
    {
        $this->doclink = $doclink;

        return $this;
    }

    public function getDocauthor(): ?User
    {
        return $this->docauthor;
    }

    public function setDocauthor(?User $docauthor): self
    {
        $this->docauthor = $docauthor;

        return $this;
    }
    
}
