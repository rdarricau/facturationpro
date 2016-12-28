<?php

class Firm {
    /** @var integer */
 	protected $id;

    /** @var string */
 	protected $name;

    /** @var string */
  	protected $subscription;

    /** @var boolean */
 	protected $gold;

    /** @var \DateTime */
 	protected $end_on;

    /** @var integer */
  	protected $disk_used;

    /** @var integer */
 	protected $disk_free;

    /** @var string */
    protected $street;

    /** @var string */
 	protected $zip_code;

    /** @var string */
 	protected $city;

    /** @var Country */
 	protected $country;

    /** @var string */
 	protected $legal_form;

    /** @var string */
 	protected $capital;

    /** @var string */
 	protected $identification;

    /** @var \DateTime */
  	protected $activity_started_on;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @return bool
     */
    public function isGold()
    {
        return $this->gold;
    }

    /**
     * @return DateTime
     */
    public function getEndOn()
    {
        return $this->end_on;
    }

    /**
     * @return int
     */
    public function getDiskUsed()
    {
        return $this->disk_used;
    }

    /**
     * @return int
     */
    public function getDiskFree()
    {
        return $this->disk_free;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getLegalForm()
    {
        return $this->legal_form;
    }

    /**
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @return string
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * @return DateTime
     */
    public function getActivityStartedOn()
    {
        return $this->activity_started_on;
    }
}
?>