<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Model extends CI_Model{

	public $ProductID;
	public $ProductName;
	public $ProductCategory;
	public $ProductPrice;
	public $ProductPicture;

	public function update($id,$name,$category,$price,$picture)
	{
		

		$product = array(
			'productID' => $id ,
			 'productName' => $name , 
			 'productCategory' => $category,
			 'productPrice' => $price,
			 'productPicture' => $picture);

		//$this->db->update(namatable,object,where)

		$this->db->update('products',$product,array('id' => $id));
	}

	public function getAll()
	{
		
		$this->db->select('productID,productName,productCategory,productPrice,productPicture');
		$query = $this->db->get('products');
		return $query->result();
	}

	public function getByID($id)
	{
		
		$this->db->select('productID,productName,productCategory,productPrice,productDescription,productPicture');
		$this->db->where('productID',$id);
		$query = $this->db->get('products');
		return $query->row();
	}

	public function add($id,$name,$category,$price,$picture)
	{
		

		$product = array(
			'productID' => $id ,
			 'productName' => $name , 
			 'productCategory' => $category,
			 'productPrice' => $price,
			 'productPicture' => $picture);

		$this->db->insert('products',$data);
	}

	public function delete($delid)
	{
		$this->db->where('productID',$delid);
		$this->db->delete('products');
	}
}