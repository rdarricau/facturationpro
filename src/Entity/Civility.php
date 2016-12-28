<?php

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:56 PM
 */
class Civility
{
    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;
    protected $civility = array("M."=>'Monsieur','Mme'=>'Madame','Mlle'=>'Mademoiselle','Dr'=>'Docteur','Me'=>'Maître','Pr'=>'Professeur');
}