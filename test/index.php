<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 3:33 PM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../vendor/autoload.php";

const LOGIN = 30017;
const PASS = "hdOxoOG7RLv4jB8vDUGJ";
const SERVICE = "MonsieurGourmand.com";
const MAIL = "remi@monsieurgourmand.com";

$fpro = new \FacturationPro\FacturationPro(LOGIN,PASS,SERVICE,MAIL);
// $account = $fpro->account->get();
// dump($account);
$fpro->setFirm(36588);
// $orders = $fpro->order->getAll();
// dump($orders);
// $fpro->customer->setSort(\FacturationPro\FacturationPro::SORT_DESC);
// $customers = $fpro->customer->getAll();
// dump($customers);
//$customer = $fpro->customer->get(790184);
// dump($customer);
// $fpro->quote->setSort(\FacturationPro\FacturationPro::SORT_DESC);
// $fpro->quote->setCompany("test");
// $quotes = $fpro->quote->getAll();
// dump($quotes);
// $invoices = $fpro->invoice->getAll();
// dump($invoices);
// $invoice = $fpro->invoice->get(1910650);
// dump($invoice);
// $invoice->setTitle("Coucou coucoucoucuoccuocuc");
// $fpro->invoice->patch($invoice);
// $invoice = $fpro->invoice->get(1910650);
// dump($invoice);
//$invoice = new \FacturationPro\Entity\Invoice();

//$item = new \FacturationPro\Entity\Item();
//$item->setTitle("Détail de la facture")
//    ->setQuantity(10)
//    ->setUnitPrice(200.30)
//    ->setVat(0.20);

//$invoice->setTitle("Tentative facture via client")
//        ->setItems(array($item))
//        ->setCustomer($customer);
//$fpro->invoice->post($invoice);

$purchase = $fpro->purchase->get(577061);
$fpro->purchase->reset();
dump($purchase);