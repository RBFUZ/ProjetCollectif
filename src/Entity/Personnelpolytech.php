<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personnelpolytech
 *
 * @ORM\Table(name="PersonnelPolytech", indexes={@ORM\Index(name="fk_PersonnelPolytech_Personne1_idx", columns={"idPersonne"}), @ORM\Index(name="fk_PersonnelPolytech_Departement1_idx", columns={"idDepartement"})})
 * @ORM\Entity
 */
class Personnelpolytech
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
     * @var string
     *
     * @ORM\Column(name="mailUniversitaire", type="string", length=100, nullable=false)
     */
    private $mailuniversitaire;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=200, nullable=false)
     */
    private $fonction;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idDepartement", referencedColumnName="id")
     * })
     */
    private $iddepartement;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Conseilperfectionnement", mappedBy="idpersonnepersonnelpolytech")
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
     * @return string
     */
    public function getMailuniversitaire(): string
    {
        return $this->mailuniversitaire;
    }

    /**
     * @param string $mailuniversitaire
     */
    public function setMailuniversitaire(string $mailuniversitaire): void
    {
        $this->mailuniversitaire = $mailuniversitaire;
    }

    /**
     * @return string
     */
    public function getFonction(): string
    {
        return $this->fonction;
    }

    /**
     * @param string $fonction
     */
    public function setFonction(string $fonction): void
    {
        $this->fonction = $fonction;
    }

    /**
     * @return \Departement
     */
    public function getIddepartement(): \Departement
    {
        return $this->iddepartement;
    }

    /**
     * @param \Departement $iddepartement
     */
    public function setIddepartement(\Departement $iddepartement): void
    {
        $this->iddepartement = $iddepartement;
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
