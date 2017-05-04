<?php
namespace FacturationPro\Entity;

class CategoryStatus{
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST CATEGORY_STATUS_ACHATS_VENTES = "0";
    CONST CATEGORY_STATUS_ACHATS_UNIQUEMENT = "1";
    CONST CATEGORY_STATUS_VENTES_UNIQUEMENT = "2";

    /** @var array  */
    private $list = array(
        "0"=>'Achats/Ventes',
        '1'=>'Achats uniquement',
        '2'=>'Ventes uniquement'
    );

    /** @var string $reference */
    public function __construct($reference)
    {
        $this->reference = $reference;
        $this->title = $this->list[$this->reference];
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