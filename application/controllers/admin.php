<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('admin.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		if(strcmp($_SESSION['email'],"niaelvina") == 0){ 
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		}
		else{
			redirect('signin/login_admin');
		}

	}

	

	
	public function customers_management()
	{
			$crud = new grocery_CRUD();
			$crud->columns('customerID','gender','email','name','dob','salt','hash');
			$crud->set_table('customers');
			$crud->set_subject('Customer');
			$crud->unset_columns('hash','salt');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function orders_management()
	{
			$crud = new grocery_CRUD();
			$crud->columns('orderID','customerID','deliveryAddress','status','totalPrice');
			$crud->set_relation('customerID','customers','name');
			$crud->display_as('customerID','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();
			$crud->columns('productID','productName','productCategory','productPrice','productDescription','productPicture');
			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('productPrice',array($this,'valueToIDR'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToIDR($value, $row)
	{
		return "Rp.".$value;
	}

	public function orderdetails_management()
	{
		$crud = new grocery_CRUD();

		$crud->columns('orderID','productID','quantity','price');

		
		
		$crud->fields('orderID','productID','quantity','price');
		$crud->required_fields('orderID','productID','quantity','price');
		$crud->set_relation('productID','products','productName');
			$crud->display_as('productID','Products');
			$crud->set_table('orderdetails');
			$crud->set_subject('OrderDetails');
			$crud->unset_add();
			$crud->unset_delete();

		$output = $crud->render();

		$this->_example_output($output);
	}


}
