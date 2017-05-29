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
		$this->db->select('customerid,email,name,hash,salt');
		$this->db->where('email',$uname);
		$query = $this->db->get('customers');
		return $query->row();

	}

	public function getAdmin($uname){
		$this->db->select('username, nama, salt, hash');
		$this->db->where('username',$uname);
		$query = $this->db->get('user-admin');
		return $query->row();

	}

	public function getUserByID($id){
		$this->db->select('customerid,email,name,hash,salt');
		$this->db->where('customerid',$id);
		$query = $this->db->get('customers');
		return $query->row();

	}

	public function getAllID(){
		$this->db->select('customerID');
		$query = $this->db->get('customers');
		return $query->result();

	}

	public function insertToken($user_id)  
   {    
     $token = substr(sha1(rand()), 0, 30);   
     $date = date('Y-m-d');  
       
     $string = array(  
         'token'=> $token,  
         'customerID'=>$user_id,  
         'created'=>$date  
       );  
     $query = $this->db->insert_string('tokens',$string);  
     $this->db->query($query);  
     return $token . $user_id;  
       
   }  
   
   public function isTokenValid($token)  
   {  
     $tkn = substr($token,0,30);  
     $uid = substr($token,30);     
       
     $q = $this->db->get_where('tokens', array(  
       'tokens.token' => $tkn,   
       'tokens.customerID' => $uid), 1);               
           
     if($this->db->affected_rows() > 0){  
       $row = $q->row();         
         
       $created = $row->created;  
       $createdTS = strtotime($created);  
       $today = date('Y-m-d');   
       $todayTS = strtotime($today);  
         
       if($createdTS != $todayTS){  
         return false;  
       }  
         
       $user_info = $this->getUserByID($row->customerID);  
       return $user_info;  
         
     }else{  
       return false;  
     }  
       
   }   
   
   public function updatePassword($post)  
   {    
     $this->db->where('customerID', $post['customerID']);  
     $this->db->update('customers', array('hash' => $post['password']));      
     return true;  
   }   
   //End: method tambahan untuk reset code  
   
   public function dropToken($id){
   	$this->db->where('token',$id);
   	$this->db->delete('tokens');
   }


	public function add($gender,$email,$name,$dob,$salt,$hash)
	{
		$customer = array(
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