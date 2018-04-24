<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactEtablissement
 *
 * @ORM\Table(name="contact_etablissement", indexes={@ORM\Index(name="fk_ContactEtablissement_Personne1_idx", columns={"id_personne"})})
 * @ORM\Entity
 */
class ContactEtablissement
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
     * @var string|null
     *
     * @ORM\Column(name="mail_professionnel", type="string", length=100, nullable=true)
     */
    private $mailProfessionnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=45, nullable=true)
     */
    private $fax;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\ConseilPerfectionnement", mappedBy="idPersonneContactEtablissement")
     */
    private $idConseilPerfectionnement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Conference", mappedBy="idContactEtablissement")
     */
    private $idConference;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idConseilPerfectionnement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idConference = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set id.
     *
     * @param int $id
     *
     * @return ContactEtablissement
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
     * Set mailProfessionnel.
     *
     * @param string|null $mailProfessionnel
     *
     * @return ContactEtablissement
     */
    public function setMailProfessionnel($mailProfessionnel = null)
    {
        $this->mailProfessionnel = $mailProfessionnel;

        return $this;
    }

    /**
     * Get mailProfessionnel.
     *
     * @return string|null
     */
    public function getMailProfessionnel()
    {
        return $this->mailProfessionnel;
    }

    /**
     * Set fax.
     *
     * @param string|null $fax
     *
     * @return ContactEtablissement
     */
    public function setFax($fax = null)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax.
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set idPersonne.
     *
     * @param \App\Entity\Personne $idPersonne
     *
     * @return ContactEtablissement
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
     * Add idConseilPerfectionnement.
     *
     * @param \App\Entity\ConseilPerfectionnement $idConseilPerfectionnement
     *
     * @return ContactEtablissement
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

    /**
     * Add idConference.
     *
     * @param \App\Entity\Conference $idConference
     *
     * @return ContactEtablissement
     */
    public function addIdConference(\App\Entity\Conference $idConference)
    {
        $this->idConference[] = $idConference;

        return $this;
    }

    /**
     * Remove idConference.
     *
     * @param \App\Entity\Conference $idConference
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdConference(\App\Entity\Conference $idConference)
    {
        return $this->idConference->removeElement($idConference);
    }

    /**
     * Get idConference.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdConference()
    {
        return $this->idConference;
    }
}
