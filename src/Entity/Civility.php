<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:56 PM
 */
class Civility
{
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST CIVILITY_M = "M.";
    CONST CIVILITY_MME = "Mme";
    CONST CIVILITY_MLLE = "Mlle";
    CONST CIVILITY_DR = "Dr";
    CONST CIVILITY_ME = "Me";
    CONST CIVILITY_PR = "Pr";

    private $list = array(
        "M."=>'Monsieur',
        'Mme'=>'Madame',
        'Mlle'=>'Mademoiselle',
        'Dr'=>'Docteur',
        'Me'=>'Maître',
        'Pr'=>'Professeur'
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