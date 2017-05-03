<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_Model extends CI_Model{

	public $OrderID
	public $ProductID
	public $CustomerID
	public $Quantity;
	
	;

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

	public function get()
	{
		
		$this->db->select('orderId','customerId','productId','quantity');
		$query = $this->db->get('orders');
		return $query->result();
	}



	public function add($orderId,$customerId,$productId,$quantity)
	{
		

		$order = array(
			'orderID' => $id ,
			 'customerID' => $name , 
			 'productID' => $productId,
			 'quantity' => $quantity);

		$this->db->insert('orders',$order);
	}

	public function delete($delid)
	{
		$this->db->where('orderID',$delid);
		$this->db->delete('orders');
	}
}