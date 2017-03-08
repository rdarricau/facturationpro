<?php
namespace FacturationPro\Entity;

class Asset {
    /** @var  \FacturationPro\FacturationPro */
    private $master;

    /** @var  integer */
 	protected $id;

    /** @var  Purchase */
 	protected $purchase;

    /** @var  Invoice */
 	protected $invoice;

    /** @var  Quote */
 	protected $quote;

    /** @var string */
 	protected $document_content_type;

    /** @var string */
 	protected $document_file_name;

    /** @var string */
 	protected $document_file_size;

    /** @var string */
 	protected $download_url;

    /** @var string */
 	protected $title;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Purchase
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * @return Invoice
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * @return Quote
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @return string
     */
    public function getDocumentContentType()
    {
        return $this->document_content_type;
    }

    /**
     * @return string
     */
    public function getDocumentFileName()
    {
        return $this->document_file_name;
    }

    /**
     * @return string
     */
    public function getDocumentFileSize()
    {
        return $this->document_file_size;
    }

    /**
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->download_url;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


}
?>