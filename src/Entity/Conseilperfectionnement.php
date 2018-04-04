<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conseilperfectionnement
 *
 * @ORM\Table(name="ConseilPerfectionnement", indexes={@ORM\Index(name="fk_ConseilPerfectionnement_Departement1_idx", columns={"idDepartement"})})
 * @ORM\Entity
 */
class Conseilperfectionnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="dateConseilPerfectionnement", type="string", length=45, nullable=false)
     */
    private $dateconseilperfectionnement;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Contactetablissement", inversedBy="idconseilperfectionnement")
     * @ORM\JoinTable(name="contactparticipeconseil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idConseilPerfectionnement", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idPersonneContactEtablissement", referencedColumnName="idPersonne"),
     *     @ORM\JoinColumn(name="idContactEtablissement", referencedColumnName="id")
     *   }
     * )
     */
    private $idpersonnecontactetablissement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Etudiant", inversedBy="idconseilperfectionnement")
     * @ORM\JoinTable(name="etudiantparticipeconseil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idConseilPerfectionnement", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idPersonneEtudiant", referencedColumnName="idPersonne"),
     *     @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id")
     *   }
     * )
     */
    private $idpersonneetudiant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personnelpolytech", inversedBy="idconseilperfectionnement")
     * @ORM\JoinTable(name="personnelparticipeconseil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idConseilPerfectionnement", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idPersonnePersonnelPolytech", referencedColumnName="idPersonne"),
     *     @ORM\JoinColumn(name="idPersonnelPolytech", referencedColumnName="id")
     *   }
     * )
     */
    private $idpersonnepersonnelpolytech;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idpersonnecontactetablissement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idpersonneetudiant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idpersonnepersonnelpolytech = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function getDateconseilperfectionnement(): string
    {
        return $this->dateconseilperfectionnement;
    }

    /**
     * @param string $dateconseilperfectionnement
     */
    public function setDateconseilperfectionnement(string $dateconseilperfectionnement): void
    {
        $this->dateconseilperfectionnement = $dateconseilperfectionnement;
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdpersonnecontactetablissement(): \Doctrine\Common\Collections\Collection
    {
        return $this->idpersonnecontactetablissement;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idpersonnecontactetablissement
     */
    public function setIdpersonnecontactetablissement(\Doctrine\Common\Collections\Collection $idpersonnecontactetablissement): void
    {
        $this->idpersonnecontactetablissement = $idpersonnecontactetablissement;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdpersonneetudiant(): \Doctrine\Common\Collections\Collection
    {
        return $this->idpersonneetudiant;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idpersonneetudiant
     */
    public function setIdpersonneetudiant(\Doctrine\Common\Collections\Collection $idpersonneetudiant): void
    {
        $this->idpersonneetudiant = $idpersonneetudiant;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdpersonnepersonnelpolytech(): \Doctrine\Common\Collections\Collection
    {
        return $this->idpersonnepersonnelpolytech;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idpersonnepersonnelpolytech
     */
    public function setIdpersonnepersonnelpolytech(\Doctrine\Common\Collections\Collection $idpersonnepersonnelpolytech): void
    {
        $this->idpersonnepersonnelpolytech = $idpersonnepersonnelpolytech;
    }


}
