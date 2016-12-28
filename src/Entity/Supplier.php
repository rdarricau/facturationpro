<?php

class Supplier {
    /** @var integer */
 	protected $id;

    /** @var string */
 	protected $company_name;

    /** @var \Civility */
 	protected $civility;

    /** @var string */
 	protected $first_name;

    /** @var string */
 	protected $last_name;

    /** @var string */
 	protected $short_name;

    /** @var string */
 	protected $street;

    /** @var string */
 	protected $city;

    /** @var string */
 	protected $zip_code;

    /** @var Country */
 	protected $country;

    /** @var string */
 	protected $phone;

    /** @var string */
 	protected $fax;

    /** @var string */
 	protected $email;

    /** @var string */
 	protected $mobile;

    /** @var string */
 	protected $website;

    /** @var text */
 	protected $notes;

    /** @var string */
 	protected $vat_number;

    /** @var string */
 	protected $siret;

    /** @var Category */
 	protected $category;

    /** @var string */
 	protected $account_code;

    /** @var string */
 	protected $accounting_entry;

    /** @var \DateTime */
 	protected $created_at;

    /** @var \DateTime */
 	protected $updated_at;

    /** @var string */
 	protected $api_id;

    /** @var string */
 	protected $api_custom;

    /** @var string */
 	protected $reverse_charge;

    /** @var boolean */
 	protected $soft_deleted;

    /** @var \DateTime */
 	protected $hard_delete_on;

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
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @return Civility
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->short_name;
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
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
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
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @return text
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vat_number;
    }

    /**
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
        return $this->account_code;
    }

    /**
     * @return string
     */
    public function getAccountingEntry()
    {
        return $this->accounting_entry;
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
     * @return string
     */
    public function getApiId()
    {
        return $this->api_id;
    }

    /**
     * @return string
     */
    public function getApiCustom()
    {
        return $this->api_custom;
    }

    /**
     * @return string
     */
    public function getReverseCharge()
    {
        return $this->reverse_charge;
    }

    /**
     * @return bool
     */
    public function isSoftDeleted()
    {
        return $this->soft_deleted;
    }

    /**
     * @return DateTime
     */
    public function getHardDeleteOn()
    {
        return $this->hard_delete_on;
    }
}
?>