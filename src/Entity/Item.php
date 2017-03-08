<?php
namespace FacturationPro\Entity;

class Item {
    /** @var  \FacturationPro\FacturationPro */
    private $master;

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
    protected $product_id;

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

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param float $quantity
     * @return Item
     */
    public function setQuantity(float $quantity): Item
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @param string $title
     * @return Item
     */
    public function setTitle(string $title): Item
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param float $unit_price
     * @return Item
     */
    public function setUnitPrice(float $unit_price): Item
    {
        $this->unit_price = $unit_price;
        return $this;
    }

    /**
     * @param float $vat
     * @return Item
     */
    public function setVat(float $vat): Item
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @param Product $product
     * @return Item
     */
    public function setProduct(Product $product): Item
    {
        $this->product_id = $product->getId();
        $this->product = $product;
        return $this;
    }

    /**
     * @param int $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }

    /**
     * @param int $position
     * @return Item
     */
    public function setPosition(int $position): Item
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param bool $optional
     * @return Item
     */
    public function setOptional(bool $optional): Item
    {
        $this->optional = $optional;
        return $this;
    }

    /**
     * @param string $style
     * @return Item
     */
    public function setStyle(string $style): Item
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @param Nature $nature
     * @return Item
     */
    public function setNature(Nature $nature): Item
    {
        $this->nature = $nature;
        return $this;
    }
}
?>