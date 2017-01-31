<?php
namespace FacturationPro\Entity;

class Invoice {
    /** @var integer */
 	protected $id;

 	/** @var  Customer */
 	protected $customer;

 	/** @var  string */
 	protected $title;

    /** @var  Language */
 	protected $language;

    /** @var  Category */
 	protected $category;

    /** @var  Followup */
 	protected $followup_id;

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

    /** @var  string */
 	protected $api_id;

    /** @var  string */
 	protected $api_custom;

    /** @var  Quote */
 	protected $quote;

    /** @var  string */
 	protected $invoice_ref;

    /** @var  string */
 	protected $external_ref;

    /** @var  PaymentMode */
 	protected $payment_mode;

    /** @var \DateTime */
 	protected $paid_on;

    /** @var  string */
 	protected $payment_ref;

    /** @var  float */
 	protected $paid_in_euros;

    /** @var  Invoice */
 	protected $refund;

    /** @var  string */
 	protected $pay_url;

    /** @var  float */
 	protected $balance;

    /** @var  string */
 	protected $external;

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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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
    public function getFollowupId()
    {
        return $this->followup_id;
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
     * @return Quote
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @return string
     */
    public function getInvoiceRef()
    {
        return $this->invoice_ref;
    }

    /**
     * @return string
     */
    public function getExternalRef()
    {
        return $this->external_ref;
    }

    /**
     * @return PaymentMode
     */
    public function getPaymentMode()
    {
        return $this->payment_mode;
    }

    /**
     * @return \DateTime
     */
    public function getPaidOn()
    {
        return $this->paid_on;
    }

    /**
     * @return string
     */
    public function getPaymentRef()
    {
        return $this->payment_ref;
    }

    /**
     * @return float
     */
    public function getPaidInEuros()
    {
        return $this->paid_in_euros;
    }

    /**
     * @return Invoice
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * @return string
     */
    public function getPayUrl()
    {
        return $this->pay_url;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getExternal()
    {
        return $this->external;
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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param Language $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param Followup $followup_id
     */
    public function setFollowupId($followup_id)
    {
        $this->followup_id = $followup_id;
    }

    /**
     * @param \DateTime $invoiced_on
     */
    public function setInvoicedOn($invoiced_on)
    {
        $this->invoiced_on = $invoiced_on;
    }

    /**
     * @param \DateTime $term_on
     */
    public function setTermOn($term_on)
    {
        $this->term_on = $term_on;
    }

    /**
     * @param bool $draft
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @param float $total_with_vat
     */
    public function setTotalWithVat($total_with_vat)
    {
        $this->total_with_vat = $total_with_vat;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @param float $rebate_percentage
     */
    public function setRebatePercentage($rebate_percentage)
    {
        $this->rebate_percentage = $rebate_percentage;
    }

    /**
     * @param VatExemptionReason $vat_exemption_reason
     */
    public function setVatExemptionReason($vat_exemption_reason)
    {
        $this->vat_exemption_reason = $vat_exemption_reason;
    }

    /**
     * @param string $vat_exemption_other
     */
    public function setVatExemptionOther($vat_exemption_other)
    {
        $this->vat_exemption_other = $vat_exemption_other;
    }

    /**
     * @param string $vat_country
     */
    public function setVatCountry($vat_country)
    {
        $this->vat_country = $vat_country;
    }

    /**
     * @param string $tax_title
     */
    public function setTaxTitle($tax_title)
    {
        $this->tax_title = $tax_title;
    }

    /**
     * @param float $tax_percent
     */
    public function setTaxPercent($tax_percent)
    {
        $this->tax_percent = $tax_percent;
    }

    /**
     * @param float $penalty
     */
    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;
    }

    /**
     * @param PayBefore $pay_before
     */
    public function setPayBefore($pay_before)
    {
        $this->pay_before = $pay_before;
    }

    /**
     * @param float $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @param string $precompte
     */
    public function setPrecompte($precompte)
    {
        $this->precompte = $precompte;
    }

    /**
     * @param string $precompte_title
     */
    public function setPrecompteTitle($precompte_title)
    {
        $this->precompte_title = $precompte_title;
    }

    /**
     * @param bool $service_personne
     */
    public function setServicePersonne($service_personne)
    {
        $this->service_personne = $service_personne;
    }

    /**
     * @param string $accounting_entry
     */
    public function setAccountingEntry($accounting_entry)
    {
        $this->accounting_entry = $accounting_entry;
    }

    /**
     * @param string $information
     */
    public function setInformation($information)
    {
        $this->information = $information;
    }

    /**
     * @param string $internal_note
     */
    public function setInternalNote($internal_note)
    {
        $this->internal_note = $internal_note;
    }

    /**
     * @param \DateTime $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @param \DateTime $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @param Customer $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @param string $api_id
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
    }

    /**
     * @param string $api_custom
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
    }

    /**
     * @param Quote $quote
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
    }

    /**
     * @param string $invoice_ref
     */
    public function setInvoiceRef($invoice_ref)
    {
        $this->invoice_ref = $invoice_ref;
    }

    /**
     * @param string $external_ref
     */
    public function setExternalRef($external_ref)
    {
        $this->external_ref = $external_ref;
    }

    /**
     * @param PaymentMode $payment_mode
     */
    public function setPaymentMode($payment_mode)
    {
        $this->payment_mode = $payment_mode;
    }

    /**
     * @param \DateTime $paid_on
     */
    public function setPaidOn($paid_on)
    {
        $this->paid_on = $paid_on;
    }

    /**
     * @param string $payment_ref
     */
    public function setPaymentRef($payment_ref)
    {
        $this->payment_ref = $payment_ref;
    }

    /**
     * @param float $paid_in_euros
     */
    public function setPaidInEuros($paid_in_euros)
    {
        $this->paid_in_euros = $paid_in_euros;
    }

    /**
     * @param Invoice $refund
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;
    }

    /**
     * @param string $pay_url
     */
    public function setPayUrl($pay_url)
    {
        $this->pay_url = $pay_url;
    }

    /**
     * @param float $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @param string $external
     */
    public function setExternal($external)
    {
        $this->external = $external;
    }

    /**
     * @param bool $soft_deleted
     */
    public function setSoftDeleted($soft_deleted)
    {
        $this->soft_deleted = $soft_deleted;
    }

    /**
     * @param \DateTime $hard_delete_on
     */
    public function setHardDeleteOn($hard_delete_on)
    {
        $this->hard_delete_on = $hard_delete_on;
    }

    /**
     * @param Item[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
}
?>