<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="Etudiant", uniqueConstraints={@ORM\UniqueConstraint(name="numeroEtudiant_UNIQUE", columns={"numeroEtudiant"})}, indexes={@ORM\Index(name="fk_Etudiant_Startup1_idx", columns={"idStartup"}), @ORM\Index(name="fk_Etudiant_Personne1_idx", columns={"idPersonne"}), @ORM\Index(name="fk_Etudiant_Specialite1_idx", columns={"idSpecialite"})})
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroEtudiant", type="integer", nullable=false)
     */
    private $numeroetudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="mailEtudiant", type="string", length=100, nullable=false)
     */
    private $mailetudiant;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeEtude", type="integer", nullable=false)
     */
    private $anneeetude;

    /**
     * @var bool
     *
     * @ORM\Column(name="diplome", type="boolean", nullable=false, options={"comment"="TRUE si diplomé, FAUX autrement"})
     */
    private $diplome;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateDiplomation", type="date", nullable=true)
     */
    private $datediplomation;

    /**
     * @var \Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonne", referencedColumnName="id")
     * })
     */
    private $idpersonne;

    /**
     * @var \Specialite
     *
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idSpecialite", referencedColumnName="id")
     * })
     */
    private $idspecialite;

    /**
     * @var \Startup
     *
     * @ORM\ManyToOne(targetEntity="Startup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idStartup", referencedColumnName="id")
     * })
     */
    private $idstartup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Conseilperfectionnement", mappedBy="idpersonneetudiant")
     */
    private $idconseilperfectionnement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idconseilperfectionnement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getNumeroetudiant(): int
    {
        return $this->numeroetudiant;
    }

    /**
     * @param int $numeroetudiant
     */
    public function setNumeroetudiant(int $numeroetudiant): void
    {
        $this->numeroetudiant = $numeroetudiant;
    }

    /**
     * @return string
     */
    public function getMailetudiant(): string
    {
        return $this->mailetudiant;
    }

    /**
     * @param string $mailetudiant
     */
    public function setMailetudiant(string $mailetudiant): void
    {
        $this->mailetudiant = $mailetudiant;
    }

    /**
     * @return int
     */
    public function getAnneeetude(): int
    {
        return $this->anneeetude;
    }

    /**
     * @param int $anneeetude
     */
    public function setAnneeetude(int $anneeetude): void
    {
        $this->anneeetude = $anneeetude;
    }

    /**
     * @return bool
     */
    public function isDiplome(): bool
    {
        return $this->diplome;
    }

    /**
     * @param bool $diplome
     */
    public function setDiplome(bool $diplome): void
    {
        $this->diplome = $diplome;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatediplomation(): ?\DateTime
    {
        return $this->datediplomation;
    }

    /**
     * @param \DateTime|null $datediplomation
     */
    public function setDatediplomation(?\DateTime $datediplomation): void
    {
        $this->datediplomation = $datediplomation;
    }

    /**
     * @return \Personne
     */
    public function getIdpersonne(): \Personne
    {
        return $this->idpersonne;
    }

    /**
     * @param \Personne $idpersonne
     */
    public function setIdpersonne(\Personne $idpersonne): void
    {
        $this->idpersonne = $idpersonne;
    }

    /**
     * @return \Specialite
     */
    public function getIdspecialite(): \Specialite
    {
        return $this->idspecialite;
    }

    /**
     * @param \Specialite $idspecialite
     */
    public function setIdspecialite(\Specialite $idspecialite): void
    {
        $this->idspecialite = $idspecialite;
    }

    /**
     * @return \Startup
     */
    public function getIdstartup(): \Startup
    {
        return $this->idstartup;
    }

    /**
     * @param \Startup $idstartup
     */
    public function setIdstartup(\Startup $idstartup): void
    {
        $this->idstartup = $idstartup;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdconseilperfectionnement(): \Doctrine\Common\Collections\Collection
    {
        return $this->idconseilperfectionnement;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idconseilperfectionnement
     */
    public function setIdconseilperfectionnement(\Doctrine\Common\Collections\Collection $idconseilperfectionnement): void
    {
        $this->idconseilperfectionnement = $idconseilperfectionnement;
    }


}
