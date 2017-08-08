<?php
namespace FacturationPro\Entity;

class Quote {
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var integer */
 	protected $id;

    /** @var  string */
    protected $title;

    /** @var  Customer */
 	protected $customer;

    /** @var  Language */
 	protected $language;

    /** @var  Category */
 	protected $category;

    /** @var  Followup */
 	protected $followup;

    /** @var \DateTime */
 	protected $invoiced_on;

    /** @var \DateTime */
 	protected $term_on;

    /** @var  boolean */
 	protected $draft;

    /** @var  float */
 	protected $total;

    /** @var  float */
 	protected $total_with_vat;

    /** @var  Currency */
 	protected $currency;

    /** @var  float */
 	protected $rebate_percentage;

    /** @var  string */
    protected $vat_exemption;

    /** @var  VatExemptionReason */
 	protected $vat_exemption_reason;

    /** @var  string */
 	protected $vat_exemption_other;

    /** @var  string */
 	protected $vat_country;

    /** @var  string */
 	protected $tax_title;

    /** @var  float */
 	protected $tax_percent;

    /** @var  float */
 	protected $penalty;

    /** @var  PayBefore */
 	protected $pay_before;

    /** @var  float */
 	protected $discount;

    /** @var  string */
 	protected $precompte;

    /** @var  string */
 	protected $precompte_title;

    /** @var  boolean */
 	protected $service_personne;

    /** @var  string */
 	protected $accounting_entry;

    /** @var  string */
 	protected $information;

    /** @var  string */
 	protected $internal_note;

    /** @var \DateTime */
 	protected $created_at;

    /** @var \DateTime */
 	protected $updated_at;

    /** @var  Customer */
 	protected $user;

    /** @var string */
 	protected $api_id;

    /** @var string */
 	protected $api_custom;

    /** @var QuoteStatus */
	protected $quote_status;

    /** @var  string */
 	protected $quote_ref;

    /** @var  boolean */
 	protected $ignore_quote;

    /** @var  boolean */
 	protected $fully_invoiced;

    /** @var  float */
 	protected $amount_invoiced;

    /** @var  Invoice[] */
 	protected $invoice_ids;

    /** @var  boolean */
 	protected $soft_deleted;

    /** @var \DateTime */
 	protected $hard_delete_on;

    /** @var Item[] */
    protected $items;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return Followup
     */
    public function getFollowup()
    {
        return $this->followup;
    }

    /**
     * @return \DateTime
     */
    public function getInvoicedOn()
    {
        return $this->invoiced_on;
    }

    /**
     * @return \DateTime
     */
    public function getTermOn()
    {
        return $this->term_on;
    }

    /**
     * @return bool
     */
    public function isDraft()
    {
        return $this->draft;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return float
     */
    public function getTotalWithVat()
    {
        return $this->total_with_vat;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return float
     */
    public function getRebatePercentage()
    {
        return $this->rebate_percentage;
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
    public function getVatCountry()
    {
        return $this->vat_country;
    }

    /**
     * @return string
     */
    public function getTaxTitle()
    {
        return $this->tax_title;
    }

    /**
     * @return float
     */
    public function getTaxPercent()
    {
        return $this->tax_percent;
    }

    /**
     * @return float
     */
    public function getPenalty()
    {
        return $this->penalty;
    }

    /**
     * @return PayBefore
     */
    public function getPayBefore()
    {
        return $this->pay_before;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return string
     */
    public function getPrecompte()
    {
        return $this->precompte;
    }

    /**
     * @return string
     */
    public function getPrecompteTitle()
    {
        return $this->precompte_title;
    }

    /**
     * @return bool
     */
    public function isServicePersonne()
    {
        return $this->service_personne;
    }

    /**
     * @return string
     */
    public function getAccountingEntry()
    {
        return $this->accounting_entry;
    }

    /**
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @return string
     */
    public function getInternalNote()
    {
        return $this->internal_note;
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
     * @return Customer
     */
    public function getUser()
    {
        return $this->user;
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
     * @return QuoteStatus
     */
    public function getQuoteStatus()
    {
        return $this->quote_status;
    }

    /**
     * @return string
     */
    public function getQuoteRef()
    {
        return $this->quote_ref;
    }

    /**
     * @return bool
     */
    public function isIgnoreQuote()
    {
        return $this->ignore_quote;
    }

    /**
     * @return bool
     */
    public function isFullyInvoiced()
    {
        return $this->fully_invoiced;
    }

    /**
     * @return float
     */
    public function getAmountInvoiced()
    {
        return $this->amount_invoiced;
    }

    /**
     * @return Invoice[]
     */
    public function getInvoiceIds()
    {
        return $this->invoice_ids;
    }

    /**
     * @return bool
     */
    public function isSoftDeleted()
    {
        return $this->soft_deleted;
    }

    /**
     * @return \DateTime
     */
    public function getHardDeleteOn()
    {
        return $this->hard_delete_on;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return Quote
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param string $title
     * @return Quote
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param Customer $customer
     * @return Quote
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @param Language $language
     * @return Quote
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param Category $category
     * @return Quote
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param Followup $followup
     * @return Quote
     */
    public function setFollowup($followup)
    {
        $this->followup = $followup;
        return $this;
    }

    /**
     * @param \DateTime $invoiced_on
     * @return Quote
     */
    public function setInvoicedOn($invoiced_on)
    {
        $this->invoiced_on = $invoiced_on;
        return $this;
    }

    /**
     * @param \DateTime $term_on
     * @return Quote
     */
    public function setTermOn($term_on)
    {
        $this->term_on = $term_on;
        return $this;
    }

    /**
     * @param Currency $currency
     * @return Quote
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param float $rebate_percentage
     * @return Quote
     */
    public function setRebatePercentage($rebate_percentage)
    {
        $this->rebate_percentage = $rebate_percentage;
        return $this;
    }

    /**
     * @param string $vat_exemption
     * @return Quote
     */
    public function setVatExemption($vat_exemption)
    {
        $this->vat_exemption = $vat_exemption;
        return $this;
    }

    /**
     * @param VatExemptionReason $vat_exemption_reason
     * @return Quote
     */
    public function setVatExemptionReason($vat_exemption_reason)
    {
        $this->vat_exemption_reason = $vat_exemption_reason;
        return $this;
    }

    /**
     * @param string $vat_exemption_other
     * @return Quote
     */
    public function setVatExemptionOther($vat_exemption_other)
    {
        $this->vat_exemption_other = $vat_exemption_other;
        return $this;
    }

    /**
     * @param string $vat_country
     * @return Quote
     */
    public function setVatCountry($vat_country)
    {
        $this->vat_country = $vat_country;
        return $this;
    }

    /**
     * @param string $tax_title
     * @return Quote
     */
    public function setTaxTitle($tax_title)
    {
        $this->tax_title = $tax_title;
        return $this;
    }

    /**
     * @param float $tax_percent
     * @return Quote
     */
    public function setTaxPercent($tax_percent)
    {
        $this->tax_percent = $tax_percent;
        return $this;
    }

    /**
     * @param float $penalty
     * @return Quote
     */
    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;
        return $this;
    }

    /**
     * @param PayBefore $pay_before
     * @return Quote
     */
    public function setPayBefore($pay_before)
    {
        $this->pay_before = $pay_before;
        return $this;
    }

    /**
     * @param float $discount
     * @return Quote
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param string $precompte
     * @return Quote
     */
    public function setPrecompte($precompte)
    {
        $this->precompte = $precompte;
        return $this;
    }

    /**
     * @param string $precompte_title
     * @return Quote
     */
    public function setPrecompteTitle($precompte_title)
    {
        $this->precompte_title = $precompte_title;
        return $this;
    }

    /**
     * @param bool $service_personne
     * @return Quote
     */
    public function setServicePersonne($service_personne)
    {
        $this->service_personne = $service_personne;
        return $this;
    }

    /**
     * @param string $accounting_entry
     * @return Quote
     */
    public function setAccountingEntry($accounting_entry)
    {
        $this->accounting_entry = $accounting_entry;
        return $this;
    }

    /**
     * @param string $information
     * @return Quote
     */
    public function setInformation($information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * @param string $internal_note
     * @return Quote
     */
    public function setInternalNote($internal_note)
    {
        $this->internal_note = $internal_note;
        return $this;
    }

    /**
     * @param Customer $user
     * @return Quote
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Quote
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Quote
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }

    /**
     * @param QuoteStatus $quote_status
     * @return Quote
     */
    public function setQuoteStatus($quote_status)
    {
        $this->quote_status = $quote_status;
        return $this;
    }

    /**
     * @param bool $ignore_quote
     * @return Quote
     */
    public function setIgnoreQuote($ignore_quote)
    {
        $this->ignore_quote = $ignore_quote;
        return $this;
    }
}
?>