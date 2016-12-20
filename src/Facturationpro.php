<?php

require_once "Facturationpro/Account.php";
require_once "Facturationpro/Assets.php";
require_once "Facturationpro/Categories.php";
require_once "Facturationpro/Customers.php";
require_once "Facturationpro/Followups.php";
require_once "Facturationpro/Invoices.php";
require_once "Facturationpro/Products.php";
require_once "Facturationpro/Purchases.php";
require_once "Facturationpro/Quotes.php";
require_once "Facturationpro/Suppliers.php";

class Facturationpro {
    
    public $apikey;
    public $ch;
    public $root = 'https://www.facturation.pro/firms/';
    public $debug = false;

    public function __construct($apikey=null) {
        if(!$apikey) throw new Error('You must provide an API key');
        $this->apikey = $apikey;

        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 600);

        $this->root = rtrim($this->root, '/') . '/';

        $this->account = new Facturationpro_Account($this);
        $this->assets = new Facturationpro_Assets($this);
        $this->categories = new Facturationpro_Categories($this);
        $this->customers = new Facturationpro_Customers($this);
        $this->followups = new Facturationpro_Followups($this);
        $this->invoices = new Facturationpro_Invoices($this);
        $this->products = new Facturationpro_Products($this);
        $this->purchases = new Facturationpro_Purchases($this);
        $this->quotes = new Facturationpro_Quotes($this);
        $this->suppliers = new Facturationpro_Suppliers($this);
    }

    public function __destruct() {
        curl_close($this->ch);
    }

    public function call($url, $params) {
        $params['key'] = $this->apikey;
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
        if($result === null) throw new Error('We were unable to decode the JSON response from the Facturationpro API: ' . $response_body);
        
        if(floor($info['http_code'] / 100) >= 4) {
            throw $this->castError($result);
        }

        return $result;
    }

    public function log($msg) {
        if($this->debug) error_log($msg);
    }
}


