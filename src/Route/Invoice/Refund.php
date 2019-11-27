<?php

namespace FacturationPro\Route\Invoice;

use FacturationPro\Entity\Invoice;
use FacturationPro\FacturationPro;

class Refund
{
    private $entity;
    private $url;
    private $master;

    public function __construct(FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = Invoice::class;
        $this->url = "/invoices/";
    }

    public function post($invoiceId)
    {
        return $this->master->post(true, $this->url . $invoiceId . '/refund', [], $this->entity, null);
    }
}
