<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/28/16
 * Time: 6:51 PM
 */

class PaymentMode {

    /** @var  integer */
    protected $id;

    /** @var  string */
    protected $title;
    protected $payment_mode = array("0" => 'Non payé','2' => 'Carte bancaire','4' => 'Chèque','3' => 'Virement','5' => 'Espèces','1' => 'Paypal','8' => 'Prélèvement','9' => 'TIP (Titre interbancaire de paiement)','30' => 'Ticket restaurant','31' => 'Chèque cadeau','32' => 'Chèque vacances','50' => 'LCR (Lettre de change relevé)','51' => 'BOR (Billet à ordre relevé)','99' => 'Autre','999' => 'Créance irrécouvrable');
}