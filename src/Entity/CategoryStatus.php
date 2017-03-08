<?php
namespace FacturationPro\Entity;

class CategoryStatus{
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var int */
    protected $id;

    /** @var  string */
    protected $title;

    protected $category_status = array("0"=>'Achats/Ventes','1'=>'Achats uniquement','2'=>'Ventes uniquement');

}