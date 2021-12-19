 <?php
// src/Entity/personnes.php
namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeRepository::class)
 */
class Personnes
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
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

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

    
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }
    
    public function setPrenom($s): ?int
    {
        $this->prenom = $s;
        return 0;
    } 
}
?>