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
    protected $master;

    /** @var  string */
    protected $refence;

    /** @var  string */
    protected $title;

    CONST PAY_BEFORE_COMPTANT = "0";
    CONST PAY_BEFORE_15_JOURS_NETS = "15";
    CONST PAY_BEFORE_30_JOURS_NETS = "30";
    CONST PAY_BEFORE_45_JOURS_NETS = "45";
    CONST PAY_BEFORE_60_JOURS_NETS = "60";
    CONST PAY_BEFORE_7_JOURS_FIN_DE_MOIS = "7fm";
    CONST PAY_BEFORE_30_JOURS_FIN_DE_MOIS = "30fm";
    CONST PAY_BEFORE_45_JOURS_FIN_DE_MOIS = "45fm";
    CONST PAY_BEFORE_FIN_DE_MOIS_LE_10 = "0fm10";
    CONST PAY_BEFORE_FIN_DE_MOIS_LE_20 = "0fm20";
    CONST PAY_BEFORE_30_JOURS_FIN_DE_MOIS_LE_10 = "30fm10";
    CONST PAY_BEFORE_30_JOURS_FIN_DE_MOIS_LE_20 = "30fm20";

    protected $list = array(
        '0' => 'Comptant',
        '15' => '15 jours nets',
        '30' => '30 jours nets',
        '45' => '45 jours nets',
        '60' => '60 jours nets',
        '7fm' => '7 jours fin de mois',
        '30fm' => '30 jours fin de mois',
        '45fm' => '45 jours fin de mois',
        '0fm10' => 'fin de mois le 10',
        '0fm20' => 'fin de mois le 20',
        '30fm10' => '30 jours fin de mois le 10',
        '30fm20' => '30 jours fin de mois le 20'
    );

    /** @var string $reference */
    public function __construct($reference)
    {
        $this->reference = $reference;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getTitle()
    {
        return $this->list[$this->reference];
    }
}