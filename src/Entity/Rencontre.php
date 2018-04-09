<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Rencontre
 *
 * @ORM\Table(name="Rencontre", indexes={@ORM\Index(name="fk_Rencontre_Adresse1_idx", columns={"idAdresse"}), @ORM\Index(name="fk_Rencontre_ContactEtablissement1_idx", columns={"idContactEtablissement", "idPersonneContactEtablissement"}), @ORM\Index(name="fk_Rencontre_PersonnelPolytech1_idx", columns={"idPersonnelPolytech", "idPersonnePersonnelPolytech"})})
 * @ORM\Entity
 */
class Rencontre
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateRencontre", type="date", nullable=false)
     */
    private $daterencontre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateRdvTelephonique", type="date", nullable=true)
     */
    private $daterdvtelephonique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sujet", type="string", length=255, nullable=true)
     */
    private $sujet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Suite", type="string", length=255, nullable=true)
     */
    private $suite;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdresse", referencedColumnName="id")
     * })
     */
    private $idadresse;

    /**
     * @var \Contactetablissement
     *
     * @ORM\ManyToOne(targetEntity="Contactetablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idContactEtablissement", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonneContactEtablissement", referencedColumnName="idPersonne")
     * })
     */
    private $idcontactetablissement;

    /**
     * @var \Personnelpolytech
     *
     * @ORM\ManyToOne(targetEntity="Personnelpolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonnelPolytech", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="idPersonnePersonnelPolytech", referencedColumnName="idPersonne")
     * })
     */
    private $idpersonnelpolytech;

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
     * @return \DateTime
     */
    public function getDaterencontre(): \DateTime
    {
        return $this->daterencontre;
    }

    /**
     * @param \DateTime $daterencontre
     */
    public function setDaterencontre(\DateTime $daterencontre): void
    {
        $this->daterencontre = $daterencontre;
    }

    /**
     * @return \DateTime|null
     */
    public function getDaterdvtelephonique(): ?\DateTime
    {
        return $this->daterdvtelephonique;
    }

    /**
     * @param \DateTime|null $daterdvtelephonique
     */
    public function setDaterdvtelephonique(?\DateTime $daterdvtelephonique): void
    {
        $this->daterdvtelephonique = $daterdvtelephonique;
    }

    /**
     * @return null|string
     */
    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    /**
     * @param null|string $sujet
     */
    public function setSujet(?string $sujet): void
    {
        $this->sujet = $sujet;
    }

    /**
     * @return null|string
     */
    public function getSuite(): ?string
    {
        return $this->suite;
    }

    /**
     * @param null|string $suite
     */
    public function setSuite(?string $suite): void
    {
        $this->suite = $suite;
    }

    /**
     * @return \Adresse
     */
    public function getIdadresse(): \Adresse
    {
        return $this->idadresse;
    }

    /**
     * @param \Adresse $idadresse
     */
    public function setIdadresse(\Adresse $idadresse): void
    {
        $this->idadresse = $idadresse;
    }

    /**
     * @return \Contactetablissement
     */
    public function getIdcontactetablissement(): \Contactetablissement
    {
        return $this->idcontactetablissement;
    }

    /**
     * @param \Contactetablissement $idcontactetablissement
     */
    public function setIdcontactetablissement(\Contactetablissement $idcontactetablissement): void
    {
        $this->idcontactetablissement = $idcontactetablissement;
    }

    /**
     * @return \Personnelpolytech
     */
    public function getIdpersonnelpolytech(): \Personnelpolytech
    {
        return $this->idpersonnelpolytech;
    }

    /**
     * @param \Personnelpolytech $idpersonnelpolytech
     */
    public function setIdpersonnelpolytech(\Personnelpolytech $idpersonnelpolytech): void
    {
        $this->idpersonnelpolytech = $idpersonnelpolytech;
    }


}
