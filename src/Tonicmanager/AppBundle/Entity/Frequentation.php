<?php

namespace Tonicmanager\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frequentation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tonicmanager\AppBundle\Entity\FrequentationRepository")
 */
class Frequentation
{

	/**
	 * @ORM\ManyToOne(targetEntity="Tonicmanager\AppBundle\Entity\Client")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $client;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;

	public function __construct()
	{
		$this->date = new \Datetime();
	}

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
     * Set date
     *
     * @param \DateTime $date
     * @return Frequentation
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set client
     *
     * @param \Tonicmanager\AppBundle\Entity\Client $client
     * @return Frequentation
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
}