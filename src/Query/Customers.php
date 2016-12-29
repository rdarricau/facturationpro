<?php
namespace FacturationPro\Query;

class Customers {

    public function __construct(FacturationPro $master) {
        $this->master = $master;
    	if(!isset($this->master->firm))
    		throw new Error('You must provide a firm id');
    }

    public function getAll()
    {
    	return $this->master->getAll('firms/'.$this->master->firm.'/customers');
    }

    public function get($idCustomer)
    {
    	return $this->master->get('firms/'.$this->master->firm.'/customers/'.$idCustomer);
    }

    public function post($customer)
    {
    	return $this->master->post('firms/'.$this->master->firm.'/customers',$customer);
    }

    public function patch($idCustomer,$customer)
    {
    	return $this->master->patch('firms/'.$this->master->firm.'/customers/'.$idCustomer,$customer);
    }

    public function delete($idCustomer)
    {
    	return $this->master->delete('firms/'.$this->master->firm.'/customers/'.$idCustomer);
    }
}
?>