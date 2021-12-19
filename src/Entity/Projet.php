<?php  
// src/Entity/Projet.php
namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeRepository::class)
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

    public function setNom($s): ?int
    {
        $this->nom = $s;
        return 0;
    }

    public function getId_personne(): ?int
    {
        return $this->id_personne;
    }

    public function setId_personne($s): ?int
    {
        $this->id_personne = $s;
        return 0;
    }

    public function getTotal_montant(): ?int
    {
        return $this->total_montant;
    }

    public function setTotal_montant($s): ?int
    {
        $this->total_montant = $s;
        return 0;
    }

    public function getMoyenne(): ?int
    {
        return $this->moyenne;
    }

    public function setMoyenne($s): ?int
    {
        $this->moyenne = $s;
        return 0;
    }

    public function getDate_soiree(): ?int
    {
        return $this->date_soiree;
    }

    public function setDate_soiree($s): ?int
    {
        $this->date_soiree = $s;
        return 0;
    }
}

?>