<?php
class FacturationPro_Customers {
    public function __construct(FacturationPro $master) {
        $this->master = $master;
    	if(!isset($this->master->firm))
    		throw new Error('You must provide a firm id');
    }
}
?>