<?php
class FacturationPro_Orders {
    public function __construct(FacturationPro $master) {
        $this->master = $master;
    	if(!isset($this->master->firm))
    		throw new Error('You must provide a firm id');
    }

    public function get()
    {
    	return $this->master->get('firms/'.$this->master->firm.'/orders');
    }
}
?>