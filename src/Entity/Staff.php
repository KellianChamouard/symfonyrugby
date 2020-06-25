<?php

namespace App\Entity;

use App\Repository\StaffRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StaffRepository::class)
 */
class Staff
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
    private $staff_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $staff_firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $staff_poste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $staff_photo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStaffName(): ?string
    {
        return $this->staff_name;
    }

    public function setStaffName(string $staff_name): self
    {
        $this->staff_name = $staff_name;

        return $this;
    }

    public function getStaffFirstname(): ?string
    {
        return $this->staff_firstname;
    }

    public function setStaffFirstname(string $staff_firstname): self
    {
        $this->staff_firstname = $staff_firstname;

        return $this;
    }

    public function getStaffPoste(): ?string
    {
        return $this->staff_poste;
    }

    public function setStaffPoste(string $staff_poste): self
    {
        $this->staff_poste = $staff_poste;

        return $this;
    }

    public function getStaffPhoto(): ?string
    {
        return $this->staff_photo;
    }

    public function setStaffPhoto(string $staff_photo): self
    {
        $this->staff_photo = $staff_photo;

        return $this;
    }
}
