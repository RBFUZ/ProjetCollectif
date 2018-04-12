<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forum
 *
 * @ORM\Table(name="forum", indexes={@ORM\Index(name="fk_Forum_TypeForum1_idx", columns={"id_type_forum"}), @ORM\Index(name="fk_Forum_Adresse1_idx", columns={"id_adresse"})})
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
     * @var string
     *
     * @ORM\Column(name="nom_forum", type="string", length=45, nullable=false)
     */
    private $nomForum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_forum", type="datetime", nullable=false)
     */
    private $dateDebutForum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin_forum", type="datetime", nullable=true)
     */
    private $dateFinForum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_forum", type="string", length=255, nullable=true)
     */
    private $commentaireForum;

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
     * @var \App\Entity\TypeForum
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\TypeForum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_forum", referencedColumnName="id")
     * })
     */
    private $idTypeForum;



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
     * Set nomForum.
     *
     * @param string $nomForum
     *
     * @return Forum
     */
    public function setNomForum($nomForum)
    {
        $this->nomForum = $nomForum;

        return $this;
    }

    /**
     * Get nomForum.
     *
     * @return string
     */
    public function getNomForum()
    {
        return $this->nomForum;
    }

    /**
     * Set dateDebutForum.
     *
     * @param \DateTime $dateDebutForum
     *
     * @return Forum
     */
    public function setDateDebutForum($dateDebutForum)
    {
        $this->dateDebutForum = $dateDebutForum;

        return $this;
    }

    /**
     * Get dateDebutForum.
     *
     * @return \DateTime
     */
    public function getDateDebutForum()
    {
        return $this->dateDebutForum;
    }

    /**
     * Set dateFinForum.
     *
     * @param \DateTime|null $dateFinForum
     *
     * @return Forum
     */
    public function setDateFinForum($dateFinForum = null)
    {
        $this->dateFinForum = $dateFinForum;

        return $this;
    }

    /**
     * Get dateFinForum.
     *
     * @return \DateTime|null
     */
    public function getDateFinForum()
    {
        return $this->dateFinForum;
    }

    /**
     * Set commentaireForum.
     *
     * @param string|null $commentaireForum
     *
     * @return Forum
     */
    public function setCommentaireForum($commentaireForum = null)
    {
        $this->commentaireForum = $commentaireForum;

        return $this;
    }

    /**
     * Get commentaireForum.
     *
     * @return string|null
     */
    public function getCommentaireForum()
    {
        return $this->commentaireForum;
    }

    /**
     * Set idAdresse.
     *
     * @param \App\Entity\Adresse|null $idAdresse
     *
     * @return Forum
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
     * Set idTypeForum.
     *
     * @param \App\Entity\TypeForum|null $idTypeForum
     *
     * @return Forum
     */
    public function setIdTypeForum(\App\Entity\TypeForum $idTypeForum = null)
    {
        $this->idTypeForum = $idTypeForum;

        return $this;
    }

    /**
     * Get idTypeForum.
     *
     * @return \App\Entity\TypeForum|null
     */
    public function getIdTypeForum()
    {
        return $this->idTypeForum;
    }
}
