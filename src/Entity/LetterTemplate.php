<?php

namespace App\Entity;

use App\Repository\LetterTemplateRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LetterTemplateRepository::class)
 */
class LetterTemplate
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
    private $destinataire_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destinataire_adress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $destinataire_phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $object;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $letter_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destinataire_firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $letter_lieu;

    /**
     * @ORM\Column(type="text")
     */
    private $lettercontent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $letterauthor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestinataireName(): ?string
    {
        return $this->destinataire_name;
    }

    public function setDestinataireName(string $destinataire_name): self
    {
        $this->destinataire_name = $destinataire_name;

        return $this;
    }

    public function getDestinataireAdress(): ?string
    {
        return $this->destinataire_adress;
    }

    public function setDestinataireAdress(string $destinataire_adress): self
    {
        $this->destinataire_adress = $destinataire_adress;

        return $this;
    }

    public function getDestinatairePhone(): ?string
    {
        return $this->destinataire_phone;
    }

    public function setDestinatairePhone(?string $destinataire_phone): self
    {
        $this->destinataire_phone = $destinataire_phone;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getLetterDate(): ?string
    {
        return $this->letter_date;
    }

    public function setLetterDate(string $letter_date): self
    {
        $this->letter_date = $letter_date;

        return $this;
    }

    public function getDestinataireFirstname(): ?string
    {
        return $this->destinataire_firstname;
    }

    public function setDestinataireFirstname(string $destinataire_firstname): self
    {
        $this->destinataire_firstname = $destinataire_firstname;

        return $this;
    }

    public function getLetterLieu(): ?string
    {
        return $this->letter_lieu;
    }

    public function setLetterLieu(string $letter_lieu): self
    {
        $this->letter_lieu = $letter_lieu;

        return $this;
    }

    public function getLettercontent(): ?string
    {
        return $this->lettercontent;
    }

    public function setLettercontent(string $lettercontent): self
    {
        $this->lettercontent = $lettercontent;

        return $this;
    }

    public function getLetterauthor(): ?string
    {
        return $this->letterauthor;
    }

    public function setLetterauthor(string $letterauthor): self
    {
        $this->letterauthor = $letterauthor;

        return $this;
    }
}
