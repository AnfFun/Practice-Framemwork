<?php

namespace App\src\Repository;

use App\src\User;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    /**
     * @param string $name
     * @param string $phone
     * @return User
     */
    public function createUser(string $name, string $phone): User
    {
        $user = new User();
        $user->setName($name);
        $user->setPhone($phone);

        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();

        return $user;
    }

    /**
     * @param int $id
     * @return User|null
     */
    public function findUserById(int $id): ?User
    {
        return $this->findOneBy(['id' => $id]);
    }

    /**
     * @param string $name
     * @return User|null
     */
    public function findUserByName(string $name): ?User
    {
        return $this->findOneBy(['name' => $name]);
    }
}