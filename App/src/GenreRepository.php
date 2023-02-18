<?php

namespace App\src;

use Doctrine\ORM\EntityRepository;

class GenreRepository extends EntityRepository
{
    public function save($entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush();
    }

    public function delete($entity)
    {
        $this->_em->remove($entity);
        $this->_em->flush();
    }

    public function update($entity)
    {
        $this->_em->flush();
    }

    public function findById($id)
    {
        return $this->find($id);
    }
}
