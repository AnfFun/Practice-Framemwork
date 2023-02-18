<?php

namespace App\src;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class BookRepository extends EntityRepository
{
    public function save(Book $book)
    {
        $this->_em->persist($book);
        $this->_em->flush();
    }

    public function delete(Book $book)
    {
        $this->_em->remove($book);
        $this->_em->flush();
    }

    public function update(Book $book)
    {
        $this->_em->flush();
    }

    public function findById(int $id): ?Book
    {
        return $this->find($id);
    }

}
