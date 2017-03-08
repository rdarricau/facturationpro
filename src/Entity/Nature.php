<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:55 PM
 */
class Nature
{
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var  int */
    protected $id;
    /** @var  string */
    protected $title;

    protected $nature = array("1" => "Vente",'2'=>'BIC - Prestations de service commerciales ou artisanales','3'=> 'BNC - Prestation non commerciale','9'=> 'Non applicable');

}