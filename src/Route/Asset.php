<?php
namespace FacturationPro\Route;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 2:55 PM
 */
class Asset
{
        /** @var string */
    protected $url = "assets";

    /** @var bool */
    protected $firm = true;

    /** @var int **/
    protected $page;

    /** @var \FacturationPro\Entity\Quote **/
    protected $quote;

    /** @var string **/
    protected $sort;

    /** @var  string */
    protected $order;

    const ORDER_TITLE = 'title';
    const ORDER_SIZE = 'size';

    public function __construct(\FacturationPro\FacturationPro $master)
    {
        $this->master = $master;
        $this->entity = \FacturationPro\Entity\Asset::class;
    }

    public function getAll()
    {
        $params = array(
            "page" => $this->page,
            "sort" => $this->sort,
            "order" => $this->order
        );
        if(isset($this->quote))
            $params = array(
                "quote_id" => $this->quote->getId()
            );
        return $this->master->getAll($this->firm,$this->url, $this->entity,$params);
    }    

    public function get($id)
    {
        $params = array();
        return $this->master->get($this->firm,$this->url,$id,$this->entity,"json",$params);
    }

    /**
     * @param int $page
     * @return Asset
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @param \FacturationPro\Entity\Quote $quote
     * @return Asset
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;
        return $this;
    }

    /**
     * @param string $sort
     * @return Asset
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @param string $order
     * @return Asset
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return Asset
     */
    public function reset()
    {
        $this->setPage(null);
        $this->setQuote(null);
        $this->setSort(null);
        $this->setOrder(null);
        return $this;
    }
}