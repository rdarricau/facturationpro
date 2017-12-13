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
            $params["category_id"]= $this->category->getId();

        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }

    public function get($id)
    {
        $params = array(
            "with_sepa" => $this->with_sepa
        );
        return $this->master->get($this->firm,$this->url,$id,$this->entity,"json",$params);
    }    

    public function post(\FacturationPro\Entity\Customer $customer)
    {
        if(is_object($customer->getCategory())) $customer->setCategory($customer->getCategory()->getStatus()->getReference());
        if(is_object($customer->getCivility())) $customer->setCivility($customer->getCivility()->getReference());
        if(is_object($customer->getCountry())) $customer->setCountry($customer->getCountry()->getReference());
        if(is_object($customer->getCurrency())) $customer->setCurrency($customer->getCurrency()->getReference());
        if(is_object($customer->getLanguage())) $customer->setLanguage($customer->getLanguage()->getReference());
        if(is_object($customer->getPayBefore())) $customer->setPayBefore($customer->getPayBefore()->getReference());
        if(is_object($customer->getVatExemptionReason())) $customer->setVatExemptionReason($customer->getVatExemptionReason()->getReference());
        return $this->master->post($this->firm,$this->url,$customer,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Customer $customer)
    {
        if(is_object($customer->getCategory())) $customer->setCategory($customer->getCategory()->getStatus()->getReference());
        if(is_object($customer->getCivility())) $customer->setCivility($customer->getCivility()->getReference());
        if(is_object($customer->getCountry())) $customer->setCountry($customer->getCountry()->getReference());
        if(is_object($customer->getCurrency())) $customer->setCurrency($customer->getCurrency()->getReference());
        if(is_object($customer->getLanguage())) $customer->setLanguage($customer->getLanguage()->getReference());
        if(is_object($customer->getPayBefore())) $customer->setPayBefore($customer->getPayBefore()->getReference());
        if(is_object($customer->getVatExemptionReason())) $customer->setVatExemptionReason($customer->getVatExemptionReason()->getReference());
        return $this->master->patch($this->firm,$this->url,$customer->getId(),$customer,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Customer $customer)
    {
        return $this->master->remove($this->firm,$this->url,$customer->getId());
    }

    /**
     * @param int $page
     * @return Customer
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Customer
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Customer
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }

    /**
     * @param string $company
     * @return Customer
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @param string $last_name
     * @return Customer
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param Category $category
     * @return Customer
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param bool $with_sepa
     * @return Customer
     */
    public function setWithSepa($with_sepa)
    {
        $this->with_sepa = $with_sepa;
        return $this;
    }

    /**
     * @param string $sort
     * @return Customer
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $order
     * @return Customer
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return Customer
     */
    public function reset()
    {
        $this->setApiCustom(null);
        $this->setApiId(null);
        $this->setCategory(null);
        $this->setCompany(null);
        $this->setEmail(null);
        $this->setLastName(null);
        $this->setOrder(null);
        $this->setPage(null);
        $this->setSort(null);
        $this->setWithSepa(null);
        return $this;
    }
}
