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
    protected $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST FOLLOWUP_STATUS_DEVIS_FACTURES = "0";
    CONST FOLLOWUP_STATUS_DEVIS_UNIQUEMENT = "1";
    CONST FOLLOWUP_STATUS_FACTURES_UNIQUEMENT = "2";

    protected $list = array(
        "0"=>'Devis/Factures',
        '1'=>'Devis uniquement',
        '2'=>'Factures uniquement'
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