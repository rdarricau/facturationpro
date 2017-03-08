<?php
namespace FacturationPro\Entity;


class Product {
    /** @var  \FacturationPro\FacturationPro */
    protected $master;

    /** @var integer */
 	protected $id;

    /** @var string */
 	protected $ref;

    /** @var string */
 	protected $title;

    /** @var float */
 	protected $unit_price;

    /** @var float */
 	protected $vat;

    /** @var Nature */
 	protected $nature;

    /** @var Category */
 	protected $category;

    /** @var text */
 	protected $notes;

    /** @var string */
 	protected $field1;

    /** @var string */
 	protected $field2;

    /** @var string */
 	protected $field3;

    /** @var string */
 	protected $field4;

    /** @var string */
 	protected $field5;

    /** @var \DateTime */
 	protected $created_at;

    /** @var \DateTime */
 	protected $updated_at;

    /** @var boolean */
 	protected $soft_deleted;

    /** @var \DateTime */
 	protected $hard_delete_on;

    /** @var string */
 	protected $api_id;

    /** @var string */
 	protected $api_custom;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
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
     * @return Nature
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return text
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * @return string
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * @return string
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * @return string
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * @return string
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return bool
     */
    public function isSoftDeleted()
    {
        return $this->soft_deleted;
    }

    /**
     * @return DateTime
     */
    public function getHardDeleteOn()
    {
        return $this->hard_delete_on;
    }

    /**
     * @return string
     */
    public function getApiId()
    {
        return $this->api_id;
    }

    /**
     * @return string
     */
    public function getApiCustom()
    {
        return $this->api_custom;
    }

    /**
     * @param string $ref
     * @return Product
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @param string $title
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param float $unit_price
     * @return Product
     */
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
        return $this;
    }

    /**
     * @param float $vat
     * @return Product
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @param Nature $nature
     * @return Product
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
        return $this;
    }

    /**
     * @param Category $category
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param text $notes
     * @return Product
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param string $field1
     * @return Product
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;
        return $this;
    }

    /**
     * @param string $field2
     * @return Product
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;
        return $this;
    }

    /**
     * @param string $field3
     * @return Product
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;
        return $this;
    }

    /**
     * @param string $field4
     * @return Product
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;
        return $this;
    }

    /**
     * @param string $field5
     * @return Product
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;
        return $this;
    }

    /**
     * @param string $api_id
     * @return Product
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * @param string $api_custom
     * @return Product
     */
    public function setApiCustom($api_custom)
    {
        $this->api_custom = $api_custom;
        return $this;
    }
}
?>