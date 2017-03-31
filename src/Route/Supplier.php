<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Supplier
{
    /** @var string */
    protected $url = "suppliers";

    /** @var bool */
    protected $firm = true;

    /** @var int **/
    protected $page;

    /** @var string **/
    protected $api_id;

    /** @var string **/
    protected $api_custom;

    /** @var string **/
    protected $company;

    /** @var bool **/
    protected $with_sepa;
    
    /** @var string **/
    protected $sort;

    /** @var string **/
    protected $order;

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Supplier::class;
    }

    public function getAll()
    {
        $params = array(
            "page" => $this->page,
            "api_id" => $this->api_id,
            "api_custom" => $this->api_custom,
            "company" => $this->company,
            "with_sepa" => $this->with_sepa,
            "sort" => $this->sort,
            "order" => $this->order
        );
        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }    

    public function get($id)
    {
        $params = array(
            "with_sepa" => $this->with_sepa
        );
        return $this->master->get($this->firm,$this->url,$id,$this->entity,"json",$params);
    }

    public function post(\FacturationPro\Entity\Supplier $supplier)
    {
        return $this->master->post($this->firm,$this->url,$supplier,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Supplier $supplier)
    {
        return $this->master->patch($this->firm,$this->url,$supplier->getId(),$supplier,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Supplier $supplier)
    {
        return $this->master->remove($this->firm,$this->url,$supplier->getId());
    }

    /**
     * @param int $page
     * @return Supplier
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Supplier
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Supplier
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }

    /**
     * @param string $company
     * @return Supplier
     */
    public function setCompany($company)
    {
        $this->company = $company;
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
     * @return Supplier
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $order
     * @return Supplier
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return Supplier
     */
    public function reset()
    {
        $this->setPage(null);
        $this->setApiId(null);
        $this->setApiCustom(null);
        $this->setCompany(null);
        $this->setSort(null);
        $this->setOrder(null);
        $this->setWithSepa(null);
        return $this;
    }
}