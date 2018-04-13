<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConseilPerfectionnement
 *
 * @ORM\Table(name="conseil_perfectionnement", indexes={@ORM\Index(name="fk_ConseilPerfectionnement_Departement1_idx", columns={"id_departement"})})
 * @ORM\Entity
 */
class ConseilPerfectionnement
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
     * @ORM\Column(name="date_conseil_perfectionnement", type="date", nullable=false)
     */
    private $dateConseilPerfectionnement;

    /**
     * @var \App\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departement", referencedColumnName="id")
     * })
     */
    private $idDepartement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\ContactEtablissement", inversedBy="idConseilPerfectionnement")
     * @ORM\JoinTable(name="contact_participe_conseil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_conseil_perfectionnement", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_personne_contact_etablissement", referencedColumnName="id_personne"),
     *     @ORM\JoinColumn(name="id_contact_etablissement", referencedColumnName="id")
     *   }
     * )
     */
    private $idPersonneContactEtablissement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Etudiant", inversedBy="idConseilPerfectionnement")
     * @ORM\JoinTable(name="etudiant_participe_conseil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_conseil_perfectionnement", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_personne_etudiant", referencedColumnName="id_personne"),
     *     @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     *   }
     * )
     */
    private $idPersonneEtudiant;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\PersonnelPolytech", inversedBy="idConseilPerfectionnement")
     * @ORM\JoinTable(name="personnel_participe_conseil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_conseil_perfectionnement", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_personne_personnel_polytech", referencedColumnName="id_personne"),
     *     @ORM\JoinColumn(name="id_personnel_polytech", referencedColumnName="id")
     *   }
     * )
     */
    private $idPersonnePersonnelPolytech;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPersonneContactEtablissement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPersonneEtudiant = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPersonnePersonnelPolytech = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set dateConseilPerfectionnement.
     *
     * @param \DateTime $dateConseilPerfectionnement
     *
     * @return ConseilPerfectionnement
     */
    public function setDateConseilPerfectionnement($dateConseilPerfectionnement)
    {
        $this->dateConseilPerfectionnement = $dateConseilPerfectionnement;

        return $this;
    }

    /**
     * Get dateConseilPerfectionnement.
     *
     * @return \DateTime
     */
    public function getDateConseilPerfectionnement()
    {
        return $this->dateConseilPerfectionnement;
    }

    /**
     * Set idDepartement.
     *
     * @param \App\Entity\Departement|null $idDepartement
     *
     * @return ConseilPerfectionnement
     */
    public function setIdDepartement(\App\Entity\Departement $idDepartement = null)
    {
        $this->idDepartement = $idDepartement;

        return $this;
    }

    /**
     * Get idDepartement.
     *
     * @return \App\Entity\Departement|null
     */
    public function getIdDepartement()
    {
        return $this->idDepartement;
    }

    /**
     * Add idPersonneContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement $idPersonneContactEtablissement
     *
     * @return ConseilPerfectionnement
     */
    public function addIdPersonneContactEtablissement(\App\Entity\ContactEtablissement $idPersonneContactEtablissement)
    {
        $this->idPersonneContactEtablissement[] = $idPersonneContactEtablissement;

        return $this;
    }

    /**
     * Remove idPersonneContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement $idPersonneContactEtablissement
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdPersonneContactEtablissement(\App\Entity\ContactEtablissement $idPersonneContactEtablissement)
    {
        return $this->idPersonneContactEtablissement->removeElement($idPersonneContactEtablissement);
    }

    /**
     * Get idPersonneContactEtablissement.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPersonneContactEtablissement()
    {
        return $this->idPersonneContactEtablissement;
    }

    /**
     * Add idPersonneEtudiant.
     *
     * @param \App\Entity\Etudiant $idPersonneEtudiant
     *
     * @return ConseilPerfectionnement
     */
    public function addIdPersonneEtudiant(\App\Entity\Etudiant $idPersonneEtudiant)
    {
        $this->idPersonneEtudiant[] = $idPersonneEtudiant;

        return $this;
    }

    /**
     * Remove idPersonneEtudiant.
     *
     * @param \App\Entity\Etudiant $idPersonneEtudiant
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdPersonneEtudiant(\App\Entity\Etudiant $idPersonneEtudiant)
    {
        return $this->idPersonneEtudiant->removeElement($idPersonneEtudiant);
    }

    /**
     * Get idPersonneEtudiant.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPersonneEtudiant()
    {
        return $this->idPersonneEtudiant;
    }

    /**
     * Add idPersonnePersonnelPolytech.
     *
     * @param \App\Entity\PersonnelPolytech $idPersonnePersonnelPolytech
     *
     * @return ConseilPerfectionnement
     */
    public function addIdPersonnePersonnelPolytech(\App\Entity\PersonnelPolytech $idPersonnePersonnelPolytech)
    {
        $this->idPersonnePersonnelPolytech[] = $idPersonnePersonnelPolytech;

        return $this;
    }

    /**
     * Remove idPersonnePersonnelPolytech.
     *
     * @param \App\Entity\PersonnelPolytech $idPersonnePersonnelPolytech
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdPersonnePersonnelPolytech(\App\Entity\PersonnelPolytech $idPersonnePersonnelPolytech)
    {
        return $this->idPersonnePersonnelPolytech->removeElement($idPersonnePersonnelPolytech);
    }

    /**
     * Get idPersonnePersonnelPolytech.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPersonnePersonnelPolytech()
    {
        return $this->idPersonnePersonnelPolytech;
    }
}
