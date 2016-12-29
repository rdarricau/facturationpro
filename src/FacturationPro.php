<?php

require_once "FacturationPro/Account.php";
require_once "Entity/Account.php";

class FacturationPro {
    
    public $login;
    public $pass;
    public $service;
    public $mail;
    public $firm;
    public $root = 'https://www.facturation.pro/';

    public function __construct($login=null,$pass=null,$service=null,$mail=null) {
        if(!$login) throw new Error('You must provide a login');
        if(!$pass) throw new Error('You must provide a pass');
        if(!$service) throw new Error('You must provide a service name');

        $this->login = $login;
        $this->pass = $pass;
        $this->service = $service;
        $this->mail = $mail;

        $this->account = new FacturationPro_Account($this);
    }

    public function setFirm($firm=null)
    {
        $this->firm = $firm;
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

    public function getAll($url, $params=null) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = Unirest\Request::get($this->root . $url . '.json',array(),$params);
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return $response->body;
    }

    public function get($url) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = Unirest\Request::get($this->root . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return objectToObject($response->body,"Account");
    }

    function objectToObject($instance, $className) {
        return unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen($className),
            $className,
            strstr(strstr(serialize($instance), '"'), ':')
        ));
    }

    public function post($url, $body=null) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");
        $body = Unirest\Request\Body::json($body);

        $response = Unirest\Request::post($this->root . $url . '.json',array(),$body);
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return $response->body;
    }

    public function patch($url, $body=null) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");
        $body = Unirest\Request\Body::json($body);

        $response = Unirest\Request::patch($this->root . $url . '.json',array(),$body);
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return $response->body;
    }    

    public function delete($url) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = Unirest\Request::delete($this->root . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return $response->body;
    }        
}