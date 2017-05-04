<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:54 PM
 */
class Language
{
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST LANGUAGE_FRANCAIS = "fr";
    CONST LANGUAGE_ANGLAIS = "en";

    protected $list = array(
        "fr" => "Français",
        'en'=>'Anglais'
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