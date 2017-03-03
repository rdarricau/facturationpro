<?php
namespace FacturationPro\Route;
use FacturationPro\Entity\Category;
use FacturationPro\Entity\Customer;
use FacturationPro\Entity\Followup;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Quote
{
    /** @var string */
    protected $url = "quotes";

    /** @var bool */
    protected $firm = true;

    /** @var string */
    protected $entity;

    /** @var int **/
    protected $page;

    /** @var string **/
    protected $api_id;

    /** @var string **/
    protected $api_custom;

    /** @var string **/
    protected $quote_ref;

    /** @var Customer **/
    protected $customer;

    /** @var string **/
    protected $title;

    /** @var string **/
    protected $company;

    /** @var string **/
    protected $last_name;

    /** @var string **/
    protected $status;

    /** @var  bool */
    protected $with_details;

    /** @var  \DateTime */
    protected $period_start;

    /** @var  \DateTime */
    protected $period_end;

    /** @var  string */
    protected $sort;

    /** @var  string */
    protected $order;

    const STATUS_PENDING = "pending";
    const STATUS_TO_INVOICE = "to_invoice";
    const STATUS_INVOICED = "invoiced";
    const STATUS_WAITING = "0";
    const STATUS_ACCEPTED = "1";
    const STATUS_LOST = "9";

    const ORDER_CUSTOMER = 'customer';
    const ORDER_TOTAL = 'total';
    const ORDER_BILLED = 'billed';

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Quote::class;
    }

    public function getAll()
    {
        $params = array(
            "page" => $this->page,
            "api_id" => $this->api_id,
            "api_custom" => $this->api_custom,
            "quote_ref" => $this->quote_ref,
            "title" => $this->title,
            "company" => $this->company,
            "last_name" => $this->last_name,
            "status" => $this->status,
            "with_details" => $this->with_details,
            "period_start" => $this->period_start,
            "period_end" => $this->period_end,
            "sort" => $this->sort,
            "order" => $this->order
        );
        if(isset($this->customer))
            $params["customer_id"]= $this->customer->getId();

        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }

    public function get($id)
    {
        $params = array();
        return $this->master->get($this->firm,$this->url,$id,$this->entity,$params);
    }

    public function post(\FacturationPro\Entity\Quote $quote)
    {
        return $this->master->post($this->firm,$this->url,$quote,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Quote $quote)
    {
        return $this->master->patch($this->firm,$this->url,$quote->getId(),$quote,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Quote $quote)
    {
        return $this->master->remove($this->firm,$this->url,$quote->getId());
    }

    /**
     * @param int $page
     * @return Quote
     */
    public function setPage($page)
    {
        $this->page = $page;
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
     * @param string $quote_ref
     * @return Quote
     */
    public function setQuoteRef($quote_ref)
    {
        $this->quote_ref = $quote_ref;
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
     * @param string $title
     * @return Quote
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $company
     * @return Quote
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @param string $last_name
     * @return Quote
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param string $status
     * @return Quote
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param bool $with_details
     * @return Quote
     */
    public function setWithDetails($with_details)
    {
        $this->with_details = $with_details;
        return $this;
    }

    /**
     * @param \DateTime $period_start
     * @return Quote
     */
    public function setPeriodStart($period_start)
    {
        $this->period_start = $period_start;
        return $this;
    }

    /**
     * @param \DateTime $period_end
     * @return Quote
     */
    public function setPeriodEnd($period_end)
    {
        $this->period_end = $period_end;
        return $this;
    }

    /**
     * @param string $sort
     * @return Quote
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $order
     * @return Quote
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }
}