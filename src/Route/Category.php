<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Category
{
    /** @var string */
    protected $url = "categories";

    /** @var bool */
    protected $firm = true;

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Category::class;
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

    public function post(\FacturationPro\Entity\Category $category)
    {
        return $this->master->post($this->firm,$this->url,$category,$this->entity,$this);
    }

    public function patch(\FacturationPro\Entity\Category $category)
    {
        return $this->master->patch($this->firm,$this->url,$category->getId(),$category,$this->entity,$this);
    }

    public function remove(\FacturationPro\Entity\Category $category)
    {
        return $this->master->remove($this->firm,$this->url,$category->getId());
    }
}