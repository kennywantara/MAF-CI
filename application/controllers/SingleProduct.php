<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SingleProduct extends CI_Controller {

	
	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$id = $this->input->post('productID');
		$this->load->model('Product_model');
		$data['line'] = $this->Product_model->getByID($id);
		$this->load->view('page/single-product',$data);
	}

}
?>