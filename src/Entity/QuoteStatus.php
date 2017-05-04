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

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST QUOTE_STATUS_EN_ATTENTE = "0";
    CONST QUOTE_STATUS_ACCEPTE = "1";
    CONST QUOTE_STATUS_REFUSE = "9";

    protected $list = array(
        "0"=>'En attente',
        '1'=>'Accepté',
        '9'=>'Refusé'
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