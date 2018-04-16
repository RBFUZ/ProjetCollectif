<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Contactetablissement
 *
 * @ORM\Table(name="ContactEtablissement", indexes={@ORM\Index(name="fk_ContactEtablissement_Personne1_idx", columns={"idPersonne"})})
 * @ORM\Entity
 */
class Contactetablissement
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
     * @ORM\Column(name="mailProfessionnel", type="string", length=100, nullable=true)
     */
    private $mailprofessionnel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=45, nullable=true)
     */
    private $fax;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Conseilperfectionnement", mappedBy="idpersonnecontactetablissement")
     */
    private $idconseilperfectionnement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Conference", mappedBy="idcontactetablissement")
     */
    private $idconference;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Forum", inversedBy="idcontactetablissement")
     * @ORM\JoinTable(name="participeforum",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idContactEtablissement", referencedColumnName="id"),
     *     @ORM\JoinColumn(name="idPersonneContactEtablissement", referencedColumnName="idPersonne")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idForum", referencedColumnName="id")
     *   }
     * )
     */
    private $idforum;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idconseilperfectionnement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idconference = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idforum = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return null|string
     */
    public function getMailprofessionnel(): ?string
    {
        return $this->mailprofessionnel;
    }

    /**
     * @param null|string $mailprofessionnel
     */
    public function setMailprofessionnel(?string $mailprofessionnel): void
    {
        $this->mailprofessionnel = $mailprofessionnel;
    }

    /**
     * @return null|string
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param null|string $fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
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

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdconference(): \Doctrine\Common\Collections\Collection
    {
        return $this->idconference;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idconference
     */
    public function setIdconference(\Doctrine\Common\Collections\Collection $idconference): void
    {
        $this->idconference = $idconference;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdforum(): \Doctrine\Common\Collections\Collection
    {
        return $this->idforum;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idforum
     */
    public function setIdforum(\Doctrine\Common\Collections\Collection $idforum): void
    {
        $this->idforum = $idforum;
    }



}
