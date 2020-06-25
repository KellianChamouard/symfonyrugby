<?php

namespace App\Entity;

use App\Repository\MatchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatchRepository::class)
 * @ORM\Table(name="`match`")
 */
class Match
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
    private $match_dom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $match_ext;

    /**
     * @ORM\Column(type="date")
     */
    private $match_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $match_type;

    /**
     * @ORM\OneToOne(targetEntity=Result::class, mappedBy="match_id", cascade={"persist", "remove"})
     */
    private $match_result;

    /**
     * @ORM\OneToOne(targetEntity=Result::class, inversedBy="r_match", cascade={"persist", "remove"})
     */
    private $result;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchDom(): ?string
    {
        return $this->match_dom;
    }

    public function setMatchDom(string $match_dom): self
    {
        $this->match_dom = $match_dom;

        return $this;
    }

    public function getMatchExt(): ?string
    {
        return $this->match_ext;
    }

    public function setMatchExt(string $match_ext): self
    {
        $this->match_ext = $match_ext;

        return $this;
    }

    public function getMatchDate(): ?\DateTimeInterface
    {
        return $this->match_date;
    }

    public function setMatchDate(\DateTimeInterface $match_date): self
    {
        $this->match_date = $match_date;

        return $this;
    }

    public function getMatchType(): ?string
    {
        return $this->match_type;
    }

    public function setMatchType(string $match_type): self
    {
        $this->match_type = $match_type;

        return $this;
    }

    public function getMatchResult(): ?Result
    {
        return $this->match_result;
    }

    public function setMatchResult(Result $match_result): self
    {
        $this->match_result = $match_result;

        // set the owning side of the relation if necessary
        if ($match_result->getMatchId() !== $this) {
            $match_result->setMatchId($this);
        }

        return $this;
    }

    public function getResult(): ?Result
    {
        return $this->result;
    }

    public function setResult(?Result $result): self
    {
        $this->result = $result;

        return $this;
    }
}
