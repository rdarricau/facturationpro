<?php
namespace FacturationPro\Route;
use FacturationPro\Entity\Category;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Customer
{
    /** @var string */
    protected $url = "customers";

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
    protected $company;

    /** @var string **/
    protected $last_name;

    /** @var string **/
    protected $email;

    /** @var Category **/
    protected $category;

    /** @var bool **/
    protected $with_sepa;

    /** @var string **/
    protected $sort;

    /** @var  string */
    protected $order;

    const ORDER_LAST_INVOICE = 'last_invoice';
    const ORDER_LAST_PAID = 'last_paid';
    const ORDER_CREATED = 'created';
    const ORDER_UPDATED = 'updated';

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Customer::class;
    }

    public function getAll()
    {
        $params = array(
            "page" => $this->page,
            "api_id" => $this->api_id,
            "api_custom" => $this->api_custom,
            "company" => $this->company,
            "last_name" => $this->last_name,
            "email" => $this->email,
            "with_sepa" => $this->with_sepa,
            "sort" => $this->sort,
            "order" => $this->order
        );
        if(isset($this->category))
            $params = array(
                "category_id" => $this->category->getId()
            );

        return $this->master->getAll($this->url,$this->firm, $this->entity,$params);
    }

    public function get($idCustomer)
    {
        $params = array(
            "with_sepa" => $this->with_sepa
        );
        return $this->master->get($this->url,$idCustomer,$this->firm, $this->entity);
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
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param bool $with_sepa
     */
    public function setWithSepa($with_sepa)
    {
        $this->with_sepa = $with_sepa;
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