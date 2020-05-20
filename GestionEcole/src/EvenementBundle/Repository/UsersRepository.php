<?php


namespace EvenementBundle\Repository;


class UsersRepository extends  \Doctrine\ORM\EntityRepository
{
    /**
     * @param string $role
     *
     * @return array
     */
    public function findByRole($role)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
            ->from('EvenementBundle:Users', 'u')
            ->where('u.roles LIKE :roles')->andWhere('u.classeetd IS NULL')
            ->setParameter('roles', '%"'.$role.'"%');

        return $qb->getQuery()->getResult();
    }


}
