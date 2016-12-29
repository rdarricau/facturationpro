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
include("parameters.php");

$fpro = new \FacturationPro\FacturationPro(LOGIN,PASS,SERVICE,MAIL);
$account = $fpro->getAll("account");
var_dump($account);