<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Purchase
{
    /** @var string */
    protected $url = "purchases";

    /** @var bool */
    protected $firm = true;

    /** @var bool */
    protected $with_details;

    /** @var int */
    protected $page;

    /** @var  string */
    protected $api_id;

    /** @var  string */
    protected $api_custom;

    /** @var  string */
    protected $company;

    /** @var  string */
    protected $title;

    /** @var  string */
    protected $invoice_ref;

    /** @var  string */
    protected $payment_ref;

    /** @var  string */
    protected $serial_number;

    /** @var  string */
    protected $purchase_type;

    CONST PURCHASE_TYPE_PENDING = "pending";
    CONST PURCHASE_TYPE_DRAFT = "draft";
    CONST PURCHASE_TYPE_UNPAID = "unpaid";
    CONST PURCHASE_TYPE_PAID = "paid";
    CONST PURCHASE_TYPE_PREPAID = "prepaid";
    CONST PURCHASE_TYPE_FORECAST = "forecast";

    /** @var string **/
    protected $sort;

    /** @var  string */
    protected $order;

    CONST ORDER_PAID = "paid";
    CONST ORDER_TOTAL = "total";
    CONST ORDER_TERM = "term";

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Purchase::class;
    }

    public function getAll()
    {
        $params = array(
            "with_details" => $this->with_details,
            "page" => $this->page,
            "api_id" => $this->api_id,
            "api_custom" => $this->api_custom,
            "company" => $this->company,
            "title" => $this->title,
            "invoice_ref" => $this->invoice_ref,
            "payment_ref" => $this->payment_ref,
            "serial_number" => $this->serial_number,
            "purchase_type" => $this->purchase_type,
            "sort" => $this->sort,
            "order" => $this->order
        );

        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }    

    public function get($id)
    {
        $params = array();
        return $this->master->get($this->firm,$this->url,$id,$this->entity,$params);
    }

    public function post(\FacturationPro\Entity\Purchase $purchase)
    {
        return $this->master->post($this->firm,$this->url,$purchase,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Purchase $purchase)
    {
        return $this->master->patch($this->firm,$this->url,$purchase->getId(),$purchase,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Purchase $purchase)
    {
        return $this->master->remove($this->firm,$this->url,$purchase->getId());
    }

    /**
     * @param bool $with_details
     * @return Purchase
     */
    public function setWithDetails($with_details)
    {
        $this->with_details = $with_details;
        return $this;
    }

    /**
     * @param int $page
     * @return Purchase
     */
    public function setPage($page)
    {
        $this->page = $page;
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

    /**
     * @param string $company
     * @return Purchase
     */
    public function setCompany($company)
    {
        $this->company = $company;
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
     * @param string $invoice_ref
     * @return Purchase
     */
    public function setInvoiceRef($invoice_ref)
    {
        $this->invoice_ref = $invoice_ref;
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
     * @param string $serial_number
     * @return Purchase
     */
    public function setSerialNumber($serial_number)
    {
        $this->serial_number = $serial_number;
        return $this;
    }

    /**
     * @param string $purchase_type
     * @return Purchase
     */
    public function setPurchaseType($purchase_type)
    {
        $this->purchase_type = $purchase_type;
        return $this;
    }

    /**
     * @param string $sort
     * @return Purchase
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $order
     * @return Purchase
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}