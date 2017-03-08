<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:52 PM
 */
class VatExemptionReason
{
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var  int */
    protected $id;

    /** @var  string */
    protected $title;

    protected $vat_exemption_reason = array('20' => 'art. 259 A.2 du CGI','30' => 'art. 259 A.5 du CGI','40' => 'art. 259 B du CGI','10' => 'art. 259.1 du CGI','60' => 'art. 262 I du CGI','50' => 'art. 262 ter 1 du CGI','70' => 'art. 283.2 du CGI','100' => 'art. 293 B du CGI','1' => 'Autoliquidation');

}