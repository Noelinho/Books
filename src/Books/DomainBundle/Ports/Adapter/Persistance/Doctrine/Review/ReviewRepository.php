<?php
namespace Books\DomainBundle\Ports\Adapter\Persistance\Doctrine\Review;

use Doctrine\ORM\EntityRepository;

class ReviewRepository extends EntityRepository implements \Books\Domain\Model\User\UserRepository
{

}