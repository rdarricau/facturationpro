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

    /** @var  Category */
    protected $category;

    /** @var  Followup */
    protected $followup;

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
    const ORDER_CREATED = 'created';
    const ORDER_UPDATED = 'updated';

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
            $params = array(
                "customer_id" => $this->customer->getId()
            );
        if(isset($this->category))
            $params = array(
                "category_id" => $this->category->getId()
            );
        if(isset($this->followup))
            $params = array(
                "followup_id" => $this->followup->getId()
            );

        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
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
     * @param string $quote_ref
     */
    public function setQuoteRef($quote_ref)
    {
        $this->quote_ref = $quote_ref;
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
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param Followup $followup
     */
    public function setFollowup($followup)
    {
        $this->followup = $followup;
    }

    /**
     * @param bool $with_details
     */
    public function setWithDetails($with_details)
    {
        $this->with_details = $with_details;
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