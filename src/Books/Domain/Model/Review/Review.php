<?php
namespace Books\Domain\Model\Review;

class Review
{
    protected $id;
    protected $lecture;
    protected $title;
    protected $body;
    protected $rating;

    /**
     * @param mixed $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
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
     * @param mixed $lecture
     *
     * @return $this
     */
    public function setLecture($lecture)
    {
        $this->lecture = $lecture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLecture()
    {
        return $this->lecture;
    }

    /**
     * @param mixed $rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
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


}