<?php
namespace Books\DomainBundle\Ports\Adapter\Persistance\Doctrine\User;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository implements \Books\Domain\Model\User\UserRepository
{

}