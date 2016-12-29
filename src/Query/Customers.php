<?php
namespace Query;

class Customers {

	protected $id;
	protected $company_name;
	protected $civility;
	protected $first_name;
	protected $last_name;
	protected $short_name;
	protected $street;
	protected $city;
	protected $zip_code;
	protected $country;
	protected $phone;
	protected $fax;
	protected $email;
	protected $mobile;
	protected $website;
	protected $notes;
	protected $vat_number;
	protected $siret;
	protected $category_id;
	protected $account_code;
	protected $accounting_entry;
	protected $created_at;
	protected $updated_at;
	protected $api_id;
	protected $api_custom;
	protected $individual;
	protected $reference;
	protected $penalty;
	protected $discount;
	protected $pay_before;
	protected $validity;
	protected $last_invoiced_on;
	protected $last_paid_on;
	protected $currency;
	protected $language;
	protected $default_vat;
	protected $vat_exemption_reason;
	protected $vat_exemption_other;
	protected $sepa_iban;
	protected $sepa_bic;
	protected $sepa_rum;
	protected $field1;
	protected $field2;
	protected $field3;
	protected $field4;
	protected $field5;
	protected $soft_deleted;
	protected $hard_delete_on;

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