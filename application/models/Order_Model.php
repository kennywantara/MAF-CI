<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_Model extends CI_Model{

	
	
	

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
		
		$this->db->select('orderID','customerID','deliveryAddress','status','totalPrice');
		$query = $this->db->get('orders');
		return $query->result();
	}

		public function getOrder($custID)
	{
		
		$this->db->select('status,orderID');
		$this->db->where('customerID',$custID);
		$query = $this->db->get('orders');
		return $query->result();
	}

	public function getLatest(){
		$this->db->select('orderID,totalPrice');
		$this->db->order_by("orderID", "desc");
		$query = $this->db->get('orders',1);
		return $query->row();
	}

	public function add($custid,$address,$status,$price)
	{
		

		$order = array(
			 'customerID' => $custid , 
			 'deliveryAddress' => $address,
			 'status' => $status,
			  'totalPrice' => $price);

		$this->db->insert('orders',$order);
	}

	public function delete($delid)
	{
		$this->db->where('orderID',$delid);
		$this->db->delete('orders');
	}

	public function addConfirmation($orderid,$bank,$transferMethod,$dateTransfer, $amount, $struk)
	{
		

		$order = array(
			 'orderID' => $orderid , 
			 'bank' => $bank,
			 'transferMethod' => $transferMethod,
			  'dateTransfer' => $dateTransfer,
			  'amount' => $amount,
			  'struk' => $struk);

		$this->db->insert('confirmpayment',$order);
	}

}