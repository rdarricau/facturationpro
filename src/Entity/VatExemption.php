<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:52 PM
 */
class VatExemption
{
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST VAT_EXEMPTION_ART_259_A_2_DU_CGI = "art. 259 A.2 du CGI";
    CONST VAT_EXEMPTION_ART_259_A_5_DU_CGI = "art. 259 A.5 du CGI";
    CONST VAT_EXEMPTION_ART_259_B_DU_CGI = "art. 259 B du CGI";
    CONST VAT_EXEMPTION_ART_259_1_DU_CGI = "art. 259.1 du CGI";
    CONST VAT_EXEMPTION_ART_262_I_DU_CGI = "art. 262 I du CGI";
    CONST VAT_EXEMPTION_ART_262_TER_1_DU_CGI = "art. 262 ter 1 du CGI";
    CONST VAT_EXEMPTION_ART_283_2_DU_CGI = "art. 283.2 du CGI";
    CONST VAT_EXEMPTION_ART_293_B_DU_CGI = "art. 293 B du CGI";
    CONST VAT_EXEMPTION_AUTOLIQUIDATION = "Autoliquidation";

    protected $list = array(
        '20' => 'art. 259 A.2 du CGI',
        '30' => 'art. 259 A.5 du CGI',
        '40' => 'art. 259 B du CGI',
        '10' => 'art. 259.1 du CGI',
        '60' => 'art. 262 I du CGI',
        '50' => 'art. 262 ter 1 du CGI',
        '70' => 'art. 283.2 du CGI',
        '100' => 'art. 293 B du CGI',
        '1' => 'Autoliquidation'
    );

    /** @var string $title */
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}