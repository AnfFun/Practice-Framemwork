<?php

use App\src\Book;
use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository
{
    public function addBook(): void
    {
        $entityManager = $this->getEntityManager();
        $book = new Book();
        $book->setTitle('book1');
        $entityManager->persist($book);
        $entityManager->flush();
    }

}