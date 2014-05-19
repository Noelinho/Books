<?php
namespace Books\Domain\Model\User;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class User
{
    protected $id;
    protected $name;
    protected $surname;
    protected $lectures;

    public function __construct() {
        $this->lectures = new ArrayCollection();
    }

    /**
     * @param mixed $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $surname
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $lectures
     *
     * @return $this
     */
    public function setLectures($lectures)
    {
        $this->lectures = $lectures;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLectures()
    {
        return $this->lectures;
    }

}