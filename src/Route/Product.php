<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Product
{
    /** @var string */
    protected $url = "products";

    /** @var bool */
    protected $firm = true;

    /** @var int **/
    protected $page;

    /** @var string **/
    protected $ref;

    /** @var string **/
    protected $title;

    /** @var string **/
    protected $api_id;

    /** @var string **/
    protected $api_custom;

    /** @var string **/
    protected $sort;

    /** @var  string */
    protected $order;

    const ORDER_REF = 'ref';

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Product::class;
    }

    public function getAll()
    {
        $params = array(
            "page" => $this->page,
            "ref" => $this->ref,
            "title" => $this->title,
            "api_id" => $this->api_id,
            "api_custom" => $this->api_custom,
            "sort" => $this->sort,
            "order" => $this->order
        );
        return $this->master->getAll($this->firm,$this->url, $this->entity);
    }    

    public function get($id)
    {
        $params = array();
        return $this->master->get($this->firm,$this->url,$id,$this->entity,"json",$params);
    }

    public function post(\FacturationPro\Entity\Product $product)
    {
        return $this->master->post($this->firm,$this->url,$product,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Product$product)
    {
        return $this->master->patch($this->firm,$this->url,$product->getId(),$product,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Product $product)
    {
        return $this->master->remove($this->firm,$this->url,$product->getId());
    }

    /**
     * @param int $page
     * @return Product
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param string $ref
     * @return Product
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Product
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Product
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }

    /**
     * @param string $sort
     * @return Product
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $order
     * @return Product
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return Product
     */
    public function reset()
    {
        $this->setPage(null);
        $this->setRef(null);
        $this->setTitle(null);
        $this->setApiId(null);
        $this->setApiCustom(null);
        $this->setSort(null);
        $this->setOrder(null);
        return $this;
    }
}