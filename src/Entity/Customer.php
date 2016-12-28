<?php

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
}
?>