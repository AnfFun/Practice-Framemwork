<?php

use App\src\Genre;
use Doctrine\ORM\EntityRepository;

class GenreRepository extends EntityRepository
{
    public function addGenre(): void
    {
        $entityManager = $this->getEntityManager();
        $user = new Genre();
        $user->setName('horror');
        $entityManager->persist($user);
        $entityManager->flush();
    }

}