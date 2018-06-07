<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5-6-2018
 * Time: 14:13
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class RegistratieRepository extends EntityRepository
{
    public function getLes($les)
    {
        $em = $this->getEntityManager();

        $query = $em->createQuery("SELECT u FROM AppBundle:Registratie u WHERE u.les =:lesid");

        $query->setParameter('lesid', $les);
        return $query->getResult();
    }
}