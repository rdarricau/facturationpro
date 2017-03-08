<?php
namespace FacturationPro\Entity;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 9:13 AM
 */
class Order
{
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var  string */
    protected $title;

    /** @var  float */
    protected $amount;

    /** @var  \DateTime */
    protected $payment_date;

    /** @var  string */
    protected $invoice_url;

    /** @var  boolean */
    protected $refunded;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDate()
    {
        return $this->payment_date;
    }

    /**
     * @return string
     */
    public function getInvoiceUrl()
    {
        return $this->invoice_url;
    }

    /**
     * @return bool
     */
    public function isRefunded()
    {
        return $this->refunded;
    }
}