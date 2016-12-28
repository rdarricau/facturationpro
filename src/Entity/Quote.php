<?php

class Quote {
    /** @var integer */
 	protected $id;

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
     * @return DateTime
     */
    public function getInvoicedOn()
    {
        return $this->invoiced_on;
    }

    /**
     * @return DateTime
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
     * @return DateTime
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
}
?>