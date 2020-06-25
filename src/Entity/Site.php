<?php

namespace App\Entity;

use App\Repository\SiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SiteRepository::class)
 */
class Site
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $sitedescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sitelogo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sitemaincolor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSitedescription(): ?string
    {
        return $this->sitedescription;
    }

    public function setSitedescription(string $sitedescription): self
    {
        $this->sitedescription = $sitedescription;

        return $this;
    }

    public function getSitelogo(): ?string
    {
        return $this->sitelogo;
    }

    public function setSitelogo(string $sitelogo): self
    {
        $this->sitelogo = $sitelogo;

        return $this;
    }

    public function getSitemaincolor(): ?string
    {
        return $this->sitemaincolor;
    }

    public function setSitemaincolor(string $sitemaincolor): self
    {
        $this->sitemaincolor = $sitemaincolor;

        return $this;
    }
}
