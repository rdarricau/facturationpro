<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:57 PM
 */
class QuoteStatus
{
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var  int */
    protected $id;

    /** @var  string */
    protected $title;
    protected $quote_status = array("0"=>'En attente','1'=>'Accepté','9'=>'Refusé');
}