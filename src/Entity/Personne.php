<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="fk_Personne_Adresse1_idx", columns={"id_adresse"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonneRepository")
 */
class Personne
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=false, options={"default"="Nom"})
     */
    private $nom = 'Nom';

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false, options={"default"="Prénom"})
     */
    private $prenom = 'Prénom';

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_mail_perso", type="string", length=100, nullable=true)
     */
    private $adresseMailPerso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_sexe", type="string", length=1, nullable=true, options={"comment"="M, F, etc."})
     */
    private $codeSexe;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationalite", type="string", length=100, nullable=true)
     */
    private $nationalite;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Telephone", inversedBy="idPersonne")
     * @ORM\JoinTable(name="possede_telephone",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_personne", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_telephone", referencedColumnName="id")
     *   }
     * )
     */
    private $idTelephone;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTelephone = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom.
     *
     * @param string $nom
     *
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresseMailPerso.
     *
     * @param string|null $adresseMailPerso
     *
     * @return Personne
     */
    public function setAdresseMailPerso($adresseMailPerso = null)
    {
        $this->adresseMailPerso = $adresseMailPerso;

        return $this;
    }

    /**
     * Get adresseMailPerso.
     *
     * @return string|null
     */
    public function getAdresseMailPerso()
    {
        return $this->adresseMailPerso;
    }

    /**
     * Set codeSexe.
     *
     * @param string|null $codeSexe
     *
     * @return Personne
     */
    public function setCodeSexe($codeSexe = null)
    {
        $this->codeSexe = $codeSexe;

        return $this;
    }

    /**
     * Get codeSexe.
     *
     * @return string|null
     */
    public function getCodeSexe()
    {
        return $this->codeSexe;
    }

    /**
     * Set dateNaissance.
     *
     * @param \DateTime|null $dateNaissance
     *
     * @return Personne
     */
    public function setDateNaissance($dateNaissance = null)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance.
     *
     * @return \DateTime|null
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set nationalite.
     *
     * @param string|null $nationalite
     *
     * @return Personne
     */
    public function setNationalite($nationalite = null)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite.
     *
     * @return string|null
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set idAdresse.
     *
     * @param \App\Entity\Adresse|null $idAdresse
     *
     * @return Personne
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
     * Add idTelephone.
     *
     * @param \App\Entity\Telephone $idTelephone
     *
     * @return Personne
     */
    public function addIdTelephone(\App\Entity\Telephone $idTelephone)
    {
        $this->idTelephone[] = $idTelephone;

        return $this;
    }

    /**
     * Remove idTelephone.
     *
     * @param \App\Entity\Telephone $idTelephone
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdTelephone(\App\Entity\Telephone $idTelephone)
    {
        return $this->idTelephone->removeElement($idTelephone);
    }

    /**
     * Get idTelephone.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTelephone()
    {
        return $this->idTelephone;
    }
}
