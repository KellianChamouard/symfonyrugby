<?php

namespace App\Entity;

use App\Repository\ResultRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultRepository::class)
 */
class Result
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Match::class, inversedBy="match_result", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $match_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $match_winner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $match_loser;

    /**
     * @ORM\Column(type="integer")
     */
    private $winner_pts;

    /**
     * @ORM\Column(type="integer")
     */
    private $loser_pts;

    /**
     * @ORM\Column(type="text")
     */
    private $match_comment;

    /**
     * @ORM\OneToOne(targetEntity=Match::class, mappedBy="result", cascade={"persist", "remove"})
     */
    private $r_match;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchId(): ?Match
    {
        return $this->match_id;
    }

    public function setMatchId(Match $match_id): self
    {
        $this->match_id = $match_id;

        return $this;
    }

    public function getMatchWinner(): ?string
    {
        return $this->match_winner;
    }

    public function setMatchWinner(string $match_winner): self
    {
        $this->match_winner = $match_winner;

        return $this;
    }

    public function getMatchLoser(): ?string
    {
        return $this->match_loser;
    }

    public function setMatchLoser(string $match_loser): self
    {
        $this->match_loser = $match_loser;

        return $this;
    }

    public function getWinnerPts(): ?int
    {
        return $this->winner_pts;
    }

    public function setWinnerPts(int $winner_pts): self
    {
        $this->winner_pts = $winner_pts;

        return $this;
    }

    public function getLoserPts(): ?int
    {
        return $this->loser_pts;
    }

    public function setLoserPts(int $loser_pts): self
    {
        $this->loser_pts = $loser_pts;

        return $this;
    }

    public function getMatchComment(): ?string
    {
        return $this->match_comment;
    }

    public function setMatchComment(string $match_comment): self
    {
        $this->match_comment = $match_comment;

        return $this;
    }

    public function getRMatch(): ?Match
    {
        return $this->r_match;
    }

    public function setRMatch(?Match $r_match): self
    {
        $this->r_match = $r_match;

        // set (or unset) the owning side of the relation if necessary
        $newResult = null === $r_match ? null : $this;
        if ($r_match->getResult() !== $newResult) {
            $r_match->setResult($newResult);
        }

        return $this;
    }
}
