<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeForum
 *
 * @ORM\Table(name="type_forum")
 * @ORM\Entity
 */
class TypeForum
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
     * @ORM\Column(name="libelle_type_forum", type="string", length=45, nullable=false)
     */
    private $libelleTypeForum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_type_forum", type="string", length=255, nullable=true)
     */
    private $commentaireTypeForum;



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
     * Set libelleTypeForum.
     *
     * @param string $libelleTypeForum
     *
     * @return TypeForum
     */
    public function setLibelleTypeForum($libelleTypeForum)
    {
        $this->libelleTypeForum = $libelleTypeForum;

        return $this;
    }

    /**
     * Get libelleTypeForum.
     *
     * @return string
     */
    public function getLibelleTypeForum()
    {
        return $this->libelleTypeForum;
    }

    /**
     * Set commentaireTypeForum.
     *
     * @param string|null $commentaireTypeForum
     *
     * @return TypeForum
     */
    public function setCommentaireTypeForum($commentaireTypeForum = null)
    {
        $this->commentaireTypeForum = $commentaireTypeForum;

        return $this;
    }

    /**
     * Get commentaireTypeForum.
     *
     * @return string|null
     */
    public function getCommentaireTypeForum()
    {
        return $this->commentaireTypeForum;
    }
}
