<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:57 PM
 */
class FollowupStatus
{
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var  int */
    protected $id;

    /** @var  string */
    protected $title;
    protected $followup_status = array("0"=>'Devis/Factures','1'=>'Devis uniquement','2'=>'Factures uniquement');

}