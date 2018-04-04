<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Forum
 *
 * @ORM\Table(name="Forum")
 * @ORM\Entity
 */
class Forum
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
     * @ORM\Column(name="dateDebutForum", type="datetime", nullable=false)
     */
    private $datedebutforum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateFinForum", type="datetime", nullable=true)
     */
    private $datefinforum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaireForum", type="string", length=255, nullable=true)
     */
    private $commentaireforum;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Contactetablissement", mappedBy="idforum")
     */
    private $idcontactetablissement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idcontactetablissement = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return \DateTime
     */
    public function getDatedebutforum(): \DateTime
    {
        return $this->datedebutforum;
    }

    /**
     * @param \DateTime $datedebutforum
     */
    public function setDatedebutforum(\DateTime $datedebutforum): void
    {
        $this->datedebutforum = $datedebutforum;
    }

    /**
     * @return \DateTime|null
     */
    public function getDatefinforum(): ?\DateTime
    {
        return $this->datefinforum;
    }

    /**
     * @param \DateTime|null $datefinforum
     */
    public function setDatefinforum(?\DateTime $datefinforum): void
    {
        $this->datefinforum = $datefinforum;
    }

    /**
     * @return null|string
     */
    public function getCommentaireforum(): ?string
    {
        return $this->commentaireforum;
    }

    /**
     * @param null|string $commentaireforum
     */
    public function setCommentaireforum(?string $commentaireforum): void
    {
        $this->commentaireforum = $commentaireforum;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdcontactetablissement(): \Doctrine\Common\Collections\Collection
    {
        return $this->idcontactetablissement;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idcontactetablissement
     */
    public function setIdcontactetablissement(\Doctrine\Common\Collections\Collection $idcontactetablissement): void
    {
        $this->idcontactetablissement = $idcontactetablissement;
    }


}
