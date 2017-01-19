<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Order
{
    /** @var string */
    protected $url = "orders";

    /** @var bool */
    protected $firm = true;

    /** @var string */
    protected $entity;

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Order::class;
    }

    public function getAll()
    {
        return $this->master->getAll($this->url,$this->firm, $this->entity);
    }
}