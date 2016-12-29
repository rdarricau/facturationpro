<?php
namespace Query;

class Account {
    public function __construct(FacturationPro $master) {
        $this->master = $master;
    }

    public function get()
    {
    	return $this->master->get('account');
    }
}
?>