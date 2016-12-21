<?php
class FacturationPro_Account {
    public function __construct(FacturationPro $master) {
        $this->master = $master;
    }

    public function get()
    {
    	return $this->master->call('account.json');
    }
}
?>