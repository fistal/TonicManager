<?php

namespace Tonicmanager\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tonicmanager\AppBundle\Entity\BanqueRepository")
 */
class Banque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NomBeneficiare", type="string", length=255)
     */
    private $nomBeneficiare;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulaire", type="string", length=255)
     */
    private $titulaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Cp", type="string", length=255)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="Ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Iban", type="string", length=255)
     */
    private $iban;


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
     * Set nomBeneficiare
     *
     * @param string $nomBeneficiare
     * @return Banque
     */
    public function setNomBeneficiare($nomBeneficiare)
    {
        $this->nomBeneficiare = $nomBeneficiare;
    
        return $this;
    }

    /**
     * Get nomBeneficiare
     *
     * @return string 
     */
    public function getNomBeneficiare()
    {
        return $this->nomBeneficiare;
    }

    /**
     * Set titulaire
     *
     * @param string $titulaire
     * @return Banque
     */
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;
    
        return $this;
    }

    /**
     * Get titulaire
     *
     * @return string 
     */
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Banque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Banque
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Banque
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Banque
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set iban
     *
     * @param string $iban
     * @return Banque
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    
        return $this;
    }

    /**
     * Get iban
     *
     * @return string 
     */
    public function getIban()
    {
        return $this->iban;
    }
}
