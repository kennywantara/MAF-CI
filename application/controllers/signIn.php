<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

	
	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		
		$this->load->view('page/sign-in',$data);
	}

	public function add_process()
	{

	}
}
