<?php
namespace App\Entity;
use App\repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

class equipement 
{
    private $nom;

    private $marque;

    private $prix;

    private $description;

    private $quantité;


    public function getNom() : ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getMarque(): ?string 
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self 
    {
        $this->marque =$marque;
        return $this;
    }

    public function getPrix(): ?int 
    {
        return $this->prix;
    }

    public function getDescription(): ?string 
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description =$description;
        return $this->description;
    }

    public function getquantite(): ?int 
    {
        return $this->quantite;
    }

}
?>