<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:54 PM
 */
class PayBefore
{
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var  string */
    protected $refence;

    /** @var  string */
    protected $title;
    protected $pay_before = array('0' => 'Comptant','15' => '15 jours nets','30' => '30 jours nets','45' => '45 jours nets','60' => '60 jours nets','7fm' => '7 jours fin de mois','30fm' => '30 jours fin de mois','45fm' => '45 jours fin de mois','0fm10' => 'fin de mois le 10','0fm20' => 'fin de mois le 20','30fm10' => '30 jours fin de mois le 10','30fm20' => '30 jours fin de mois le 20');
}