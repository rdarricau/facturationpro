<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Account
{
    /** @var \FacturationPro\FacturationPro  */
    protected $master;

    /** @var string */
    protected $url = "account";

    /** @var bool */
    protected $firm = false;

    /** @var string */
    protected $entity;

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Account::class;
    }

    public function get()
    {
        return $this->master->getAll($this->firm,$this->url, $this->entity);
    }
}