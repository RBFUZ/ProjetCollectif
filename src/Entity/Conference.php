<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conference
 *
 * @ORM\Table(name="conference", indexes={@ORM\Index(name="fk_Conference_Etablissement1_idx", columns={"id_etablissement"})})
 * @ORM\Entity(repositoryClass="App\Repository\ConferenceRepository")
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
     * @var string
     *
     * @ORM\Column(name="sujet_conference", type="string", length=255, nullable=false, options={"default"="Inconnu"})
     */
    private $sujetConference = 'Inconnu';

    /**
     * @var bool
     *
     * @ORM\Column(name="annulee", type="boolean", nullable=false)
     */
    private $annulee = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_conference", type="date", nullable=false, options={"default"="1900-01-01"})
     */
    private $dateConference = '1900-01-01';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_debut_conference", type="time", nullable=true)
     */
    private $heureDebutConference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_fin_conference", type="time", nullable=true)
     */
    private $heureFinConference;

    /**
     * @var \App\Entity\Etablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id")
     * })
     */
    private $idEtablissement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idContactEtablissement = new \Doctrine\Common\Collections\ArrayCollection();
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
}
