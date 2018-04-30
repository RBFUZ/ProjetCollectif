<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonnelPolytech
 *
 * @ORM\Table(name="personnel_polytech", indexes={@ORM\Index(name="fk_PersonnelPolytech_Personne1_idx", columns={"id_personne"}), @ORM\Index(name="fk_PersonnelPolytech_Departement1_idx", columns={"id_departement"})})
 * @ORM\Entity
 */
class PersonnelPolytech
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
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255, nullable=false, options={"default"="Personnel Polytech"})
     */
    private $fonction = 'Personnel Polytech';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_universitaire", type="string", length=100, nullable=true)
     */
    private $mailUniversitaire;

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
     * @ORM\ManyToMany(targetEntity="App\Entity\ConseilPerfectionnement", mappedBy="idPersonnePersonnelPolytech")
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
     * @return PersonnelPolytech
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
     * Set fonction.
     *
     * @param string $fonction
     *
     * @return PersonnelPolytech
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction.
     *
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * Set mailUniversitaire.
     *
     * @param string|null $mailUniversitaire
     *
     * @return PersonnelPolytech
     */
    public function setMailUniversitaire($mailUniversitaire = null)
    {
        $this->mailUniversitaire = $mailUniversitaire;

        return $this;
    }

    /**
     * Get mailUniversitaire.
     *
     * @return string|null
     */
    public function getMailUniversitaire()
    {
        return $this->mailUniversitaire;
    }

    /**
     * Set idDepartement.
     *
     * @param \App\Entity\Departement|null $idDepartement
     *
     * @return PersonnelPolytech
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
     * Set idPersonne.
     *
     * @param \App\Entity\Personne $idPersonne
     *
     * @return PersonnelPolytech
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
     * @return PersonnelPolytech
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
