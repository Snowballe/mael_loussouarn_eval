<?php  
// src/Entity/Projet.php
namespace App\Entity;

use App\Repository\ProjetRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\Cast\Double;
/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 */
class Projet
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
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_personne;

    /**
     * @ORM\Column(type="float")
     */
    private $total_montant;

    /**
     * @ORM\Column(type="float")
     */
    private $moyenne;

    /**
     * @ORM\Column(type="DateTime")
     */
    private $date_soiree;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom($s): ?string
    {
        return $this->nom = $s;
         
    }

    public function getId_personne(): ?int
    {
        return $this->id_personne;
    }

    public function setId_personne($s): ?int
    {
        return $this->id_personne = $s;
        
    }

    public function getTotal_montant(): ?Double
    {
        return $this->total_montant;
    }

    public function setTotal_montant($s): ?Double
    {
        return $this->total_montant = $s;
        
    }

    public function getMoyenne(): ?Double
    {
        return $this->moyenne;
    }

    public function setMoyenne($s): ?Double
    {
        return $this->moyenne = $s;
         
    }

    public function getDate_soiree(): ?DateTime
    {
        return $this->date_soiree;
    }

    public function setDate_soiree($s): ?DateTime
    {
        return  $this->date_soiree = $s;
        
    }
}

?>