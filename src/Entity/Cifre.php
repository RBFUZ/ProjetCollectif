<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cifre
 *
 * @ORM\Table(name="CIFRE", indexes={@ORM\Index(name="fk_CIFRE_Etudiant1_idx", columns={"idPersonneEtudiant", "idEtudiant"}), @ORM\Index(name="fk_CIFRE_Etablissement1_idx", columns={"idEtablissement"}), @ORM\Index(name="fk_CIFRE_PersonnelPolytech1_idx", columns={"idPersonnePersonnelPolytech", "idPersonnelPolytech"})})
 * @ORM\Entity
 */
class Cifre
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
     * @ORM\Column(name="intituleCIFRE", type="string", length=255, nullable=false)
     */
    private $intitulecifre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutCIFRE", type="date", nullable=false)
     */
    private $datedebutcifre;

    /**
     * @var bool
     *
     * @ORM\Column(name="soutenue", type="boolean", nullable=false)
     */
    private $soutenue;

    /**
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtablissement", referencedColumnName="id")
     * })
     */
    private $idetablissement;

    /**
     * @var \Etudiant
     *
     * @ORM\ManyToOne(targetEntity="Etudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonneEtudiant", referencedColumnName="idPersonne"),
     *   @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id")
     * })
     */
    private $idpersonneetudiant;

    /**
     * @var \Personnelpolytech
     *
     * @ORM\ManyToOne(targetEntity="Personnelpolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonnePersonnelPolytech", referencedColumnName="idPersonne"),
     *   @ORM\JoinColumn(name="idPersonnelPolytech", referencedColumnName="id")
     * })
     */
    private $idpersonnepersonnelpolytech;

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
    public function getIntitulecifre(): string
    {
        return $this->intitulecifre;
    }

    /**
     * @param string $intitulecifre
     */
    public function setIntitulecifre(string $intitulecifre): void
    {
        $this->intitulecifre = $intitulecifre;
    }

    /**
     * @return \DateTime
     */
    public function getDatedebutcifre(): \DateTime
    {
        return $this->datedebutcifre;
    }

    /**
     * @param \DateTime $datedebutcifre
     */
    public function setDatedebutcifre(\DateTime $datedebutcifre): void
    {
        $this->datedebutcifre = $datedebutcifre;
    }

    /**
     * @return bool
     */
    public function isSoutenue(): bool
    {
        return $this->soutenue;
    }

    /**
     * @param bool $soutenue
     */
    public function setSoutenue(bool $soutenue): void
    {
        $this->soutenue = $soutenue;
    }

    /**
     * @return \Etablissement
     */
    public function getIdetablissement(): \Etablissement
    {
        return $this->idetablissement;
    }

    /**
     * @param \Etablissement $idetablissement
     */
    public function setIdetablissement(\Etablissement $idetablissement): void
    {
        $this->idetablissement = $idetablissement;
    }

    /**
     * @return \Etudiant
     */
    public function getIdpersonneetudiant(): \Etudiant
    {
        return $this->idpersonneetudiant;
    }

    /**
     * @param \Etudiant $idpersonneetudiant
     */
    public function setIdpersonneetudiant(\Etudiant $idpersonneetudiant): void
    {
        $this->idpersonneetudiant = $idpersonneetudiant;
    }

    /**
     * @return \Personnelpolytech
     */
    public function getIdpersonnepersonnelpolytech(): \Personnelpolytech
    {
        return $this->idpersonnepersonnelpolytech;
    }

    /**
     * @param \Personnelpolytech $idpersonnepersonnelpolytech
     */
    public function setIdpersonnepersonnelpolytech(\Personnelpolytech $idpersonnepersonnelpolytech): void
    {
        $this->idpersonnepersonnelpolytech = $idpersonnepersonnelpolytech;
    }


}
