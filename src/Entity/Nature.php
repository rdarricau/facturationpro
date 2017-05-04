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
    protected $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST NATURE_VENTE = "1";
    CONST NATURE_BIC_PRESTATIONS_DE_SERVICE_COMMERCIALES_OU_ARTISANALES = "2";
    CONST NATURE_BNC_PRESTATION_NON_COMMERCIALE = "3";
    CONST NATURE_NON_APPLICABLE = "9";

    protected $list = array(
        "1" => "Vente",
        '2'=>'BIC - Prestations de service commerciales ou artisanales',
        '3'=> 'BNC - Prestation non commerciale',
        '9'=> 'Non applicable'
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