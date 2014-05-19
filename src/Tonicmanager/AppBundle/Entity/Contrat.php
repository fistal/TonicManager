<?php

namespace Tonicmanager\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tonicmanager\AppBundle\Entity\ContratRepository")
 */
class Contrat
{
	/**
	 * @ORM\ManyToOne(targetEntity="Tonicmanager\AppBundle\Entity\Abonnement")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $abonnement;
	/**
	 * @ORM\ManyToOne(targetEntity="Tonicmanager\AppBundle\Entity\Client")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $client;
	/**
	 * @ORM\ManyToOne(targetEntity="Tonicmanager\AppBundle\Entity\Supp")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $Supp;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ClientDoit", type="integer")
     */
    private $clientDoit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IncidentPaiement", type="boolean")
     */
    private $incidentPaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="ModePaiement", type="string", length=255)
     */
    private $modePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="DroitEntree", type="string", length=255)
     */
    private $droitEntree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateStart", type="date")
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateEnd", type="date")
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="text")
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Contrat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set clientDoit
     *
     * @param integer $clientDoit
     * @return Contrat
     */
    public function setClientDoit($clientDoit)
    {
        $this->clientDoit = $clientDoit;
    
        return $this;
    }

    /**
     * Get clientDoit
     *
     * @return integer 
     */
    public function getClientDoit()
    {
        return $this->clientDoit;
    }

    /**
     * Set incidentPaiement
     *
     * @param boolean $incidentPaiement
     * @return Contrat
     */
    public function setIncidentPaiement($incidentPaiement)
    {
        $this->incidentPaiement = $incidentPaiement;
    
        return $this;
    }

    /**
     * Get incidentPaiement
     *
     * @return boolean 
     */
    public function getIncidentPaiement()
    {
        return $this->incidentPaiement;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     * @return Contrat
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;
    
        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string 
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set droitEntree
     *
     * @param string $droitEntree
     * @return Contrat
     */
    public function setDroitEntree($droitEntree)
    {
        $this->droitEntree = $droitEntree;
    
        return $this;
    }

    /**
     * Get droitEntree
     *
     * @return string 
     */
    public function getDroitEntree()
    {
        return $this->droitEntree;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Contrat
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    
        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Contrat
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    
        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Contrat
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Contrat
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set abonnement
     *
     * @param \Tonicmanager\AppBundle\Entity\Abonnement $abonnement
     * @return Contrat
     */
    public function setAbonnement(\Tonicmanager\AppBundle\Entity\Abonnement $abonnement)
    {
        $this->abonnement = $abonnement;
    
        return $this;
    }

    /**
     * Get abonnement
     *
     * @return \Tonicmanager\AppBundle\Entity\Abonnement 
     */
    public function getAbonnement()
    {
        return $this->abonnement;
    }

    /**
     * Set client
     *
     * @param \Tonicmanager\AppBundle\Entity\Client $client
     * @return Contrat
     */
    public function setClient(\Tonicmanager\AppBundle\Entity\Client $client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return \Tonicmanager\AppBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set Supp
     *
     * @param \Tonicmanager\AppBundle\Entity\Supp $supp
     * @return Contrat
     */
    public function setSupp(\Tonicmanager\AppBundle\Entity\Supp $supp)
    {
        $this->Supp = $supp;
    
        return $this;
    }

    /**
     * Get Supp
     *
     * @return \Tonicmanager\AppBundle\Entity\Supp 
     */
    public function getSupp()
    {
        return $this->Supp;
    }
}