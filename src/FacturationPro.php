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
    public $ch;
    public $root = 'https://www.facturation.pro/';
    public $debug = false;

    public function __construct($login=null,$pass=null,$service=null,$mail=null) {
        if(!$login) throw new Error('You must provide a login');
        if(!$pass) throw new Error('You must provide a pass');
        if(!$service) throw new Error('You must provide a service name');
        if(!$mail) throw new Error('You must provide a mail');
        $this->login = $login;
        $this->pass = $pass;
        $this->service = $service;
        $this->mail = $mail;

        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 600);
        curl_setopt($this->ch, CURLOPT_USERAGENT, $this->service." (".$this->mail.")");
        curl_setopt($this->ch, CURLOPT_USERPWD, $this->login.":".$this->pass);

        $this->root = rtrim($this->root, '/') . '/';

        $this->account = new FacturationPro_Account($this);
        $this->assets = new FacturationPro_Assets($this);
        $this->categories = new FacturationPro_Categories($this);
        $this->customers = new FacturationPro_Customers($this);
        $this->followups = new FacturationPro_Followups($this);
        $this->invoices = new FacturationPro_Invoices($this);
        $this->products = new FacturationPro_Products($this);
        $this->purchases = new FacturationPro_Purchases($this);
        $this->quotes = new FacturationPro_Quotes($this);
        $this->suppliers = new FacturationPro_Suppliers($this);
    }

    public function __destruct() {
        curl_close($this->ch);
    }

    public function call($url, $params) {
        if(!$params) $params = "":
        $params = json_encode($params);
        $ch = $this->ch;

        curl_setopt($ch, CURLOPT_URL, $this->root . $url . '.json');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_VERBOSE, $this->debug);

        $start = microtime(true);
        $this->log('Call to ' . $this->root . $url . '.json: ' . $params);
        if($this->debug) {
            $curl_buffer = fopen('php://memory', 'w+');
            curl_setopt($ch, CURLOPT_STDERR, $curl_buffer);
        }

        $response_body = curl_exec($ch);
        $info = curl_getinfo($ch);
        $time = microtime(true) - $start;
        if($this->debug) {
            rewind($curl_buffer);
            $this->log(stream_get_contents($curl_buffer));
            fclose($curl_buffer);
        }
        $this->log('Completed in ' . number_format($time * 1000, 2) . 'ms');
        $this->log('Got response: ' . $response_body);

        if(curl_error($ch)) {
            throw new Error("API call to $url failed: " . curl_error($ch));
        }
        $result = json_decode($response_body, true);
        if($result === null) throw new Error('We were unable to decode the JSON response from the FacturationPro API: ' . $response_body);
        
        if(floor($info['http_code'] / 100) >= 4) {
            throw $this->castError($result);
        }

        return $result;
    }

    public function log($msg) {
        if($this->debug) error_log($msg);
    }
}


