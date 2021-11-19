<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LivreRepository::class)
 */
class Livre
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
    private $titre;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbpages;

    /**
     * @ORM\Column(type="date")
     */
    private $datedition;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbexemplaire;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="bigint")
     */
    private $isbn;

    /**
     * @ORM\ManyToOne(targetEntity=Editeur::class, inversedBy="livres")
     * @ORM\JoinColumn(nullable=false)
     */
    private $editeur;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="livres")
     */
    private $categorie;

    /**
     * @ORM\ManyToMany(targetEntity=Auteur::class, inversedBy="livres")
     */
    private $auteurs;

    /**
     * @ORM\OneToMany(targetEntity=Emprunteur::class, mappedBy="livres")
     */
    private $emprunteurs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;





    public function __construct()
    {
        $this->auteurs = new ArrayCollection();
        $this->emprunteurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbpages(): ?int
    {
        return $this->nbpages;
    }

    public function setNbpages(int $nbpages): self
    {
        $this->nbpages = $nbpages;

        return $this;
    }

    public function getDatedition(): ?\DateTimeInterface
    {
        return $this->datedition;
    }

    public function setDatedition(\DateTimeInterface $datedition): self
    {
        $this->datedition = $datedition;

        return $this;
    }

    public function getNbexemplaire(): ?int
    {
        return $this->nbexemplaire;
    }

    public function setNbexemplaire(int $nbexemplaire): self
    {
        $this->nbexemplaire = $nbexemplaire;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(string $isbn): self
    {
        $this->isbn = $isbn;

        return $this;
    }

    public function getEditeur(): ?Editeur
    {
        return $this->editeur;
    }

    public function setEditeur(?Editeur $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection|Auteur[]
     */
    public function getAuteurs(): Collection
    {
        return $this->auteurs;
    }

    public function addAuteur(Auteur $auteur): self
    {
        if (!$this->auteurs->contains($auteur)) {
            $this->auteurs[] = $auteur;
        }

        return $this;
    }

    public function removeAuteur(Auteur $auteur): self
    {
        $this->auteurs->removeElement($auteur);

        return $this;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->titre;
    }

    /**
     * @return Collection|Emprunteur[]
     */
    public function getEmprunteurs(): Collection
    {
        return $this->emprunteurs;
    }

    public function addEmprunteur(Emprunteur $emprunteur): self
    {
        if (!$this->emprunteurs->contains($emprunteur)) {
            $this->emprunteurs[] = $emprunteur;
            $emprunteur->setLivres($this);
        }

        return $this;
    }

    public function removeEmprunteur(Emprunteur $emprunteur): self
    {
        if ($this->emprunteurs->removeElement($emprunteur)) {
            // set the owning side to null (unless already changed)
            if ($emprunteur->getLivres() === $this) {
                $emprunteur->setLivres(null);
            }
        }

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }





}
