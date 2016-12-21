<?php

require_once "FacturationPro/Account.php";
require_once "FacturationPro/Assets.php";
require_once "FacturationPro/Categories.php";
require_once "FacturationPro/Customers.php";
require_once "FacturationPro/Followups.php";
require_once "FacturationPro/Invoices.php";
require_once "FacturationPro/Products.php";
require_once "FacturationPro/Purchases.php";
require_once "FacturationPro/Quotes.php";
require_once "FacturationPro/Suppliers.php";

class FacturationPro {
    
    public $login;
    public $pass;
    public $service;
    public $mail;
    public $root = 'https://www.facturation.pro/';

    public function __construct($login=null,$pass=null,$service=null,$mail=null) {
        if(!$login) throw new Error('You must provide a login');
        if(!$pass) throw new Error('You must provide a pass');
        if(!$service) throw new Error('You must provide a service name');
        if(!$mail) throw new Error('You must provide a mail');
        $this->login = $login;
        $this->pass = $pass;
        $this->service = $service;
        $this->mail = $mail;

        $this->account = new FacturationPro_Account($this);
        // With idFirm
        $this->assets = new FacturationPro_Assets($this);
        $this->categories = new FacturationPro_Categories($this);
        $this->customers = new FacturationPro_Customers($this);
        $this->followups = new FacturationPro_Followups($this);
        $this->invoices = new FacturationPro_Invoices($this);
        $this->orders = new FacturationPro_Orders($this);
        $this->products = new FacturationPro_Products($this);
        $this->purchases = new FacturationPro_Purchases($this);
        $this->quotes = new FacturationPro_Quotes($this);
        $this->suppliers = new FacturationPro_Suppliers($this);
    }

    public function call($url, $params=null) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('UserAgent', $this->service." (".$this->mail.")");

        $response = Unirest\Request::get($this->root . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new Error("[".$result['status']."] ".$result['error']);
        }

        return $response->body;
    }
}