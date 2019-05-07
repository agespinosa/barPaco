<?php

namespace AppBundle\Repository;

/**
 * TapaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TapaRepository extends \Doctrine\ORM\EntityRepository
{
    public function paginas($pagina, $elementosPorPagina=3){
        //$tapas= $repository->findByTop(1);
      $query = $this->createQueryBuilder('t')
      ->where('t.top = 1') 
      ->setFirstResult($elementosPorPagina*($pagina-1))
      ->setMaxResults($elementosPorPagina)
      ->getQuery();

      return $query->getResult();
    }
}
