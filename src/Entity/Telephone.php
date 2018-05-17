<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telephone
 *
 * @ORM\Table(name="telephone", uniqueConstraints={@ORM\UniqueConstraint(name="numTelephone_UNIQUE", columns={"num_telephone"})})
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
     * @ORM\Column(name="num_telephone", type="string", length=45, nullable=false, options={"default"="00 00 00 00 00"})
     */
    private $numTelephone = '00 00 00 00 00';

    /**
     * @var string
     *
     * @ORM\Column(name="type_telephone", type="string", length=45, nullable=false, options={"default"="Fixe"})
     */
    private $typeTelephone = 'Fixe';

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_telephone", type="string", length=255, nullable=true)
     */
    private $commentaireTelephone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Personne", mappedBy="idTelephone")
     */
    private $idPersonne;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPersonne = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set numTelephone.
     *
     * @param string $numTelephone
     *
     * @return Telephone
     */
    public function setNumTelephone($numTelephone)
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }

    /**
     * Get numTelephone.
     *
     * @return string
     */
    public function getNumTelephone()
    {
        return $this->numTelephone;
    }

    /**
     * Set typeTelephone.
     *
     * @param string $typeTelephone
     *
     * @return Telephone
     */
    public function setTypeTelephone($typeTelephone)
    {
        $this->typeTelephone = $typeTelephone;

        return $this;
    }

    /**
     * Get typeTelephone.
     *
     * @return string
     */
    public function getTypeTelephone()
    {
        return $this->typeTelephone;
    }

    /**
     * Set commentaireTelephone.
     *
     * @param string|null $commentaireTelephone
     *
     * @return Telephone
     */
    public function setCommentaireTelephone($commentaireTelephone = null)
    {
        $this->commentaireTelephone = $commentaireTelephone;

        return $this;
    }

    /**
     * Get commentaireTelephone.
     *
     * @return string|null
     */
    public function getCommentaireTelephone()
    {
        return $this->commentaireTelephone;
    }

    /**
     * Add idPersonne.
     *
     * @param \App\Entity\Personne $idPersonne
     *
     * @return Telephone
     */
    public function addIdPersonne(\App\Entity\Personne $idPersonne)
    {
        $this->idPersonne[] = $idPersonne;

        return $this;
    }

    /**
     * Remove idPersonne.
     *
     * @param \App\Entity\Personne $idPersonne
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdPersonne(\App\Entity\Personne $idPersonne)
    {
        return $this->idPersonne->removeElement($idPersonne);
    }

    /**
     * Get idPersonne.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }
}
