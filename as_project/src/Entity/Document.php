<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_ajout;

    /**
     * @ORM\ManyToOne(targetEntity=DocumentCategorie::class, inversedBy="documents")
     */
    private $document_categorie;

    /**
     * @ORM\ManyToOne(targetEntity=Evenement::class, inversedBy="documents")
     */
    private $evenement_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(string $lien): self
    {
        $this->lien = $lien;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateAjout(): ?string
    {
        return $this->date_ajout;
    }

    public function setDateAjout(string $date_ajout): self
    {
        $this->date_ajout = $date_ajout;

        return $this;
    }

    public function getDocumentCategorie(): ?DocumentCategorie
    {
        return $this->document_categorie;
    }

    public function setDocumentCategorie(?DocumentCategorie $document_categorie): self
    {
        $this->document_categorie = $document_categorie;

        return $this;
    }

    public function getEvenementId(): ?Evenement
    {
        return $this->evenement_id;
    }

    public function setEvenementId(?Evenement $evenement_id): self
    {
        $this->evenement_id = $evenement_id;

        return $this;
    }
}
