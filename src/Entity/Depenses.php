<?php  

namespace App\Entity;

use App\Repository\DepensesRepository;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\Cast\Double;
/**
 * @ORM\Entity(repositoryClass=DepensesRepository::class)
 */
class Depenses
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
    private $montant;

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
        return $this->id_personne = $s;
    }

    public function getId_projet(): ?int
    {
        return $this->id_projet;
    }

    public function setId_projet($s): ?int
    {
        return $this->id_projet = $s;
        
    }

    public function getMontant(): ?Double
    {
        return $this->montant;
    }

    public function setMontant($s): ?Double
    {
        return $this->montant = $s;
        
    }

}
?>