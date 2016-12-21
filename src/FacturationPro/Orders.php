<?php
class FacturationPro_Orders {
    public function __construct(FacturationPro $master) {
        $this->master = $master;
    }

    public function get()
    {
    	return $this->master->call('orders');
    }
}
?>