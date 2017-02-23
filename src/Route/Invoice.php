<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Invoice
{
    /** @var string */
    protected $url = "invoices";

    /** @var bool */
    protected $firm = true;

    /** @var string */
    protected $entity;

    /** @var array */
    protected $readable = [
        'id',
        'customer_identity',
        'draft',
        'total',
        'total_with_vat',
        'created_at',
        'updated_at',
        'vat_exemption_reason',
        'vat_exemption_other',
        'quote_id',
        'invoice_ref',
        'refund_id',
        'pay_url',
        'balance',
        'external',
        'soft_deleted',
        'hard_deleted_on'
    ];

    /** @var bool */
    protected $with_details;

    /** @var int */
    protected $page;

    /** @var  string */
    protected $api_id;

    /** @var  string */
    protected $api_custom;

    /** @var  string */
    protected $invoice_ref;

    /** @var  string */
    protected $payment_ref;

    /** @var  string */
    protected $title;

    /** @var  \FacturationPro\Entity\Customer */
    protected $customer;

    /** @var  string */
    protected $company;

    /** @var  string */
    protected $last_name;

    /** @var  string */
    protected $bill_type;

    CONST BILL_TYPE_PAID = "paid";
    CONST BILL_TYPE_UNPAID = "unpaid";
    CONST BILL_TYPE_TERM = "term";
    CONST BILL_TYPE_INVOICE = "invoice";
    CONST BILL_TYPE_EXTERNAL = "external";
    CONST BILL_TYPE_REFUND = "refund";
    CONST BILL_TYPE_DRAFT = "draft";

    /** @var  \FacturationPro\Entity\Category */
    protected $category;

    /** @var  \FacturationPro\Entity\Followup */
    protected $followup;

    /** @var  \DateTime */
    protected $period_start;

    /** @var  \DateTime */
    protected $period_end;

    /** @var  string */
    protected $period_type;

    CONST PERIOD_TYPE_BILLED = "billed";

    /** @var string **/
    protected $sort;

    /** @var  string */
    protected $order;

    CONST ORDER_CUSTOMER = "customer";
    CONST ORDER_PAID = "paid";
    CONST ORDER_TOTAL = "total";
    CONST ORDER_BILLED = "billed";
    CONST ORDER_TERM = "term";
    CONST ORDER_CREATED = "created";
    CONST ORDER_UPDATED = "updated";

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Invoice::class;
    }

    /**
     * @return mixed
     */
    public function getReadable()
    {
        return $this->readable;
    }

    public function getAll()
    {
        $params = array();
        if($this->with_details) $params["with_details"] = $this->with_details;
        if($this->page) $params["page"] = $this->page;
        if($this->api_id) $params["api_id"] = $this->api_id;
        if($this->api_custom) $params["api_custom"] = $this->api_custom;
        if($this->invoice_ref) $params["invoice_ref"] = $this->invoice_ref;
        if($this->payment_ref) $params["payment_ref"] = $this->payment_ref;
        if($this->title) $params["title"] = $this->title;
        if($this->company) $params["company"] = $this->company;
        if($this->bill_type) $params["bill_type"] = $this->bill_type;
        if($this->period_start) $params["period_start"] = $this->period_start->format("m/Y");
        if($this->period_end) $params["period_end"] = $this->period_end->format("m/Y");
        if($this->period_type) $params["period_type"] = $this->period_type;
        if($this->sort) $params["sort"] = $this->sort;
        if($this->order) $params["order"] = $this->order;
        if($this->category) $params["category_id"] = $this->category->getId();
        if($this->category) $params["category_id"] = $this->category->getId();
        if($this->followup) $params["followup_id"] = $this->followup->getId();
        if($this->customer) $params["customer_id"] = $this->customer->getId();
        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }

    public function get($id)
    {
        return $this->master->get($this->firm,$this->url,$id,$this->entity);
    }

    public function post(\FacturationPro\Entity\Invoice $invoice)
    {
        return $this->master->post($this->firm,$this->url,$invoice,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Invoice $invoice)
    {
        $idInvoice = $invoice->getId();
        return $this->master->patch($this->firm,$this->url,$idInvoice,$invoice,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Invoice $invoice)
    {
        return $this->master->remove($this->firm,$this->url,$invoice->getId());
    }

    /**
     * @param bool $with_details
     */
    public function setWithDetails($with_details)
    {
        $this->with_details = $with_details;
    }

    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->page = $page;
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
     * @param string $invoice_ref
     */
    public function setInvoiceRef($invoice_ref)
    {
        $this->invoice_ref = $invoice_ref;
    }

    /**
     * @param string $payment_ref
     */
    public function setPaymentRef($payment_ref)
    {
        $this->payment_ref = $payment_ref;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param int $customer_id
     */
    public function setCustomerId($customer_id)
    {
        $this->customer_id = $customer_id;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @param string $bill_type
     */
    public function setBillType($bill_type)
    {
        $this->bill_type = $bill_type;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @param int $followup_id
     */
    public function setFollowupId($followup_id)
    {
        $this->followup_id = $followup_id;
    }

    /**
     * @param \DateTime $period_start
     */
    public function setPeriodStart($period_start)
    {
        $this->period_start = $period_start;
    }

    /**
     * @param \DateTime $period_end
     */
    public function setPeriodEnd($period_end)
    {
        $this->period_end = $period_end;
    }

    /**
     * @param string $period_type
     */
    public function setPeriodType($period_type)
    {
        $this->period_type = $period_type;
    }

    /**
     * @param string $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    /**
     * @param string $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }
}