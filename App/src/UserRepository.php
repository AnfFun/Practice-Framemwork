<?php

use App\src\User;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function addUser(): void
    {
        $entityManager = $this->getEntityManager();
        $user = new User();
        $user->setName('Max');
        $entityManager->persist($user);
        $entityManager->flush();
    }

}