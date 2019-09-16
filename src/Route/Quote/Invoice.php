<?php

namespace FacturationPro\Route\Quote;

use FacturationPro\FacturationPro;

class Invoice
{
    private $entity;
    private $url;
    private $master;

    public function __construct(FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Invoice::class;
        $this->url = "/quotes/";
    }

    public function post($idQuote)
    {
        return $this->master->post(true, $this->url . $idQuote . '/invoice', [], $this->entity, null);
    }
}
