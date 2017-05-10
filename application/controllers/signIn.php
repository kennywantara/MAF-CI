<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->model('Customer_Model');
		$this->load->view('page/sign-in',$data);
	}

	public function sign_in()
	{
		$this->load->model('customer_model');
		$user = $this->customer_model->getUser($this->input->post('username'));
		$password = $this->input->post('password');

		$hash = md5($password.$user->salt);

		if (strcmp($hash, $user->hash) == 0){
			$login = array(
				'name' => $user->name,
				'admin' => FALSE  );
			$this->session->set_userdata($login);
			redirect('Home/index');
		}
		
	}

	public function sign_out(){
		$this->session->unset_userdata('name');
		redirect('Home/index');
	}
}
