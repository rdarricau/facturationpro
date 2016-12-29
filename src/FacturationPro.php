<?php

require_once "Parser.php";
require_once "Map.php";

class FacturationPro {
    
    public $login;
    public $pass;
    public $service;
    public $mail;
    public $firm;
    public $root = 'https://www.facturation.pro/';
    public $parser;
    public $map;

    public function __construct($login=null,$pass=null,$service=null,$mail=null)
    {
        if (!$login) throw new Error('You must provide a login');
        if (!$pass) throw new Error('You must provide a pass');
        if (!$service) throw new Error('You must provide a service name');

        $this->map = new Map();
        $this->parser = new Parser();

        $this->login = $login;
        $this->pass = $pass;
        $this->service = $service;
        $this->mail = $mail;
    }

    public function getAll($url, $params=null) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = Unirest\Request::get($this->root . $url . '.json',array(),$params);
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }

        return $this->parser->do($response->body,"Customer");
    }

    public function get($url) {

        Unirest\Request::auth($this->login,$this->pass);
        Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");

        $response = Unirest\Request::get($this->root . $url . '.json');
        if(floor($response->code / 100) >= 4) {
            throw new Error($response->body->errors->error[0]);
        }
        return $this->parser->do($response->body,"Account");
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