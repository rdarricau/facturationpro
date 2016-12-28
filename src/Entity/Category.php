<?php

class Category {
 	/** @var integer **/
 	protected $id;

    /** @var string **/
 	protected $title;

     /** @var CategoryStatus **/
     protected $status;

    /** @var \DateTime **/
 	protected $created_at;

    /** @var \DateTime **/
 	protected $updated_at;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return CategoryStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return datetime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }


}
?>