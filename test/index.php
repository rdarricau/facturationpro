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
//$account = $fpro->account->get();
//dump($account);
$fpro->setFirm(36588);
//$orders = $fpro->orders->getAll();
//dump($orders);
//$fpro->customers->setSort(\FacturationPro\FacturationPro::SORT_DESC);
//$customers = $fpro->customers->getAll();
//dump($customers);
//$customer = $fpro->customers->get(443176);
//dump($customer);
//$fpro->quotes->setSort(\FacturationPro\FacturationPro::SORT_DESC);
//$fpro->quotes->setCompany("Marchon");
//$quotes = $fpro->quotes->getAll();
//dump($quotes);
//$invoices = $fpro->invoice->getAll();
//dump($invoices);
/** @var \FacturationPro\Entity\Invoice $invoice */
$invoice = $fpro->invoice->get(1820019);
dump($invoice);
$invoice->setTitle("Coucou coucoucoucuoccuocuc");
$fpro->invoice->patch($invoice);
$invoice = $fpro->invoice->get(1820019);
dump($invoice);