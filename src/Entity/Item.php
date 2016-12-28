<?php

class Item {
    /** @var integer */
	protected $id;

    /** @var float */
 	protected $quantity;

    /** @var string */
 	protected $title;

    /** @var float */
 	protected $unit_price;

    /** @var float */
  	protected $vat;

    /** @var Product */
 	protected $product;

    /** @var integer */
 	protected $position;

    /** @var float */
 	protected $total;

    /** @var boolean */
 	protected $optional;

    /** @var string */
 	protected $style;

    /** @var Nature */
	protected $nature;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

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
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @return float
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return bool
     */
    public function isOptional()
    {
        return $this->optional;
    }

    /**
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * @return Nature
     */
    public function getNature()
    {
        return $this->nature;
    }
}
?>