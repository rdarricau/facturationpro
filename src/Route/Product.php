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

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Product::class;
    }

    public function getAll()
    {
        return $this->master->getAll($this->firm,$this->url, $this->entity);
    }    

    public function get($id)
    {
        $params = array();
        return $this->master->get($this->firm,$this->url,$id,$this->entity,$params);
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
}