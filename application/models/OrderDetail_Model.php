<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderDetail_Model extends CI_Model{

	
	
	

	public function update($orderId,$customerId,$productId,$quantity)
	{
		

		$order = array(
			'orderID' => $id ,
			 'customerID' => $name , 
			 'productID' => $productId,
			 'quantity' => $quantity);

		//$this->db->update(namatable,object,where)

		$this->db->update('orders',$order,array('id' => $orderId));
	}

	public function getByID($orderID)
	{
		
		$this->db->select('orderID','productID','quantity','price');
		$query = $this->db->get('order-details');
		return $query->result();
	}

	public function getLatest(){
		$this->db->select('orderID');
		$this->db->order_by("orderID", "desc");
		$query = $this->db->get('orders',1);
		return $query->row();
	}

	public function add($orderid,$prodid,$quantity,$price)
	{
		

		$order = array(
			 'orderID' => $orderid,
			 'productID' => $prodid , 
			 'quantity' => $quantity,
			 'price' => $price
			  );

		$this->db->insert('order-details',$order);
	}

	public function delete($delid)
	{
		$this->db->where('orderID',$delid);
		$this->db->delete('orders');
	}
}