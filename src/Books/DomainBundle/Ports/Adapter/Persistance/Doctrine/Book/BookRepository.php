<?php
namespace Books\DomainBundle\Ports\Adapter\Persistance\Doctrine\Book;

use Doctrine\ORM\EntityRepository;

class BookRepository extends EntityRepository implements \Books\Domain\Model\Book\BookRepository
{

}