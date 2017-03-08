<?php
namespace FacturationPro;

class FacturationPro {
    
    public $login;
    public $pass;
    public $service;
    public $mail;
    public $currentIdFirm;
    public $apiUrl = 'https://www.facturation.pro/';
    public $parser;

    const SORT_DESC = "desc";
    const SORT_ASC = "asc";

    const ORDER_CREATED = 'created';
    const ORDER_UPDATED = 'updated';

    public function __construct($login=null,$pass=null,$service=null,$mail=null)
    {
        if (!$login) throw new \Error('You must provide a login');
        if (!$pass) throw new \Error('You must provide a pass');
        if (!$service) throw new \Error('You must provide a service name');

        $this->parser = new Parser();
        $this->serializer = new Serializer();

        $this->login = $login;
        $this->pass = $pass;
        $this->service = $service;
        $this->mail = $mail;

        $this->account = new \FacturationPro\Route\Account($this);
        $this->asset = new \FacturationPro\Route\Asset($this);
        $this->category = new \FacturationPro\Route\Category($this);
        $this->customer = new \FacturationPro\Route\Customer($this);
        $this->followup = new \FacturationPro\Route\Followup($this);
        $this->invoice = new \FacturationPro\Route\Invoice($this);
        $this->order = new \FacturationPro\Route\Order($this);
        $this->product = new \FacturationPro\Route\Product($this);
        $this->purchase = new \FacturationPro\Route\Purchase($this);
        $this->quote = new \FacturationPro\Route\Quote($this);
        $this->supplier = new \FacturationPro\Route\Supplier($this);

        \Unirest\Request::auth($this->login,$this->pass);
        \Unirest\Request::defaultHeader('User-Agent', $this->service." (".$this->mail.")");
    }

    public function getAll($firm, $url, $entityClass, $params=null)
    {
        $response = \Unirest\Request::get($this->apiUrl . self::url($firm,$url) . '.json',array(),$params);
        self::getError($response);
        return $this->parser->parse($this,$response->body,$entityClass);
    }

    public function get($firm, $url,$id,$entityClass, $params=null)
    {
        $response = \Unirest\Request::get($this->apiUrl . self::url($firm,$url) .'/'.$id. '.json',array(),$params);
        self::getError($response);
        return $this->parser->parse($this,$response->body,$entityClass);
    }

    public function post($firm, $url, $object, $entityClass, $routeClass)
    {
        $body = \Unirest\Request\Body::json($this->serializer->serialize($object,$routeClass));
        $response = \Unirest\Request::post($this->apiUrl . self::url($firm,$url) . '.json',array("Content-type" => "application/json; charset=utf-8"),$body);
        self::getError($response);
        return $this->parser->parse($this,$response->body,$entityClass);
    }

    public function patch($firm, $url, $id, $object, $entityClass, $routeClass)
    {
        $body = \Unirest\Request\Body::json($this->serializer->serialize($object,$routeClass));
        $response = \Unirest\Request::patch($this->apiUrl . self::url($firm,$url) .'/'.$id. '.json',array("Content-type" => "application/json; charset=utf-8"),$body);
        self::getError($response);
        return $this->parser->parse($this,$response->body,$entityClass);
    }    

    public function remove($firm, $url, $id)
    {
        $response = \Unirest\Request::delete($this->apiUrl . self::url($firm,$url) .'/'.$id. '.json');
        self::getError($response);
        return true;
    }

    public function setFirm($idFirm)
    {
        $this->currentIdFirm = $idFirm;
    }

    public function url($firm,$url)
    {
        if($firm)
        {
            if($this->currentIdFirm)
                $url = 'firms/'.$this->currentIdFirm.'/'.$url;
            else
                throw new \Error("You need to set a firm.");
        }
        return $url;
    }

    public function getError($response)
    {
        if(floor($response->code / 100) >= 4) {
            throw new \Error($response->raw_body);
        }
    }    
}