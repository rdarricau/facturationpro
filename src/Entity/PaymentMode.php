<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:51 PM
 */

class PaymentMode {
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var  string */
    protected $reference;

    /** @var  string */
    protected $title;

    CONST PAYMENT_MODE_NON_PAYE = "0";
    CONST PAYMENT_MODE_CARTE_BANCAIRE = "2";
    CONST PAYMENT_MODE_CHEQUE = "4";
    CONST PAYMENT_MODE_VIREMENT = "3";
    CONST PAYMENT_MODE_ESPECES = "5";
    CONST PAYMENT_MODE_PAYPAL = "1";
    CONST PAYMENT_MODE_PRELEVEMENT = "8";
    CONST PAYMENT_MODE_TIP_TITRE_INTERBANCAIRE_DE_PAIEMENT = "9";
    CONST PAYMENT_MODE_TICKET_RESTAURANT = "30";
    CONST PAYMENT_MODE_CHEQUE_CADEAU = "31";
    CONST PAYMENT_MODE_CHEQUE_VACANCES = "32";
    CONST PAYMENT_MODE_LCR_LETTRE_DE_CHANGE_RELEVE = "50";
    CONST PAYMENT_MODE_BOR_BILLET_A_ORDRE_RELEVE = "51";
    CONST PAYMENT_MODE_AUTRE = "99";
    CONST PAYMENT_MODE_CREANCE_IRRECOUVRABLE = "999";

    protected $list = array(
        "0" => 'Non payé',
        '2' => 'Carte bancaire',
        '4' => 'Chèque',
        '3' => 'Virement',
        '5' => 'Espèces',
        '1' => 'Paypal',
        '8' => 'Prélèvement',
        '9' => 'TIP (Titre interbancaire de paiement)',
        '30' => 'Ticket restaurant',
        '31' => 'Chèque cadeau',
        '32' => 'Chèque vacances',
        '50' => 'LCR (Lettre de change relevé)',
        '51' => 'BOR (Billet à ordre relevé)',
        '99' => 'Autre',
        '999' => 'Créance irrécouvrable'
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