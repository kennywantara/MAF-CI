<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
	}

	
	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$data['data'] =  $this->Product_model->getAll();
		$data['bouquet'] =  $this->Product_model->getByCategory('Hand Bouquet');
		$data['graduation'] =  $this->Product_model->getByCategory("Graduation Bouquet");
		$data['box'] =  $this->Product_model->getByCategory("Flower Box");
		$this->load->view('page/products',$data);
	}

	public function checkout(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$data['cart']  = $this->cart->contents();
		$this->load->view('page/checkout',$data);
	}

	public function shopping_cart(){
		$data['cart']  = $this->cart->contents();
		$this->load->view('page/cart',$data);
	}

	public function add(){
		$insert_data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'picture' => $this->input->post('picture'),
                'qty' => 1
                );
		var_dump($insert_data);
    // This function add items into cart.
    $this->cart->insert($insert_data);
    redirect('products/checkout');
	}

	public function remove(){
		$rowid = $this->input->post('rowid');
    // Check rowid value.
    if ($rowid==="all"){
    // Destroy data which store in session.
        $this->cart->destroy();
    }else{
    // Destroy selected rowid in session.
    $data = array(
            'rowid' => $rowid,
            'qty' => 0
            );
    // Update cart data, after cancel.
    $this->cart->update($data);
    }
	}

	public function customOrder(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->view('page/custom-order',$data);

	}
}
