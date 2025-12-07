<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClubRepository::class)]
class Club
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, categories>
     */
    #[ORM\ManyToMany(targetEntity: categories::class, inversedBy: 'clubs')]
    private Collection $Categorie;

    #[ORM\Column(length: 255)]
    private ?string $infos = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $fondation = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\Column(length: 255)]
    private ?string $couleurs = null;

    #[ORM\Column(length: 255)]
    private ?string $stade = null;

    #[ORM\Column(length: 255)]
    private ?string $championnat = null;

    #[ORM\Column(length: 255)]
    private ?string $proprietaire = null;

    #[ORM\Column(length: 255)]
    private ?string $president = null;

    #[ORM\Column(length: 255)]
    private ?string $entraineur = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $website = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $dateCreation = null;

    /**
     * @var Collection<int, Sportif>
     */
    #[ORM\OneToMany(targetEntity: Sportif::class, mappedBy: 'club')]
    private Collection $sportifs;

    public function __construct()
    {
        $this->Categorie = new ArrayCollection();
        $this->sportifs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, categories>
     */
    public function getCategorie(): Collection
    {
        return $this->Categorie;
    }

    public function addCategorie(categories $categorie): static
    {
        if (!$this->Categorie->contains($categorie)) {
            $this->Categorie->add($categorie);
        }

        return $this;
    }

    public function removeCategorie(categories $categorie): static
    {
        $this->Categorie->removeElement($categorie);

        return $this;
    }

    public function getInfos(): ?string
    {
        return $this->infos;
    }

    public function setInfos(string $infos): static
    {
        $this->infos = $infos;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getFondation(): ?string
    {
        return $this->fondation;
    }

    public function setFondation(string $fondation): static
    {
        $this->fondation = $fondation;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCouleurs(): ?string
    {
        return $this->couleurs;
    }

    public function setCouleurs(string $couleurs): static
    {
        $this->couleurs = $couleurs;

        return $this;
    }

    public function getStade(): ?string
    {
        return $this->stade;
    }

    public function setStade(string $stade): static
    {
        $this->stade = $stade;

        return $this;
    }

    public function getChampionnat(): ?string
    {
        return $this->championnat;
    }

    public function setChampionnat(string $championnat): static
    {
        $this->championnat = $championnat;

        return $this;
    }

    public function getProprietaire(): ?string
    {
        return $this->proprietaire;
    }

    public function setProprietaire(string $proprietaire): static
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    public function getPresident(): ?string
    {
        return $this->president;
    }

    public function setPresident(string $president): static
    {
        $this->president = $president;

        return $this;
    }

    public function getEntraineur(): ?string
    {
        return $this->entraineur;
    }

    public function setEntraineur(string $entraineur): static
    {
        $this->entraineur = $entraineur;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): static
    {
        $this->website = $website;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeImmutable $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * @return Collection<int, Sportif>
     */
    public function getSportifs(): Collection
    {
        return $this->sportifs;
    }

    public function addSportif(Sportif $sportif): static
    {
        if (!$this->sportifs->contains($sportif)) {
            $this->sportifs->add($sportif);
            $sportif->setClub($this);
        }

        return $this;
    }

    public function removeSportif(Sportif $sportif): static
    {
        if ($this->sportifs->removeElement($sportif)) {
            // set the owning side to null (unless already changed)
            if ($sportif->getClub() === $this) {
                $sportif->setClub(null);
            }
        }

        return $this;
    }
}
