<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Model extends CI_Model{

	public $CustomerID;
	public $Gender;
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

	public function getAll()
	{
		
		$this->db->select('customerID,firstName,lastName, address, email, phone');
		$query = $this->db->get('customers');
		return $query->result();
	}

	public function getUser($uname){
		$this->db->select('email,name,hash,salt');
		$this->db->where('email',$uname);
		$query = $this->db->get('customers');
		return $query->row();

	}


	public function getAllID(){
		$this->db->select('customerID');
		$query = $this->db->get('customers');
		return $query->result();

	}


	public function add($Id,$gender,$email,$name,$dob,$salt,$hash)
	{
		

		$customer = array(
			'customerID' => $Id, 
			'gender' => $gender,
			'email' => $email, 
			 'name' => $name,
			 'dob' => $dob,
			 'salt' => $salt,
			 'hash' => $hash);
			

		$this->db->insert('customers',$customer);
	}

	public function delete($delid)
	{
		$this->db->where('customerID',$delid);
		$this->db->delete('customers');
	}
}