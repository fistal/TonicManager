<?php

namespace Tonicmanager\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends EntityRepository
{
	function findRechercheClient($nom, $dateNaissance)
	{
		$query = $this->CreateQueryBuilder('d');
		
		$query->andWhere('d.nom = :nom')
		->andWhere('d.dateNaissance = :dateNaissance')	
		->setParameters(array(
		'nom'=>$nom,
		'dateNaissance'=>$dateNaissance))
		->setMaxResults(1);
		
		return $query->getQuery()->getResult();
	}
}
