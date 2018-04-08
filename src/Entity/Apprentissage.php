<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Apprentissage
 *
 * @ORM\Table(name="Apprentissage", indexes={@ORM\Index(name="fk_Apprentissage_Gratification1_idx", columns={"idGratification"}), @ORM\Index(name="fk_Apprentissage_Specialite1_idx", columns={"idSpecialite"}), @ORM\Index(name="fk_Apprentissage_Etudiant1_idx", columns={"idPersonneEtudiant", "idEtudiant"}), @ORM\Index(name="fk_Apprentissage_Etablissement1_idx", columns={"idEtablissement"})})
 * @ORM\Entity
 */
class Apprentissage
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
     * @ORM\Column(name="dateDebutApprentissage", type="date", nullable=false)
     */
    private $datedebutapprentissage;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinApprentissage", type="date", nullable=true)
     */
    private $datefinapprentissage;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeApprentissageAnnes", type="integer", nullable=false, options={"comment"="1 an, 3 ans, etc."})
     */
    private $dureeapprentissageannes;

    /**
     * @var bool
     *
     * @ORM\Column(name="etranger", type="boolean", nullable=false)
     */
    private $etranger;

    /**
     * @var string|null
     *
     * @ORM\Column(name="detailsApprentissage", type="text", length=65535, nullable=true)
     */
    private $detailsapprentissage;

    /**
     * @var \Etablissement
     *
     * @ORM\ManyToOne(targetEntity="Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtablissement", referencedColumnName="id")
     * })
     */
    private $idetablissement;

    /**
     * @var \Etudiant
     *
     * @ORM\ManyToOne(targetEntity="Etudiant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonneEtudiant", referencedColumnName="idPersonne"),
     *   @ORM\JoinColumn(name="idEtudiant", referencedColumnName="id")
     * })
     */
    private $idpersonneetudiant;

    /**
     * @var \Gratification
     *
     * @ORM\ManyToOne(targetEntity="Gratification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGratification", referencedColumnName="id")
     * })
     */
    private $idgratification;

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
     * @return \DateTime
     */
    public function getDatedebutapprentissage(): \DateTime
    {
        return $this->datedebutapprentissage;
    }

    /**
     * @param \DateTime $datedebutapprentissage
     */
    public function setDatedebutapprentissage(\DateTime $datedebutapprentissage): void
    {
        $this->datedebutapprentissage = $datedebutapprentissage;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatefinapprentissage(): ?\DateTime
    {
        return $this->datefinapprentissage;
    }

    /**
     * @param \DateTime|null $datefinapprentissage
     */
    public function setDatefinapprentissage(?\DateTime $datefinapprentissage): void
    {
        $this->datefinapprentissage = $datefinapprentissage;
    }

    /**
     * @return int
     */
    public function getDureeapprentissageannes(): int
    {
        return $this->dureeapprentissageannes;
    }

    /**
     * @param int $dureeapprentissageannes
     */
    public function setDureeapprentissageannes(int $dureeapprentissageannes): void
    {
        $this->dureeapprentissageannes = $dureeapprentissageannes;
    }

    /**
     * @return bool
     */
    public function isEtranger(): bool
    {
        return $this->etranger;
    }

    /**
     * @param bool $etranger
     */
    public function setEtranger(bool $etranger): void
    {
        $this->etranger = $etranger;
    }

    /**
     * @return null|string
     */
    public function getDetailsapprentissage(): ?string
    {
        return $this->detailsapprentissage;
    }

    /**
     * @param null|string $detailsapprentissage
     */
    public function setDetailsapprentissage(?string $detailsapprentissage): void
    {
        $this->detailsapprentissage = $detailsapprentissage;
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
     * @return \Etudiant
     */
    public function getIdpersonneetudiant(): \Etudiant
    {
        return $this->idpersonneetudiant;
    }

    /**
     * @param \Etudiant $idpersonneetudiant
     */
    public function setIdpersonneetudiant(\Etudiant $idpersonneetudiant): void
    {
        $this->idpersonneetudiant = $idpersonneetudiant;
    }

    /**
     * @return \Gratification
     */
    public function getIdgratification(): \Gratification
    {
        return $this->idgratification;
    }

    /**
     * @param \Gratification $idgratification
     */
    public function setIdgratification(\Gratification $idgratification): void
    {
        $this->idgratification = $idgratification;
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



}
