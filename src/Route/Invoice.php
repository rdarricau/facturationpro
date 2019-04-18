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

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Invoice::class;
    }

    public function getAll()
    {
        $params = array(
            "with_details" => $this->with_details,
            "page" => $this->page,
            "api_id" => $this->api_id,
            "api_custom" => $this->api_custom,
            "invoice_ref" => $this->invoice_ref,
            "payment_ref" => $this->payment_ref,
            "title" => $this->title,
            "company" => $this->company,
            "bill_type" => $this->bill_type,
            "period_type" => $this->period_type,
            "sort" => $this->sort,
            "order" => $this->order
        );
        if(isset($this->period_start))
            $params["period_start"]= $this->period_start->format("m/Y");
        if(isset($this->period_end))
            $params["period_end"]= $this->period_end->format("m/Y");
        if(isset($this->customer))
            $params["customer_id"]= $this->customer->getId();

        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }

    public function get($id,$format="json")
    {
        $params = array();
        return $this->master->get($this->firm,$this->url,$id,$this->entity,$format,$params);
    }

    public function post(\FacturationPro\Entity\Invoice $invoice)
    {
        if($invoice->getPaymentMode()) $invoice->setPaymentMode($invoice->getPaymentMode()->getReference());
        if($invoice->getVatExemption()) $invoice->setVatExemption($invoice->getVatExemption()->getTitle());
        return $this->master->post($this->firm,$this->url,$invoice,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Invoice $invoice)
    {
        if($invoice->getPaymentMode()) $invoice->setPaymentMode($invoice->getPaymentMode()->getReference());
        return $this->master->patch($this->firm,$this->url,$invoice->getId(),$invoice,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Invoice $invoice)
    {
        return $this->master->remove($this->firm,$this->url,$invoice->getId());
    }

    /**
     * @param bool $with_details
     * @return Invoice
     */
    public function setWithDetails($with_details)
    {
        $this->with_details = $with_details;
        return $this;
    }

    /**
     * @param int $page
     * @return Invoice
     */
    public function setPage($page)
    {
        $this->page = $page;
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
     * @param string $invoice_ref
     * @return Invoice
     */
    public function setInvoiceRef($invoice_ref)
    {
        $this->invoice_ref = $invoice_ref;
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
     * @param string $title
     * @return Invoice
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param \FacturationPro\Entity\Customer $customer
     * @return Invoice
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @param string $company
     * @return Invoice
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @param string $last_name
     * @return Invoice
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param string $bill_type
     * @return Invoice
     */
    public function setBillType($bill_type)
    {
        $this->bill_type = $bill_type;
        return $this;
    }

    /**
     * @param \DateTime $period_start
     * @return Invoice
     */
    public function setPeriodStart($period_start)
    {
        $this->period_start = $period_start;
        return $this;
    }

    /**
     * @param \DateTime $period_end
     * @return Invoice
     */
    public function setPeriodEnd($period_end)
    {
        $this->period_end = $period_end;
        return $this;
    }

    /**
     * @param string $period_type
     * @return Invoice
     */
    public function setPeriodType($period_type)
    {
        $this->period_type = $period_type;
        return $this;
    }

    /**
     * @param string $sort
     * @return Invoice
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $order
     * @return Invoice
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return Invoice
     */
    public function reset()
    {
        $this->setSort(null);
        $this->setPage(null);
        $this->setOrder(null);
        $this->setLastName(null);
        $this->setApiCustom(null);
        $this->setApiId(null);
        $this->setBillType(null);
        $this->setCompany(null);
        $this->setCustomer(null);
        $this->setInvoiceRef(null);
        $this->setPaymentRef(null);
        $this->setPeriodEnd(null);
        $this->setPeriodStart(null);
        $this->setPeriodType(null);
        $this->setTitle(null);
        $this->setWithDetails(null);
        return $this;
    }
}