<?php  
// src/Entity/Remboursement.php
namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeRepository::class)
 */
class Remboursement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_personne;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_projet;
    
    /**
     * @ORM\Column(type="float")
     */
    private $dette;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getId_projet(): ?int
    {
        return $this->id_projet;
    }

    public function setId_projet($s): ?int
    {
        $this->id_projet = $s;
        return 0;
    }

    public function getDette(): ?int
    {
        return $this->dette;
    }

    public function setDette($s): ?int
    {
        $this->dette = $s;
        return 0;
    }
}

?>