<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Asset
{
        /** @var string */
    protected $url = "assets";

    /** @var bool */
    protected $firm = true;

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Asset::class;
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
}