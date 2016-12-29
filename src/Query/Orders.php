<?php
namespace FacturationPro\Query;

class Orders {
    public function __construct(FacturationPro $master) {
        $this->master = $master;
    	if(!isset($this->master->firm))
    		throw new Error('You must provide a firm id');
    }

    public function getAll()
    {
    	return $this->master->get('firms/'.$this->master->firm.'/orders');
    }
}
?>