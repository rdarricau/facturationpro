<?php
namespace FacturationPro\Entity;

class Invoice {
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var integer */
 	protected $id;

 	/** @var  Customer */
 	protected $customer;

 	/** @var  integer */
 	protected $customer_id;

 	/** @var  string */
 	protected $title;

    /** @var  Language */
 	protected $language;

    /** @var  Category */
 	protected $category;

    /** @var  integer */
    protected $category_id;

    /** @var  Followup */
 	protected $followup;

    /** @var  integer */
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

    /** @var  integer */
    protected $user_id;

    /** @var  string */
 	protected $api_id;

    /** @var  string */
 	protected $api_custom;

    /** @var  Quote */
 	protected $quote;

    /** @var  integer */
    protected $quote_id;

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

    /** @var  integer */
    protected $refund_id;

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
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @return Followup
     */
    public function getFollowup()
    {
        return $this->followup;
    }

    /**
     * @return int
     */
    public function getFollowupId()
    {
        return $this->followup_id;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return int
     */
    public function getQuoteId()
    {
        return $this->quote_id;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
        return $this->refund_id;
    }

    /**
     * @param Customer $customer
     * @return Invoice
     */
    public function setCustomer($customer)
    {
        $this->customer_id = $customer->getId();
        $this->customer = $customer;
        return $this;
    }

    /**
     * @param string $title
     * @return Invoice
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param Language $language
     * @return Invoice
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param Category $category
     * @return Invoice
     */
    public function setCategory($category)
    {
        $this->category_id = $category->getId();
        $this->category = $category;
        return $this;
    }

    /**
     * @param \DateTime $invoiced_on
     * @return Invoice
     */
    public function setInvoicedOn($invoiced_on)
    {
        $this->invoiced_on = $invoiced_on;
        return $this;
    }

    /**
     * @param \DateTime $term_on
     * @return Invoice
     */
    public function setTermOn($term_on)
    {
        $this->term_on = $term_on;
        return $this;
    }

    /**
     * @param Currency $currency
     * @return Invoice
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param float $rebate_percentage
     * @return Invoice
     */
    public function setRebatePercentage($rebate_percentage)
    {
        $this->rebate_percentage = $rebate_percentage;
        return $this;
    }

    /**
     * @param VatExemptionReason $vat_exemption_reason
     * @return Invoice
     */
    public function setVatExemptionReason($vat_exemption_reason)
    {
        $this->vat_exemption_reason = $vat_exemption_reason;
        return $this;
    }

    /**
     * @param string $vat_exemption_other
     * @return Invoice
     */
    public function setVatExemptionOther($vat_exemption_other)
    {
        $this->vat_exemption_other = $vat_exemption_other;
        return $this;
    }

    /**
     * @param string $vat_country
     * @return Invoice
     */
    public function setVatCountry($vat_country)
    {
        $this->vat_country = $vat_country;
        return $this;
    }

    /**
     * @param string $tax_title
     * @return Invoice
     */
    public function setTaxTitle($tax_title)
    {
        $this->tax_title = $tax_title;
        return $this;
    }

    /**
     * @param float $tax_percent
     * @return Invoice
     */
    public function setTaxPercent($tax_percent)
    {
        $this->tax_percent = $tax_percent;
        return $this;
    }

    /**
     * @param float $penalty
     * @return Invoice
     */
    public function setPenalty($penalty)
    {
        $this->penalty = $penalty;
        return $this;
    }

    /**
     * @param PayBefore $pay_before
     * @return Invoice
     */
    public function setPayBefore($pay_before)
    {
        $this->pay_before = $pay_before;
        return $this;
    }

    /**
     * @param float $discount
     * @return Invoice
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @param string $precompte
     * @return Invoice
     */
    public function setPrecompte($precompte)
    {
        $this->precompte = $precompte;
        return $this;
    }

    /**
     * @param string $precompte_title
     * @return Invoice
     */
    public function setPrecompteTitle($precompte_title)
    {
        $this->precompte_title = $precompte_title;
        return $this;
    }

    /**
     * @param bool $service_personne
     * @return Invoice
     */
    public function setServicePersonne($service_personne)
    {
        $this->service_personne = $service_personne;
        return $this;
    }

    /**
     * @param string $accounting_entry
     * @return Invoice
     */
    public function setAccountingEntry($accounting_entry)
    {
        $this->accounting_entry = $accounting_entry;
        return $this;
    }

    /**
     * @param string $information
     * @return Invoice
     */
    public function setInformation($information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * @param string $internal_note
     * @return Invoice
     */
    public function setInternalNote($internal_note)
    {
        $this->internal_note = $internal_note;
        return $this;
    }

    /**
     * @param Customer $user
     * @return Invoice
     */
    public function setUser($user)
    {
        $this->user_id = $user->getId();
        $this->user = $user;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Invoice
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Invoice
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }

    /**
     * @param string $external_ref
     * @return Invoice
     */
    public function setExternalRef($external_ref)
    {
        $this->external_ref = $external_ref;
        return $this;
    }

    /**
     * @param PaymentMode $payment_mode
     * @return Invoice
     */
    public function setPaymentMode($payment_mode)
    {
        $this->payment_mode = $payment_mode;
        return $this;
    }

    /**
     * @param \DateTime $paid_on
     * @return Invoice
     */
    public function setPaidOn($paid_on)
    {
        $this->paid_on = $paid_on;
        return $this;
    }

    /**
     * @param string $payment_ref
     * @return Invoice
     */
    public function setPaymentRef($payment_ref)
    {
        $this->payment_ref = $payment_ref;
        return $this;
    }

    /**
     * @param float $paid_in_euros
     * @return Invoice
     */
    public function setPaidInEuros($paid_in_euros)
    {
        $this->paid_in_euros = $paid_in_euros;
        return $this;
    }

    /**
     * @param Item[] $items
     * @return Invoice
     */
    public function setItems($items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @param int $customer_id
     * @return Invoice
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
        return $this;
    }

    /**
     * @param int $category_id
     * @return Invoice
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @param Followup $followup
     * @return Invoice
     */
    public function setFollowup($followup)
    {
        $this->followup_id = $followup->getId();
        $this->followup = $followup;
        return $this;
    }

    /**
     * @param int $followup_id
     * @return Invoice
     */
    public function setFollowupId($followup_id)
    {
        $this->followup_id = $followup_id;
        return $this;
    }

    /**
     * @param int $user_id
     * @return Invoice
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @param Quote $quote
     * @return Invoice
     */
    public function setQuote($quote)
    {
        $this->quote_id = $quote->getId();
        $this->quote = $quote;
        return $this;
    }

    /**
     * @param int $quote_id
     * @return Invoice
     */
    public function setQuoteId($quote_id)
    {
        $this->quote_id = $quote_id;
        return $this;
    }

    /**
     * @param Invoice $refund
     * @return Invoice
     */
    public function setRefund($refund)
    {
        $this->refund_id = $refund->getId();
        $this->refund = $refund;
        return $this;
    }

    /**
     * @param int $refund_id
     * @return Invoice
     */
    public function setRefundId($refund_id)
    {
        $this->refund_id = $refund_id;
        return $this;
    }
}
?>