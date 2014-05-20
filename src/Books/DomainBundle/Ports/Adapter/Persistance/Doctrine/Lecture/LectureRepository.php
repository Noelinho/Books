<?php
namespace Books\DomainBundle\Ports\Adapter\Persistance\Doctrine\Lecture;

use Doctrine\ORM\EntityRepository;

class LectureRepository extends EntityRepository implements \Books\Domain\Model\Lectures\LectureRepository
{

}