<?php
namespace FacturationPro;

class FacturationPro {
    
    public $login;
    public $pass;
    public $service;
    public $mail;
    public $currentIdFirm;
    public $root = 'https://www.facturation.pro/';
    public $parser;

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    public function __construct($login=null,$pass=null,$service=null,$mail=null)
    {
        if (!$login) throw new \Error('You must provide a login');
        if (!$pass) throw new \Error('You must provide a pass');
        if (!$service) throw new \Error('You must provide a service name');

        $this->parser = new Parser();

        $this->login = $login;
        $this->pass = $pass;
        $this->service = $service;
        $this->mail = $mail;

        $this->account = new \FacturationPro\Route\Account($this);
        $this->assets = new \FacturationPro\Route\Asset($this);
        $this->categories = new \FacturationPro\Route\Category($this);
        $this->customers = new \FacturationPro\Route\Customer($this);
        $this->followups = new \FacturationPro\Route\Followup($this);
        $this->invoices = new \FacturationPro\Route\Invoice($this);
        $this->orders = new \FacturationPro\Route\Order($this);
        $this->products = new \FacturationPro\Route\Product($this);
        $this->purchases = new \FacturationPro\Route\Purchase($this);
        $this->quotes = new \FacturationPro\Route\Quote($this);
        $this->suppliers = new \FacturationPro\Route\Supplier($this);
    }

    public function setFirm($idFirm)
    {
        $this->currentIdFirm = $idFirm;
    }

    public function getAll($url, $firm, $entityClass, $params=null) {

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        if($firm)
        {
            if($this->currentIdFirm)
                $url = '/firms/'.$this->currentIdFirm.'/'.$url;
            else
                throw new \Error("You need to set a firm.");
        }
        $response = \Unirest\Request::get($this->root . $url . '.json',array(),$params);
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->body->errors->error[0]);
        }

        return $this->parser->do($response->body,$entityClass);
    }

    public function get($url,$id,$firm,$entityClass) {

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        if($firm)
        {
            if($this->currentIdFirm)
                $url = '/firms/'.$this->currentIdFirm.'/'.$url.'/'.$id;
            else
                throw new \Error("You need to set a firm.");
        }
        $response = \Unirest\Request::get($this->root . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->body->errors->error[0]);
        }
        return $this->parser->do($response->body,$entityClass);
    }

    public function post($url, $body=null) {

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");
        $body = \Unirest\Request\Body::json($body);

        $response = \Unirest\Request::post($this->root . $url . '.json',array(),$body);
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->body->errors->error[0]);
        }

        return $response->body;
    }

    public function patch($url, $body=null) {

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");
        $body = \Unirest\Request\Body::json($body);

        $response = \Unirest\Request::patch($this->root . $url . '.json',array(),$body);
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->body->errors->error[0]);
        }

        return $response->body;
    }    

    public function delete($url) {

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = \Unirest\Request::delete($this->root . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->body->errors->error[0]);
        }

        return $response->body;
    }        
}