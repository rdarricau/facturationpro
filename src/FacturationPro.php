<?php

class FacturationPro {
    
    public $apikey;
    public $ch;
    public $root = 'https://mandrillapp.com/api/1.0';
    public $debug = false;

    public function __construct($apikey=null) {
        if(!$apikey) $apikey = getenv('FACTURATIONPRO_APIKEY');
        if(!$apikey) throw new Error('You must provide an API key');
        $this->apikey = $apikey;

        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_USERAGENT, 'Mandrill-PHP/1.0.55');
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 600);

        $this->root = rtrim($this->root, '/') . '/';

        $this->templates = new Mandrill_Templates($this);
        $this->exports = new Mandrill_Exports($this);
        $this->users = new Mandrill_Users($this);
        $this->rejects = new Mandrill_Rejects($this);
        $this->inbound = new Mandrill_Inbound($this);
        $this->tags = new Mandrill_Tags($this);
        $this->messages = new Mandrill_Messages($this);
        $this->whitelists = new Mandrill_Whitelists($this);
        $this->ips = new Mandrill_Ips($this);
        $this->internal = new Mandrill_Internal($this);
        $this->subaccounts = new Mandrill_Subaccounts($this);
        $this->urls = new Mandrill_Urls($this);
        $this->webhooks = new Mandrill_Webhooks($this);
        $this->senders = new Mandrill_Senders($this);
        $this->metadata = new Mandrill_Metadata($this);
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
            throw new Mandrill_HttpError("API call to $url failed: " . curl_error($ch));
        }
        $result = json_decode($response_body, true);
        if($result === null) throw new Mandrill_Error('We were unable to decode the JSON response from the Mandrill API: ' . $response_body);
        
        if(floor($info['http_code'] / 100) >= 4) {
            throw $this->castError($result);
        }

        return $result;
    }

    public function log($msg) {
        if($this->debug) error_log($msg);
    }
}


