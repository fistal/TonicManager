<?php

namespace Proxies\__CG__\Tonicmanager\AppBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Banque extends \Tonicmanager\AppBundle\Entity\Banque implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNomBeneficiare($nomBeneficiare)
    {
        $this->__load();
        return parent::setNomBeneficiare($nomBeneficiare);
    }

    public function getNomBeneficiare()
    {
        $this->__load();
        return parent::getNomBeneficiare();
    }

    public function setTitulaire($titulaire)
    {
        $this->__load();
        return parent::setTitulaire($titulaire);
    }

    public function getTitulaire()
    {
        $this->__load();
        return parent::getTitulaire();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function setCp($cp)
    {
        $this->__load();
        return parent::setCp($cp);
    }

    public function getCp()
    {
        $this->__load();
        return parent::getCp();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function setIban($iban)
    {
        $this->__load();
        return parent::setIban($iban);
    }

    public function getIban()
    {
        $this->__load();
        return parent::getIban();
    }

    public function setBic($bic)
    {
        $this->__load();
        return parent::setBic($bic);
    }

    public function getBic()
    {
        $this->__load();
        return parent::getBic();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nomBeneficiare', 'titulaire', 'nom', 'adresse', 'cp', 'ville', 'iban', 'bic');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}