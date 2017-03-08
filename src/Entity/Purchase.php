<?php
namespace FacturationPro\Entity;

class Purchase {
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var integer */
 	protected $id;

    /** @var  Supplier */
    protected $supplier;

    /** @var integer */
    protected $supplier_id;

    /** @var  string */
 	protected $title;

    /** @var  string */
 	protected $ref;

    /** @var  float */
 	protected $total_with_vat;

    /** @var  float */
 	protected $vat_amount;

    /** @var  float */
 	protected $total;

    /** @var  Currency */
 	protected $currency;

    /** @var \DateTime */
 	protected $invoiced_on;

    /** @var \DateTime */
 	protected $term_on;

    /** @var \DateTime */
 	protected $paid_on;

    /** @var  PaymentMode */
 	protected $payment_mode;

    /** @var  string */
 	protected $payment_ref;

    /** @var  float */
 	protected $paid_in_euros;

    /** @var  boolean */
 	protected $draft;

    /** @var  boolean */
 	protected $reverse_charge;

    /** @var  boolean */
 	protected $prepaid;

    /** @var  text */
 	protected $notes;

    /** @var  boolean */
 	protected $skip_export;

    /** @var  string */
 	protected $serial_number;

    /** @var  Category */
 	protected $category;

    /** @var  string */
 	protected $accounting_entry;

    /** @var  string */
 	protected $accounting_asset;

    /** @var \DateTime */
 	protected $asset_end_on;

    /** @var  string */
 	protected $asset_end_reason;

    /** @var \DateTime */
 	protected $created_at;

    /** @var \DateTime */
 	protected $updated_at;

    /** @var  boolean */
 	protected $soft_deleted;

    /** @var \DateTime */
 	protected $hard_delete_on;

    /** @var  string */
 	protected $api_id;

    /** @var  string */
 	protected $api_custom;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Supplier
     */
    public function getSupplier()
    {
        $supplier = $this->master->supplier->get($this->supplier_id);
        return $supplier;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @return float
     */
    public function getTotalWithVat()
    {
        return $this->total_with_vat;
    }

    /**
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vat_amount;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
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
     * @return \DateTime
     */
    public function getPaidOn()
    {
        return $this->paid_on;
    }

    /**
     * @return PaymentMode
     */
    public function getPaymentMode()
    {
        return $this->payment_mode;
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
     * @return bool
     */
    public function isDraft()
    {
        return $this->draft;
    }

    /**
     * @return bool
     */
    public function isReverseCharge()
    {
        return $this->reverse_charge;
    }

    /**
     * @return bool
     */
    public function isPrepaid()
    {
        return $this->prepaid;
    }

    /**
     * @return text
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return bool
     */
    public function isSkipExport()
    {
        return $this->skip_export;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serial_number;
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
    public function getAccountingEntry()
    {
        return $this->accounting_entry;
    }

    /**
     * @return string
     */
    public function getAccountingAsset()
    {
        return $this->accounting_asset;
    }

    /**
     * @return DateTime
     */
    public function getAssetEndOn()
    {
        return $this->asset_end_on;
    }

    /**
     * @return string
     */
    public function getAssetEndReason()
    {
        return $this->asset_end_reason;
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
     * @param Supplier $supplier
     * @return Purchase
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
        $this->supplier_id = $supplier->getId();
        return $this;
    }

    /**
     * @param string $title
     * @return Purchase
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $ref
     * @return Purchase
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @param float $total_with_vat
     * @return Purchase
     */
    public function setTotalWithVat($total_with_vat)
    {
        $this->total_with_vat = $total_with_vat;
        return $this;
    }

    /**
     * @param float $vat_amount
     * @return Purchase
     */
    public function setVatAmount($vat_amount)
    {
        $this->vat_amount = $vat_amount;
        return $this;
    }

    /**
     * @param Currency $currency
     * @return Purchase
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param \DateTime $invoiced_on
     * @return Purchase
     */
    public function setInvoicedOn($invoiced_on)
    {
        $this->invoiced_on = $invoiced_on;
        return $this;
    }

    /**
     * @param \DateTime $term_on
     * @return Purchase
     */
    public function setTermOn($term_on)
    {
        $this->term_on = $term_on;
        return $this;
    }

    /**
     * @param \DateTime $paid_on
     * @return Purchase
     */
    public function setPaidOn($paid_on)
    {
        $this->paid_on = $paid_on;
        return $this;
    }

    /**
     * @param PaymentMode $payment_mode
     * @return Purchase
     */
    public function setPaymentMode($payment_mode)
    {
        $this->payment_mode = $payment_mode;
        return $this;
    }

    /**
     * @param string $payment_ref
     * @return Purchase
     */
    public function setPaymentRef($payment_ref)
    {
        $this->payment_ref = $payment_ref;
        return $this;
    }

    /**
     * @param float $paid_in_euros
     * @return Purchase
     */
    public function setPaidInEuros($paid_in_euros)
    {
        $this->paid_in_euros = $paid_in_euros;
        return $this;
    }

    /**
     * @param bool $draft
     * @return Purchase
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;
        return $this;
    }

    /**
     * @param bool $reverse_charge
     * @return Purchase
     */
    public function setReverseCharge($reverse_charge)
    {
        $this->reverse_charge = $reverse_charge;
        return $this;
    }

    /**
     * @param bool $prepaid
     * @return Purchase
     */
    public function setPrepaid($prepaid)
    {
        $this->prepaid = $prepaid;
        return $this;
    }

    /**
     * @param text $notes
     * @return Purchase
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param bool $skip_export
     * @return Purchase
     */
    public function setSkipExport($skip_export)
    {
        $this->skip_export = $skip_export;
        return $this;
    }

    /**
     * @param Category $category
     * @return Purchase
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param string $accounting_entry
     * @return Purchase
     */
    public function setAccountingEntry($accounting_entry)
    {
        $this->accounting_entry = $accounting_entry;
        return $this;
    }

    /**
     * @param string $accounting_asset
     * @return Purchase
     */
    public function setAccountingAsset($accounting_asset)
    {
        $this->accounting_asset = $accounting_asset;
        return $this;
    }

    /**
     * @param \DateTime $asset_end_on
     * @return Purchase
     */
    public function setAssetEndOn($asset_end_on)
    {
        $this->asset_end_on = $asset_end_on;
        return $this;
    }

    /**
     * @param string $asset_end_reason
     * @return Purchase
     */
    public function setAssetEndReason($asset_end_reason)
    {
        $this->asset_end_reason = $asset_end_reason;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Purchase
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Purchase
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }
}
?>