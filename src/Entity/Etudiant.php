<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
<<<<<<< HEAD
 * @ORM\Table(name="Etudiant", uniqueConstraints={@ORM\UniqueConstraint(name="numeroEtudiant_UNIQUE", columns={"numeroEtudiant"})}, indexes={@ORM\Index(name="fk_Etudiant_Startup1_idx", columns={"idStartup"}), @ORM\Index(name="fk_Etudiant_Personne1_idx", columns={"idPersonne"}), @ORM\Index(name="fk_Etudiant_Specialite1_idx", columns={"idSpecialite"})})
=======
 * @ORM\Table(name="etudiant", uniqueConstraints={@ORM\UniqueConstraint(name="numeroEtudiant_UNIQUE", columns={"numero_etudiant"})}, indexes={@ORM\Index(name="fk_Etudiant_Startup1_idx", columns={"id_startup"}), @ORM\Index(name="fk_Etudiant_Personne1_idx", columns={"id_personne"}), @ORM\Index(name="fk_Etudiant_Specialite1_idx", columns={"id_specialite"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
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
<<<<<<< HEAD
     * @ORM\Column(name="numeroEtudiant", type="integer", nullable=false)
     */
    private $numeroetudiant;
=======
     * @ORM\Column(name="numero_etudiant", type="integer", nullable=false)
     */
    private $numeroEtudiant;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="mailEtudiant", type="string", length=100, nullable=false)
     */
    private $mailetudiant;
=======
     * @ORM\Column(name="mail_etudiant", type="string", length=100, nullable=false)
     */
    private $mailEtudiant;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var int
     *
<<<<<<< HEAD
     * @ORM\Column(name="anneeEtude", type="integer", nullable=false)
     */
    private $anneeetude;
=======
     * @ORM\Column(name="annee_etude", type="integer", nullable=false)
     */
    private $anneeEtude;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var bool
     *
     * @ORM\Column(name="diplome", type="boolean", nullable=false, options={"comment"="TRUE si diplomé, FAUX autrement"})
     */
    private $diplome;

    /**
     * @var \DateTime|null
     *
<<<<<<< HEAD
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
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
<<<<<<< HEAD
     * @ORM\ManyToMany(targetEntity="Conseilperfectionnement", mappedBy="idpersonneetudiant")
     */
    private $idconseilperfectionnement;
=======
     * @ORM\ManyToMany(targetEntity="App\Entity\ConseilPerfectionnement", mappedBy="idPersonneEtudiant")
     */
    private $idConseilPerfectionnement;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * Constructor
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->idconseilperfectionnement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->id;
    }

    /**
<<<<<<< HEAD
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
=======
     * Set numeroEtudiant.
     *
     * @param int $numeroEtudiant
     *
     * @return Etudiant
     */
    public function setNumeroEtudiant($numeroEtudiant)
    {
        $this->numeroEtudiant = $numeroEtudiant;

        return $this;
    }

    /**
     * Get numeroEtudiant.
     *
     * @return int
     */
    public function getNumeroEtudiant()
    {
        return $this->numeroEtudiant;
    }

    /**
     * Set mailEtudiant.
     *
     * @param string $mailEtudiant
     *
     * @return Etudiant
     */
    public function setMailEtudiant($mailEtudiant)
    {
        $this->mailEtudiant = $mailEtudiant;

        return $this;
    }

    /**
     * Get mailEtudiant.
     *
     * @return string
     */
    public function getMailEtudiant()
    {
        return $this->mailEtudiant;
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->diplome;
    }

    /**
<<<<<<< HEAD
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


=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
