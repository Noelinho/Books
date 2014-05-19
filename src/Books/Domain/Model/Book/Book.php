<?php
namespace Books\Domain\Model\Book;

use Doctrine\Common\Collections\ArrayCollection;

class Book
{
    protected $id;
    protected $title;
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
     * @param mixed $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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