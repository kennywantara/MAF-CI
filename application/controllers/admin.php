<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['navbar'] = $this->load->view('template/navbar',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->model('Product_model');
		$data['lines'] =  $this->Product_model->getAll();
		$this->load->view('admin/index',$data);
	}

	public function add_process()
	{

	}
}
