<?php
namespace FacturationPro\Entity;

class Customer {

    /** @var ineger */
 	protected $id;

    /** @var string */
	protected $company_name;

    /** @var Civility */
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

    /** @var \Country */
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

    /** @var \Category */
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
	protected $individual;

    /** @var string */
	protected $reference;

    /** @var integer */
	protected $penalty;

    /** @var integer */
	protected $discount;

    /** @var PayBefore */
	protected $pay_before;

    /** @var integer */
	protected $validity;

    /** @var \DateTime */
	protected $last_invoiced_on;

    /** @var \DateTime */
	protected $last_paid_on;

    /** @var Currency */
	protected $currency;

    /** @var Language */
	protected $language;

    /** @var string */
	protected $default_vat;

    /** @var VatExemptionReason */
	protected $vat_exemption_reason;

    /** @var string */
	protected $vat_exemption_other;

    /** @var string */
	protected $sepa_iban;

    /** @var string */
	protected $sepa_bic;

    /** @var string */
	protected $sepa_rum;

    /** @var string */
	protected $field1;

    /** @var string */
	protected $field2;

    /** @var string */
	protected $field3;

    /** @var string */
	protected $field4;

    /** @var string */
	protected $field5;

    /** @var boolean */
	protected $soft_deleted;

    /** @var \DateTime */
	protected $hard_delete_on;

    /**
     * @return ineger
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
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return int
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return PayBefore
     */
    public function getPayBefore()
    {
        return $this->pay_before;
    }

    /**
     * @return int
     */
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * @return DateTime
     */
    public function getLastInvoicedOn()
    {
        return $this->last_invoiced_on;
    }

    /**
     * @return DateTime
     */
    public function getLastPaidOn()
    {
        return $this->last_paid_on;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getDefaultVat()
    {
        return $this->default_vat;
    }

    /**
     * @return VatExemptionReason
     */
    public function getVatExemptionReason()
    {
        return $this->vat_exemption_reason;
    }

    /**
     * @return string
     */
    public function getVatExemptionOther()
    {
        return $this->vat_exemption_other;
    }

    /**
     * @return string
     */
    public function getSepaIban()
    {
        return $this->sepa_iban;
    }

    /**
     * @return string
     */
    public function getSepaBic()
    {
        return $this->sepa_bic;
    }

    /**
     * @return string
     */
    public function getSepaRum()
    {
        return $this->sepa_rum;
    }

    /**
     * @return string
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * @return string
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * @return string
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * @return string
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * @return string
     */
    public function getField5()
    {
        return $this->field5;
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
     * @return Customer
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
        return $this;
    }

    /**
     * @param Civility $civility
     * @return Customer
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;
        return $this;
    }

    /**
     * @param string $first_name
     * @return Customer
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @param string $last_name
     * @return Customer
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param string $short_name
     * @return Customer
     */
    public function setShortName($short_name)
    {
        $this->short_name = $short_name;
        return $this;
    }

    /**
     * @param string $street
     * @return Customer
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $city
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $zip_code
     * @return Customer
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    /**
     * @param \Country $country
     * @return Customer
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $phone
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param string $fax
     * @return Customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $mobile
     * @return Customer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @param string $website
     * @return Customer
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * @param text $notes
     * @return Customer
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param string $vat_number
     * @return Customer
     */
    public function setVatNumber($vat_number)
    {
        $this->vat_number = $vat_number;
        return $this;
    }

    /**
     * @param string $siret
     * @return Customer
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
        return $this;
    }

    /**
     * @param \Category $category
     * @return Customer
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param string $account_code
     * @return Customer
     */
    public function setAccountCode($account_code)
    {
        $this->account_code = $account_code;
        return $this;
    }

    /**
     * @param string $accounting_entry
     * @return Customer
     */
    public function setAccountingEntry($accounting_entry)
    {
        $this->accounting_entry = $accounting_entry;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Customer
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Customer
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }

    /**
     * @param string $individual
     * @return Customer
     */
    public function setIndividual($individual)
    {
        $this->individual = $individual;
        return $this;
    }

    /**
     * @param string $reference
     * @return Customer
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param int $penalty
     * @return Customer
     */
    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;
        return $this;
    }

    /**
     * @param int $discount
     * @return Customer
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param PayBefore $pay_before
     * @return Customer
     */
    public function setPayBefore($pay_before)
    {
        $this->pay_before = $pay_before;
        return $this;
    }

    /**
     * @param int $validity
     * @return Customer
     */
    public function setValidity($validity)
    {
        $this->validity = $validity;
        return $this;
    }

    /**
     * @param Currency $currency
     * @return Customer
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param Language $language
     * @return Customer
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string $default_vat
     * @return Customer
     */
    public function setDefaultVat($default_vat)
    {
        $this->default_vat = $default_vat;
        return $this;
    }

    /**
     * @param VatExemptionReason $vat_exemption_reason
     * @return Customer
     */
    public function setVatExemptionReason($vat_exemption_reason)
    {
        $this->vat_exemption_reason = $vat_exemption_reason;
        return $this;
    }

    /**
     * @param string $vat_exemption_other
     * @return Customer
     */
    public function setVatExemptionOther($vat_exemption_other)
    {
        $this->vat_exemption_other = $vat_exemption_other;
        return $this;
    }

    /**
     * @param string $sepa_iban
     * @return Customer
     */
    public function setSepaIban($sepa_iban)
    {
        $this->sepa_iban = $sepa_iban;
        return $this;
    }

    /**
     * @param string $sepa_bic
     * @return Customer
     */
    public function setSepaBic($sepa_bic)
    {
        $this->sepa_bic = $sepa_bic;
        return $this;
    }

    /**
     * @param string $sepa_rum
     * @return Customer
     */
    public function setSepaRum($sepa_rum)
    {
        $this->sepa_rum = $sepa_rum;
        return $this;
    }

    /**
     * @param string $field1
     * @return Customer
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;
        return $this;
    }

    /**
     * @param string $field2
     * @return Customer
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
        return $this;
    }

    /**
     * @param string $field3
     * @return Customer
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;
        return $this;
    }

    /**
     * @param string $field4
     * @return Customer
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;
        return $this;
    }

    /**
     * @param string $field5
     * @return Customer
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;
        return $this;
    }
}
?>