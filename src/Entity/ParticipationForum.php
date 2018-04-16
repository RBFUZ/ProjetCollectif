<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParticipationForum
 *
 * @ORM\Table(name="participation_forum", indexes={@ORM\Index(name="fk_ParticipeForum_Forum1_idx", columns={"id_forum"}), @ORM\Index(name="fk_ParticipationForum_Etablissement1_idx", columns={"id_etablissement"}), @ORM\Index(name="fk_ParticipeForum_ContactEtablissement1", columns={"id_contact_etablissement", "id_personne_contact_etablissement"})})
 * @ORM\Entity
 */
class ParticipationForum
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
     * @var string|null
     *
     * @ORM\Column(name="recrute_stagiaire", type="string", length=45, nullable=true)
     */
    private $recruteStagiaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recrute_diplome", type="string", length=45, nullable=true)
     */
    private $recruteDiplome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recrute_apprentis", type="string", length=45, nullable=true)
     */
    private $recruteApprentis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="niveaux_etudes_recherches", type="string", length=45, nullable=true)
     */
    private $niveauxEtudesRecherches;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filieres_recherchees", type="string", length=45, nullable=true)
     */
    private $filieresRecherchees;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire_participation", type="string", length=255, nullable=true)
     */
    private $commentaireParticipation;

    /**
     * @var \App\Entity\Etablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Etablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_etablissement", referencedColumnName="id")
     * })
     */
    private $idEtablissement;

    /**
     * @var \App\Entity\ContactEtablissement
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ContactEtablissement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contact_etablissement", referencedColumnName="id"),
     *   @ORM\JoinColumn(name="id_personne_contact_etablissement", referencedColumnName="id_personne")
     * })
     */
    private $idContactEtablissement;

    /**
     * @var \App\Entity\Forum
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Forum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forum", referencedColumnName="id")
     * })
     */
    private $idForum;



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
     * Set recruteStagiaire.
     *
     * @param string|null $recruteStagiaire
     *
     * @return ParticipationForum
     */
    public function setRecruteStagiaire($recruteStagiaire = null)
    {
        $this->recruteStagiaire = $recruteStagiaire;

        return $this;
    }

    /**
     * Get recruteStagiaire.
     *
     * @return string|null
     */
    public function getRecruteStagiaire()
    {
        return $this->recruteStagiaire;
    }

    /**
     * Set recruteDiplome.
     *
     * @param string|null $recruteDiplome
     *
     * @return ParticipationForum
     */
    public function setRecruteDiplome($recruteDiplome = null)
    {
        $this->recruteDiplome = $recruteDiplome;

        return $this;
    }

    /**
     * Get recruteDiplome.
     *
     * @return string|null
     */
    public function getRecruteDiplome()
    {
        return $this->recruteDiplome;
    }

    /**
     * Set recruteApprentis.
     *
     * @param string|null $recruteApprentis
     *
     * @return ParticipationForum
     */
    public function setRecruteApprentis($recruteApprentis = null)
    {
        $this->recruteApprentis = $recruteApprentis;

        return $this;
    }

    /**
     * Get recruteApprentis.
     *
     * @return string|null
     */
    public function getRecruteApprentis()
    {
        return $this->recruteApprentis;
    }

    /**
     * Set niveauxEtudesRecherches.
     *
     * @param string|null $niveauxEtudesRecherches
     *
     * @return ParticipationForum
     */
    public function setNiveauxEtudesRecherches($niveauxEtudesRecherches = null)
    {
        $this->niveauxEtudesRecherches = $niveauxEtudesRecherches;

        return $this;
    }

    /**
     * Get niveauxEtudesRecherches.
     *
     * @return string|null
     */
    public function getNiveauxEtudesRecherches()
    {
        return $this->niveauxEtudesRecherches;
    }

    /**
     * Set filieresRecherchees.
     *
     * @param string|null $filieresRecherchees
     *
     * @return ParticipationForum
     */
    public function setFilieresRecherchees($filieresRecherchees = null)
    {
        $this->filieresRecherchees = $filieresRecherchees;

        return $this;
    }

    /**
     * Get filieresRecherchees.
     *
     * @return string|null
     */
    public function getFilieresRecherchees()
    {
        return $this->filieresRecherchees;
    }

    /**
     * Set commentaireParticipation.
     *
     * @param string|null $commentaireParticipation
     *
     * @return ParticipationForum
     */
    public function setCommentaireParticipation($commentaireParticipation = null)
    {
        $this->commentaireParticipation = $commentaireParticipation;

        return $this;
    }

    /**
     * Get commentaireParticipation.
     *
     * @return string|null
     */
    public function getCommentaireParticipation()
    {
        return $this->commentaireParticipation;
    }

    /**
     * Set idEtablissement.
     *
     * @param \App\Entity\Etablissement|null $idEtablissement
     *
     * @return ParticipationForum
     */
    public function setIdEtablissement(\App\Entity\Etablissement $idEtablissement = null)
    {
        $this->idEtablissement = $idEtablissement;

        return $this;
    }

    /**
     * Get idEtablissement.
     *
     * @return \App\Entity\Etablissement|null
     */
    public function getIdEtablissement()
    {
        return $this->idEtablissement;
    }

    /**
     * Set idContactEtablissement.
     *
     * @param \App\Entity\ContactEtablissement|null $idContactEtablissement
     *
     * @return ParticipationForum
     */
    public function setIdContactEtablissement(\App\Entity\ContactEtablissement $idContactEtablissement = null)
    {
        $this->idContactEtablissement = $idContactEtablissement;

        return $this;
    }

    /**
     * Get idContactEtablissement.
     *
     * @return \App\Entity\ContactEtablissement|null
     */
    public function getIdContactEtablissement()
    {
        return $this->idContactEtablissement;
    }

    /**
     * Set idForum.
     *
     * @param \App\Entity\Forum|null $idForum
     *
     * @return ParticipationForum
     */
    public function setIdForum(\App\Entity\Forum $idForum = null)
    {
        $this->idForum = $idForum;

        return $this;
    }

    /**
     * Get idForum.
     *
     * @return \App\Entity\Forum|null
     */
    public function getIdForum()
    {
        return $this->idForum;
    }
}
