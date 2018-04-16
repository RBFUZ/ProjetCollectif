<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Conference
 *
<<<<<<< HEAD
 * @ORM\Table(name="Conference", indexes={@ORM\Index(name="fk_Conference_Etablissement1_idx", columns={"idEtablissement"})})
=======
 * @ORM\Table(name="conference", indexes={@ORM\Index(name="fk_Conference_Etablissement1_idx", columns={"id_etablissement"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
 */
class Conference
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
<<<<<<< HEAD
     * @ORM\Column(name="dateConference", type="date", nullable=false)
     */
    private $dateconference;
=======
     * @ORM\Column(name="date_conference", type="date", nullable=false)
     */
    private $dateConference;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \DateTime|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="heureDebutConference", type="time", nullable=true)
     */
    private $heuredebutconference;
=======
     * @ORM\Column(name="heure_debut_conference", type="time", nullable=true)
     */
    private $heureDebutConference;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \DateTime|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="heureFinConference", type="time", nullable=true)
     */
    private $heurefinconference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujetConference", type="string", length=255, nullable=true)
     */
    private $sujetconference;

    /**
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtablissement", referencedColumnName="id")
     * })
     */
    private $idetablissement;
=======
     * @ORM\Column(name="heure_fin_conference", type="time", nullable=true)
     */
    private $heureFinConference;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet_conference", type="string", length=255, nullable=false)
     */
    private $sujetConference;

    /**
     * @var bool
     *
     * @ORM\Column(name="annulee", type="boolean", nullable=false)
     */
    private $annulee;

    /**
     * @var \App\Entity\Etablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id")
     * })
     */
    private $idEtablissement;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
<<<<<<< HEAD
     * @ORM\ManyToMany(targetEntity="Contactetablissement", inversedBy="idconference")
     * @ORM\JoinTable(name="participeconference",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idConference", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idContactEtablissement", referencedColumnName="id"),
     *     @ORM\JoinColumn(name="idPersonneContactEtablissement", referencedColumnName="idPersonne")
     *   }
     * )
     */
    private $idcontactetablissement;
=======
     * @ORM\ManyToMany(targetEntity="App\Entity\ContactEtablissement", inversedBy="idConference")
     * @ORM\JoinTable(name="participe_conference",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_conference", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_contact_etablissement", referencedColumnName="id"),
     *     @ORM\JoinColumn(name="id_personne_contact_etablissement", referencedColumnName="id_personne")
     *   }
     * )
     */
    private $idContactEtablissement;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * Constructor
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->idcontactetablissement = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
=======
        $this->idContactEtablissement = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return \DateTime
     */
    public function getDateconference(): \DateTime
    {
        return $this->dateconference;
    }

    /**
     * @param \DateTime $dateconference
     */
    public function setDateconference(\DateTime $dateconference): void
    {
        $this->dateconference = $dateconference;
    }

    /**
     * @return \DateTime|null
     */
    public function getHeuredebutconference(): ?\DateTime
    {
        return $this->heuredebutconference;
    }

    /**
     * @param \DateTime|null $heuredebutconference
     */
    public function setHeuredebutconference(?\DateTime $heuredebutconference): void
    {
        $this->heuredebutconference = $heuredebutconference;
    }

    /**
     * @return \DateTime|null
     */
    public function getHeurefinconference(): ?\DateTime
    {
        return $this->heurefinconference;
    }

    /**
     * @param \DateTime|null $heurefinconference
     */
    public function setHeurefinconference(?\DateTime $heurefinconference): void
    {
        $this->heurefinconference = $heurefinconference;
    }

    /**
     * @return null|string
     */
    public function getSujetconference(): ?string
    {
        return $this->sujetconference;
    }

    /**
     * @param null|string $sujetconference
     */
    public function setSujetconference(?string $sujetconference): void
    {
        $this->sujetconference = $sujetconference;
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdcontactetablissement(): \Doctrine\Common\Collections\Collection
    {
        return $this->idcontactetablissement;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idcontactetablissement
     */
    public function setIdcontactetablissement(\Doctrine\Common\Collections\Collection $idcontactetablissement): void
    {
        $this->idcontactetablissement = $idcontactetablissement;
    }



=======
     * Set dateConference.
     *
     * @param \DateTime $dateConference
     *
     * @return Conference
     */
    public function setDateConference($dateConference)
    {
        $this->dateConference = $dateConference;

        return $this;
    }

    /**
     * Get dateConference.
     *
     * @return \DateTime
     */
    public function getDateConference()
    {
        return $this->dateConference;
    }

    /**
     * Set heureDebutConference.
     *
     * @param \DateTime|null $heureDebutConference
     *
     * @return Conference
     */
    public function setHeureDebutConference($heureDebutConference = null)
    {
        $this->heureDebutConference = $heureDebutConference;

        return $this;
    }

    /**
     * Get heureDebutConference.
     *
     * @return \DateTime|null
     */
    public function getHeureDebutConference()
    {
        return $this->heureDebutConference;
    }

    /**
     * Set heureFinConference.
     *
     * @param \DateTime|null $heureFinConference
     *
     * @return Conference
     */
    public function setHeureFinConference($heureFinConference = null)
    {
        $this->heureFinConference = $heureFinConference;

        return $this;
    }

    /**
     * Get heureFinConference.
     *
     * @return \DateTime|null
     */
    public function getHeureFinConference()
    {
        return $this->heureFinConference;
    }

    /**
     * Set sujetConference.
     *
     * @param string $sujetConference
     *
     * @return Conference
     */
    public function setSujetConference($sujetConference)
    {
        $this->sujetConference = $sujetConference;

        return $this;
    }

    /**
     * Get sujetConference.
     *
     * @return string
     */
    public function getSujetConference()
    {
        return $this->sujetConference;
    }

    /**
     * Set annulee.
     *
     * @param bool $annulee
     *
     * @return Conference
     */
    public function setAnnulee($annulee)
    {
        $this->annulee = $annulee;

        return $this;
    }

    /**
     * Get annulee.
     *
     * @return bool
     */
    public function getAnnulee()
    {
        return $this->annulee;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return Conference
     */
    public function setIdEtablissement(\App\Entity\Etablissement $idEtablissement = null)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement.
     *
     * @return \App\Entity\Etablissement|null
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }

    /**
     * Add idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement $idContactEtablissement
     *
     * @return Conference
     */
    public function addIdContactEtablissement(\App\Entity\ContactEtablissement $idContactEtablissement)
    {
        $this->idContactEtablissement[] = $idContactEtablissement;

        return $this;
    }

    /**
     * Remove idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement $idContactEtablissement
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdContactEtablissement(\App\Entity\ContactEtablissement $idContactEtablissement)
    {
        return $this->idContactEtablissement->removeElement($idContactEtablissement);
    }

    /**
     * Get idContactEtablissement.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdContactEtablissement()
    {
        return $this->idContactEtablissement;
    }
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
