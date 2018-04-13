<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RencontreContact
 *
 * @ORM\Table(name="rencontre_contact", indexes={@ORM\Index(name="fk_Rencontre_Adresse1_idx", columns={"id_adresse"}), @ORM\Index(name="fk_Rencontre_ContactEtablissement1_idx", columns={"id_contact_etablissement", "id_personne_contact_etablissement"}), @ORM\Index(name="fk_Rencontre_PersonnelPolytech1_idx", columns={"id_personnel_polytech", "id_personne_personnel_polytech"})})
 * @ORM\Entity
 */
class RencontreContact
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
     * @ORM\Column(name="date_rencontre", type="date", nullable=false)
     */
    private $dateRencontre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rdv_telephonique", type="date", nullable=true)
     */
    private $dateRdvTelephonique;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet", type="string", length=255, nullable=true)
     */
    private $sujet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="suite", type="string", length=255, nullable=true)
     */
    private $suite;

    /**
     * @var \App\Entity\Adresse
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adresse", referencedColumnName="id")
     * })
     */
    private $idAdresse;

    /**
     * @var \App\Entity\ContactEtablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ContactEtablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contact_etablissement", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_contact_etablissement", referencedColumnName="id_personne")
     * })
     */
    private $idContactEtablissement;

    /**
     * @var \App\Entity\PersonnelPolytech
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\PersonnelPolytech")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personnel_polytech", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_personnel_polytech", referencedColumnName="id_personne")
     * })
     */
    private $idPersonnelPolytech;



    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateRencontre.
     *
     * @param \DateTime $dateRencontre
     *
     * @return RencontreContact
     */
    public function setDateRencontre($dateRencontre)
    {
        $this->dateRencontre = $dateRencontre;

        return $this;
    }

    /**
     * Get dateRencontre.
     *
     * @return \DateTime
     */
    public function getDateRencontre()
    {
        return $this->dateRencontre;
    }

    /**
     * Set dateRdvTelephonique.
     *
     * @param \DateTime|null $dateRdvTelephonique
     *
     * @return RencontreContact
     */
    public function setDateRdvTelephonique($dateRdvTelephonique = null)
    {
        $this->dateRdvTelephonique = $dateRdvTelephonique;

        return $this;
    }

    /**
     * Get dateRdvTelephonique.
     *
     * @return \DateTime|null
     */
    public function getDateRdvTelephonique()
    {
        return $this->dateRdvTelephonique;
    }

    /**
     * Set sujet.
     *
     * @param string|null $sujet
     *
     * @return RencontreContact
     */
    public function setSujet($sujet = null)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet.
     *
     * @return string|null
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set suite.
     *
     * @param string|null $suite
     *
     * @return RencontreContact
     */
    public function setSuite($suite = null)
    {
        $this->suite = $suite;

        return $this;
    }

    /**
     * Get suite.
     *
     * @return string|null
     */
    public function getSuite()
    {
        return $this->suite;
    }

    /**
     * Set idAdresse.
     *
     * @param \App\Entity\Adresse|null $idAdresse
     *
     * @return RencontreContact
     */
    public function setIdAdresse(\App\Entity\Adresse $idAdresse = null)
    {
        $this->idAdresse = $idAdresse;

        return $this;
    }

    /**
     * Get idAdresse.
     *
     * @return \App\Entity\Adresse|null
     */
    public function getIdAdresse()
    {
        return $this->idAdresse;
    }

    /**
     * Set idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissement
     *
     * @return RencontreContact
     */
    public function setIdContactEtablissement(\App\Entity\ContactEtablissement $idContactEtablissement = null)
    {
        $this->idContactEtablissement = $idContactEtablissement;

        return $this;
    }

    /**
     * Get idContactEtablissement.
     *
     * @return \App\Entity\ContactEtablissement|null
     */
    public function getIdContactEtablissement()
    {
        return $this->idContactEtablissement;
    }

    /**
     * Set idPersonnelPolytech.
     *
     * @param \App\Entity\PersonnelPolytech|null $idPersonnelPolytech
     *
     * @return RencontreContact
     */
    public function setIdPersonnelPolytech(\App\Entity\PersonnelPolytech $idPersonnelPolytech = null)
    {
        $this->idPersonnelPolytech = $idPersonnelPolytech;

        return $this;
    }

    /**
     * Get idPersonnelPolytech.
     *
     * @return \App\Entity\PersonnelPolytech|null
     */
    public function getIdPersonnelPolytech()
    {
        return $this->idPersonnelPolytech;
    }
}
