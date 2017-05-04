<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:50 PM
 */

class Currency{
    /** @var  \FacturationPro\FacturationPro */
    protected $master;


    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST CURRENCY_EURO = "EUR";
    CONST CURRENCY_DOLLAR_US = "USD";
    CONST CURRENCY_LIVRE_STERLING = "GBP";
    CONST CURRENCY_FRANC_SUISSE = "CHF";
    CONST CURRENCY_DOLLAR_CANADIEN = "CAD";
    CONST CURRENCY_DOLLAR_AUSTRALIEN = "AUD";
    CONST CURRENCY_DOLLAR_N__O_Z__LANDAIS = "NZD";
    CONST CURRENCY_YEN_JAPONAIS = "JPY";
    CONST CURRENCY_DOLLAR_DE_HONG_KONG = "HKD";
    CONST CURRENCY_YUAN_CHINOIS = "CNY";
    CONST CURRENCY_ROUBLE_RUSSE = "RUB";
    CONST CURRENCY_BAHT_THA__LANDAIS = "THB";
    CONST CURRENCY_COURONNE_DANOISE = "DKK";
    CONST CURRENCY_COURONNE_NORV__GIENNE = "NOK";
    CONST CURRENCY_COURONNE_SU__DOISE = "SEK";
    CONST CURRENCY_COURONNE_TCH__QUE = "CZK";
    CONST CURRENCY_DOLLAR_SINGAPOURIEN = "SGD";
    CONST CURRENCY_FORINT_HONGROIS = "HUF";
    CONST CURRENCY_KUNA_CROATE = "HRK";
    CONST CURRENCY_LATS_LETTON = "LVL";
    CONST CURRENCY_LEU_ROUMAIN = "RON";
    CONST CURRENCY_LEV_BULGARE = "BGN";
    CONST CURRENCY_LITAS_LITUANIEN = "LTL";
    CONST CURRENCY_LIVRE_TURQUE = "TRY";
    CONST CURRENCY_PESO_MEXICAIN = "MXN";
    CONST CURRENCY_PESO_PHILIPPIN = "PHP";
    CONST CURRENCY_RAND_SUD_AFRICAIN = "ZAR";
    CONST CURRENCY_R__AL_BR__SILIEN = "BRL";
    CONST CURRENCY_RINGGIT_MAL__SIEN = "MYR";
    CONST CURRENCY_ROUPIE_INDIENNE = "INR";
    CONST CURRENCY_ROUPIE_INDON__SIENNE = "IDR";
    CONST CURRENCY_SHEKEL_ISRA__LIEN = "ILS";
    CONST CURRENCY_WON_DE_COR__E_DU_SUD = "KRW";
    CONST CURRENCY_ZLOTY_POLONAIS = "PLN";
    CONST CURRENCY_FRANC_CFA__XAF_ = "XAF";
    CONST CURRENCY_FRANC_CFA__XOF_ = "XOF";
    CONST CURRENCY_FRANC_CFP__XPF_ = "XPF";

    protected $list = array(
        "EUR" => 'euro',
        'USD'=> 'dollar US',
        'GBP'=> 'livre sterling',
        'CHF'=> 'franc suisse',
        'CAD'=> 'dollar canadien',
        'AUD'=> 'dollar australien',
        'NZD'=> 'dollar néo-zélandais',
        'JPY'=> 'yen japonais',
        'HKD'=> 'dollar de Hong Kong',
        'CNY'=> 'yuan chinois',
        'RUB'=> 'rouble russe',
        'THB'=> 'baht thaïlandais',
        'DKK'=>'couronne danoise',
        'NOK'=> 'couronne norvégienne',
        'SEK'=> 'couronne suédoise',
        'CZK'=> 'couronne tchèque',
        'SGD'=> 'dollar singapourien',
        'HUF'=> 'forint hongrois',
        'HRK'=> 'kuna croate',
        'LVL'=> 'lats letton',
        'RON'=> 'leu roumain',
        'BGN'=> 'lev bulgare',
        'LTL'=> 'litas lituanien',
        'TRY'=> 'livre turque',
        'MXN'=> 'peso mexicain',
        'PHP'=> 'peso philippin',
        'ZAR'=> 'rand sud africain',
        'BRL'=> 'réal brésilien',
        'MYR'=> 'ringgit malésien',
        'INR'=> 'roupie indienne',
        'IDR'=> 'roupie indonésienne',
        'ILS'=> 'shekel israélien',
        'KRW'=> 'won de Corée du Sud',
        'PLN'=> 'zloty polonais',
        'XAF'=> 'franc CFA (XAF)',
        'XOF'=> 'franc CFA (XOF)',
        'XPF'=> 'franc CFP (XPF)'
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