<?php

namespace App\Entity;

use App\Repository\TeamsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TeamsRepository::class)
 */
class Teams
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
    private $t_name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $t_logo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $t_stade;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $t_pts;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $t_win;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $t_lose;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $t_nul;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $t_total_matchs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTName(): ?string
    {
        return $this->t_name;
    }

    public function setTName(string $t_name): self
    {
        $this->t_name = $t_name;

        return $this;
    }

    public function getTLogo(): ?string
    {
        return $this->t_logo;
    }

    public function setTLogo(?string $t_logo): self
    {
        $this->t_logo = $t_logo;

        return $this;
    }

    public function getTStade(): ?string
    {
        return $this->t_stade;
    }

    public function setTStade(?string $t_stade): self
    {
        $this->t_stade = $t_stade;

        return $this;
    }

    public function getTPts(): ?int
    {
        return $this->t_pts;
    }

    public function setTPts(?int $t_pts): self
    {
        $this->t_pts = $t_pts;

        return $this;
    }

    public function getTWin(): ?int
    {
        return $this->t_win;
    }

    public function setTWin(?int $t_win): self
    {
        $this->t_win = $t_win;

        return $this;
    }

    public function getTLose(): ?int
    {
        return $this->t_lose;
    }

    public function setTLose(?int $t_lose): self
    {
        $this->t_lose = $t_lose;

        return $this;
    }

    public function getTNul(): ?int
    {
        return $this->t_nul;
    }

    public function setTNul(?int $t_nul): self
    {
        $this->t_nul = $t_nul;

        return $this;
    }

    public function getTTotalMatchs(): ?int
    {
        return $this->t_total_matchs;
    }

    public function setTTotalMatchs(?int $t_total_matchs): self
    {
        $this->t_total_matchs = $t_total_matchs;

        return $this;
    }

    public function __toString(): string
    {
        return $this->t_name;
    }

}
