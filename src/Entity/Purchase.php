<?php

class Purchase {
    /** @var integer */
 	protected $id;

    /** @var  Supplier */
    protected $supplier;

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
        return $this->supplier;
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
     * @return DateTime
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
}
?>