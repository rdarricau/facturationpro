<?php
namespace FacturationPro\Entity;

class Followup {
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var integer */
 	protected $id;

    /** @var string */
 	protected $title;

    /** @var FollowupStatus */
 	protected $status;

    /** @var \DateTime */
 	protected $created_at;

    /** @var \DateTime */
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
     * @return FollowupStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param string $title
     * @return Followup
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param FollowupStatus $status
     * @return Followup
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}
?>