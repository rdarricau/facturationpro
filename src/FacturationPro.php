<?php
namespace FacturationPro;

use FacturationPro\Entity\Account;
use FacturationPro\Entity\Asset;
use FacturationPro\Entity\Category;
use FacturationPro\Entity\CategoryStatus;
use FacturationPro\Entity\Civility;
use FacturationPro\Entity\Country;
use FacturationPro\Entity\Currency;
use FacturationPro\Entity\Customer;
use FacturationPro\Entity\Firm;
use FacturationPro\Entity\Followup;
use FacturationPro\Entity\FollowupStatus;
use FacturationPro\Entity\Invoice;
use FacturationPro\Entity\Item;
use FacturationPro\Entity\Language;
use FacturationPro\Entity\Nature;
use FacturationPro\Entity\Order;
use FacturationPro\Entity\PayBefore;

class FacturationPro {
    
    public $login;
    public $pass;
    public $service;
    public $mail;
    public $currentIdFirm;
    public $root = 'https://www.facturation.pro/';
    public $parser;

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
    }

    public function setFirm($idFirm)
    {
        $this->currentIdFirm = $idFirm;
    }

    public function getAll($url, $params=null) {

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = \Unirest\Request::get($this->root . $url . '.json',array(),$params);
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->body->errors->error[0]);
        }

        return $this->parser->do($response->body,"\\FacturationPro\\Entity\\"."Customer");
    }

    public function get($url) {

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = \Unirest\Request::get($this->root . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->body->errors->error[0]);
        }
        return $this->parser->do($response->body,"Invoice");
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