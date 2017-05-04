<?php
namespace FacturationPro\Entity;

class Category {
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var integer **/
 	protected $id;

    /** @var string **/
 	protected $title;

    /** @var CategoryStatus**/
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
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $title
     * @return Category
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param CategoryStatus $status
     * @return Category
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}
?>