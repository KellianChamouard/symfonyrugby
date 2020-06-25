<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsRepository::class)
 */
class News
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
    private $news_title;

    /**
     * @ORM\Column(type="text")
     */
    private $news_content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $news_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $news_cat;

    /**
     * @ORM\Column(type="boolean")
     */
    private $news_state;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="news")
     * @ORM\JoinColumn(nullable=false)
     */
    private $news_author;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNewsTitle(): ?string
    {
        return $this->news_title;
    }

    public function setNewsTitle(string $news_title): self
    {
        $this->news_title = $news_title;

        return $this;
    }

    public function getNewsContent(): ?string
    {
        return $this->news_content;
    }

    public function setNewsContent(string $news_content): self
    {
        $this->news_content = $news_content;

        return $this;
    }

    public function getNewsDate(): ?string
    {
        return $this->news_date;
    }

    public function setNewsDate(string $news_date): self
    {
        $this->news_date = $news_date;

        return $this;
    }

    public function getNewsCat(): ?string
    {
        return $this->news_cat;
    }

    public function setNewsCat(string $news_cat): self
    {
        $this->news_cat = $news_cat;

        return $this;
    }

    public function getNewsState(): ?bool
    {
        return $this->news_state;
    }

    public function setNewsState(bool $news_state): self
    {
        $this->news_state = $news_state;

        return $this;
    }

    public function getNewsAuthor(): ?User
    {
        return $this->news_author;
    }

    public function setNewsAuthor(?User $news_author): self
    {
        $this->news_author = $news_author;

        return $this;
    }
}
