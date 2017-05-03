<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_Model extends CI_Model{

	public $CustomerID;
	public $FirstName;
	public $LastName;
	public $Address;
	public $Email;
	public $Phone;

	public function update($Id,$firstname,$lastname,$address,$email,$phone)
	{
		

		$customer = array(
			'customerID' => $Id, 
			'firstName' => $firstname, 
			'lastName' => $lastname, 
			'address' => $address, 
			'email' => $email, 
			 'phone' => $phone);
			

		//$this->db->update(namatable,object,where)

		$this->db->update('customers',$customer,array('id' => $Id));
	}

	public function get()
	{
		
		$this->db->select('customerID', 'firstName', 'lastName', 'address', 'email', 'phone');
		$query = $this->db->get('customers');
		return $query->result();
	}



	public function add($Id,$firstname,$lastname,$address,$email,$phone)
	{
		

		$customer = array(
			'customerID' => $Id, 
			'firstName' => $firstname, 
			'lastName' => $lastname, 
			'address' => $address, 
			'email' => $email, 
			 'phone' => $phone);
			

		$this->db->insert('customers',$customer);
	}

	public function delete($delid)
	{
		$this->db->where('customerID',$delid);
		$this->db->delete('customers');
	}
}