<?php

<<<<<<< HEAD

namespace App\Entity;
=======
namespace App\Entity;

>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
<<<<<<< HEAD
 * @ORM\Table(name="Personne", indexes={@ORM\Index(name="fk_Personne_Adresse1_idx", columns={"idAdresse"})})
=======
 * @ORM\Table(name="personne", indexes={@ORM\Index(name="fk_Personne_Adresse1_idx", columns={"id_adresse"})})
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
 * @ORM\Entity
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="adresseMailPerso", type="string", length=100, nullable=true)
     */
    private $adressemailperso;
=======
     * @ORM\Column(name="adresse_mail_perso", type="string", length=100, nullable=true)
     */
    private $adresseMailPerso;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
<<<<<<< HEAD
     * @ORM\Column(name="codeSexe", type="string", length=1, nullable=true)
     */
    private $codesexe;
=======
     * @ORM\Column(name="code_sexe", type="string", length=1, nullable=true, options={"comment"="M, F, etc."})
     */
    private $codeSexe;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationalite", type="string", length=100, nullable=true)
     */
    private $nationalite;

    /**
<<<<<<< HEAD
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdresse", referencedColumnName="id")
     * })
     */
    private $idadresse;
=======
     * @var \App\Entity\Adresse
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_adresse", referencedColumnName="id")
     * })
     */
    private $idAdresse;
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
<<<<<<< HEAD
     * @ORM\ManyToMany(targetEntity="Telephone", inversedBy="idpersonne")
     * @ORM\JoinTable(name="possedetelephone",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idPersonne", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idTelephone", referencedColumnName="id")
     *   }
     * )
     */
    private $idtelephone;
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131

    /**
     * Constructor
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->idtelephone = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
=======
        $this->idTelephone = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return string
     */
    public function getNom(): string
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->nom;
    }

    /**
<<<<<<< HEAD
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->prenom;
    }

    /**
<<<<<<< HEAD
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return null|string
     */
    public function getAdressemailperso(): ?string
    {
        return $this->adressemailperso;
    }

    /**
     * @param null|string $adressemailperso
     */
    public function setAdressemailperso(?string $adressemailperso): void
    {
        $this->adressemailperso = $adressemailperso;
    }

    /**
     * @return null|string
     */
    public function getCodesexe(): ?string
    {
        return $this->codesexe;
    }

    /**
     * @param null|string $codesexe
     */
    public function setCodesexe(?string $codesexe): void
    {
        $this->codesexe = $codesexe;
    }

    /**
     * @return null|string
     */
    public function getNationalite(): ?string
=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
    {
        return $this->nationalite;
    }

    /**
<<<<<<< HEAD
     * @param null|string $nationalite
     */
    public function setNationalite(?string $nationalite): void
    {
        $this->nationalite = $nationalite;
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
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdtelephone(): \Doctrine\Common\Collections\Collection
    {
        return $this->idtelephone;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idtelephone
     */
    public function setIdtelephone(\Doctrine\Common\Collections\Collection $idtelephone): void
    {
        $this->idtelephone = $idtelephone;
    }


=======
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
>>>>>>> 6c535d13996db2729651e6874ed0fbfb63ace131
}
