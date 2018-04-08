<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="Personne", indexes={@ORM\Index(name="fk_Personne_Adresse1_idx", columns={"idAdresse"})})
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
     * @ORM\Column(name="adresseMailPerso", type="string", length=100, nullable=true)
     */
    private $adressemailperso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codeSexe", type="string", length=1, nullable=true)
     */
    private $codesexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationalite", type="string", length=100, nullable=true)
     */
    private $nationalite;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAdresse", referencedColumnName="id")
     * })
     */
    private $idadresse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idtelephone = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
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
    {
        return $this->nom;
    }

    /**
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
    {
        return $this->prenom;
    }

    /**
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
    {
        return $this->nationalite;
    }

    /**
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


}
