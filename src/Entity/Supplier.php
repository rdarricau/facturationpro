<?php
namespace FacturationPro\Entity;

class Supplier {
    /** @var  \FacturationPro\FacturationPro */
    private $master;

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
    protected $sepa_iban;

    /** @var string */
    protected $sepa_bic;

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

    /**
     * @param string $company_name
     * @return Supplier
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
        return $this;
    }

    /**
     * @param \Civility $civility
     * @return Supplier
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;
        return $this;
    }

    /**
     * @param string $first_name
     * @return Supplier
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @param string $last_name
     * @return Supplier
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param string $short_name
     * @return Supplier
     */
    public function setShortName($short_name)
    {
        $this->short_name = $short_name;
        return $this;
    }

    /**
     * @param string $street
     * @return Supplier
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $city
     * @return Supplier
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $zip_code
     * @return Supplier
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    /**
     * @param Country $country
     * @return Supplier
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $phone
     * @return Supplier
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $fax
     * @return Supplier
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @param string $email
     * @return Supplier
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $mobile
     * @return Supplier
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @param string $website
     * @return Supplier
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @param text $notes
     * @return Supplier
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param string $vat_number
     * @return Supplier
     */
    public function setVatNumber($vat_number)
    {
        $this->vat_number = $vat_number;
        return $this;
    }

    /**
     * @param string $siret
     * @return Supplier
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
        return $this;
    }

    /**
     * @param Category $category
     * @return Supplier
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param string $account_code
     * @return Supplier
     */
    public function setAccountCode($account_code)
    {
        $this->account_code = $account_code;
        return $this;
    }

    /**
     * @param string $accounting_entry
     * @return Supplier
     */
    public function setAccountingEntry($accounting_entry)
    {
        $this->accounting_entry = $accounting_entry;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Supplier
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Supplier
     */    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }

    /**
     * @param string $reverse_charge
     * @return Supplier
     */
    public function setReverseCharge($reverse_charge)
    {
        $this->reverse_charge = $reverse_charge;
        return $this;
    }

    /**
     * @return string
     */
    public function getSepaIban()
    {
        return $this->sepa_iban;
    }

    /**
     * @param string $sepa_iban
     * @return Supplier
     */
    public function setSepaIban($sepa_iban)
    {
        $this->sepa_iban = $sepa_iban;
        return $this;
    }

    /**
     * @return string
     */
    public function getSepaBic()
    {
        return $this->sepa_bic;
    }

    /**
     * @param string $sepa_bic
     * @return Supplier
     */
    public function setSepaBic($sepa_bic)
    {
        $this->sepa_bic = $sepa_bic;
        return $this;
    }
}
?>