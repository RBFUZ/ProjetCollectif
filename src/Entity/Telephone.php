<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 *
 * @ORM\Table(name="Telephone", uniqueConstraints={@ORM\UniqueConstraint(name="numTelephone_UNIQUE", columns={"numTelephone"})})
 * @ORM\Entity
 */
class Telephone
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
     * @ORM\Column(name="numTelephone", type="string", length=45, nullable=false)
     */
    private $numtelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="typeTelephone", type="string", length=45, nullable=false)
     */
    private $typetelephone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireTelephone", type="string", length=100, nullable=true)
     */
    private $commentairetelephone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Personne", mappedBy="idtelephone")
     */
    private $idpersonne;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idpersonne = new \Doctrine\Common\Collections\ArrayCollection();
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
    public function getNumtelephone(): string
    {
        return $this->numtelephone;
    }

    /**
     * @param string $numtelephone
     */
    public function setNumtelephone(string $numtelephone): void
    {
        $this->numtelephone = $numtelephone;
    }

    /**
     * @return string
     */
    public function getTypetelephone(): string
    {
        return $this->typetelephone;
    }

    /**
     * @param string $typetelephone
     */
    public function setTypetelephone(string $typetelephone): void
    {
        $this->typetelephone = $typetelephone;
    }

    /**
     * @return null|string
     */
    public function getCommentairetelephone(): ?string
    {
        return $this->commentairetelephone;
    }

    /**
     * @param null|string $commentairetelephone
     */
    public function setCommentairetelephone(?string $commentairetelephone): void
    {
        $this->commentairetelephone = $commentairetelephone;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdpersonne(): \Doctrine\Common\Collections\Collection
    {
        return $this->idpersonne;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idpersonne
     */
    public function setIdpersonne(\Doctrine\Common\Collections\Collection $idpersonne): void
    {
        $this->idpersonne = $idpersonne;
    }


}
