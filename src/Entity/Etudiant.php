<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant", uniqueConstraints={@ORM\UniqueConstraint(name="numeroEtudiant_UNIQUE", columns={"numero_etudiant"})}, indexes={@ORM\Index(name="fk_Etudiant_Startup1_idx", columns={"id_startup"}), @ORM\Index(name="fk_Etudiant_Personne1_idx", columns={"id_personne"}), @ORM\Index(name="fk_Etudiant_Specialite1_idx", columns={"id_specialite"})})
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
     * @ORM\Column(name="annee_etude", type="integer", nullable=false)
     */
    private $anneeEtude;

    /**
     * @var bool
     *
     * @ORM\Column(name="diplome", type="boolean", nullable=false, options={"comment"="1 si diplomé, 0 autrement"})
     */
    private $diplome = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="numero_etudiant", type="integer", nullable=true)
     */
    private $numeroEtudiant;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_etudiant", type="string", length=100, nullable=true)
     */
    private $mailEtudiant;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_diplomation", type="date", nullable=true)
     */
    private $dateDiplomation;

    /**
     * @var \App\Entity\Personne
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Entity\Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id")
     * })
     */
    private $idPersonne;

    /**
     * @var \App\Entity\Specialite
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Specialite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_specialite", referencedColumnName="id")
     * })
     */
    private $idSpecialite;

    /**
     * @var \App\Entity\Startup
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Startup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_startup", referencedColumnName="id")
     * })
     */
    private $idStartup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\ConseilPerfectionnement", mappedBy="idPersonneEtudiant")
     */
    private $idConseilPerfectionnement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idConseilPerfectionnement = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set id.
     *
     * @param int $id
     *
     * @return Etudiant
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set anneeEtude.
     *
     * @param int $anneeEtude
     *
     * @return Etudiant
     */
    public function setAnneeEtude($anneeEtude)
    {
        $this->anneeEtude = $anneeEtude;

        return $this;
    }

    /**
     * Get anneeEtude.
     *
     * @return int
     */
    public function getAnneeEtude()
    {
        return $this->anneeEtude;
    }

    /**
     * Set diplome.
     *
     * @param bool $diplome
     *
     * @return Etudiant
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome.
     *
     * @return bool
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set numeroEtudiant.
     *
     * @param int|null $numeroEtudiant
     *
     * @return Etudiant
     */
    public function setNumeroEtudiant($numeroEtudiant = null)
    {
        $this->numeroEtudiant = $numeroEtudiant;

        return $this;
    }

    /**
     * Get numeroEtudiant.
     *
     * @return int|null
     */
    public function getNumeroEtudiant()
    {
        return $this->numeroEtudiant;
    }

    /**
     * Set mailEtudiant.
     *
     * @param string|null $mailEtudiant
     *
     * @return Etudiant
     */
    public function setMailEtudiant($mailEtudiant = null)
    {
        $this->mailEtudiant = $mailEtudiant;

        return $this;
    }

    /**
     * Get mailEtudiant.
     *
     * @return string|null
     */
    public function getMailEtudiant()
    {
        return $this->mailEtudiant;
    }

    /**
     * Set dateDiplomation.
     *
     * @param \DateTime|null $dateDiplomation
     *
     * @return Etudiant
     */
    public function setDateDiplomation($dateDiplomation = null)
    {
        $this->dateDiplomation = $dateDiplomation;

        return $this;
    }

    /**
     * Get dateDiplomation.
     *
     * @return \DateTime|null
     */
    public function getDateDiplomation()
    {
        return $this->dateDiplomation;
    }

    /**
     * Set idPersonne.
     *
     * @param \App\Entity\Personne $idPersonne
     *
     * @return Etudiant
     */
    public function setIdPersonne(\App\Entity\Personne $idPersonne)
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }

    /**
     * Get idPersonne.
     *
     * @return \App\Entity\Personne
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set idSpecialite.
     *
     * @param \App\Entity\Specialite|null $idSpecialite
     *
     * @return Etudiant
     */
    public function setIdSpecialite(\App\Entity\Specialite $idSpecialite = null)
    {
        $this->idSpecialite = $idSpecialite;

        return $this;
    }

    /**
     * Get idSpecialite.
     *
     * @return \App\Entity\Specialite|null
     */
    public function getIdSpecialite()
    {
        return $this->idSpecialite;
    }

    /**
     * Set idStartup.
     *
     * @param \App\Entity\Startup|null $idStartup
     *
     * @return Etudiant
     */
    public function setIdStartup(\App\Entity\Startup $idStartup = null)
    {
        $this->idStartup = $idStartup;

        return $this;
    }

    /**
     * Get idStartup.
     *
     * @return \App\Entity\Startup|null
     */
    public function getIdStartup()
    {
        return $this->idStartup;
    }

    /**
     * Add idConseilPerfectionnement.
     *
     * @param \App\Entity\ConseilPerfectionnement $idConseilPerfectionnement
     *
     * @return Etudiant
     */
    public function addIdConseilPerfectionnement(\App\Entity\ConseilPerfectionnement $idConseilPerfectionnement)
    {
        $this->idConseilPerfectionnement[] = $idConseilPerfectionnement;

        return $this;
    }

    /**
     * Remove idConseilPerfectionnement.
     *
     * @param \App\Entity\ConseilPerfectionnement $idConseilPerfectionnement
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdConseilPerfectionnement(\App\Entity\ConseilPerfectionnement $idConseilPerfectionnement)
    {
        return $this->idConseilPerfectionnement->removeElement($idConseilPerfectionnement);
    }

    /**
     * Get idConseilPerfectionnement.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdConseilPerfectionnement()
    {
        return $this->idConseilPerfectionnement;
    }
}
