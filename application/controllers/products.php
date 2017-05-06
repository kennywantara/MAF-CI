<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	
	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->model('Product_model');
		$data['data'] =  $this->Product_model->getAll();
		$data['bouquet'] =  $this->Product_model->getByCategory('Hand Bouquet');
		$data['graduation'] =  $this->Product_model->getByCategory("Graduation Bouquet");
		$data['box'] =  $this->Product_model->getByCategory("Flower Box");
		$this->load->view('page/products',$data);
	}

	public function add_process()
	{

	}
}
