<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

	
	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->view('page/sign-up',$data);
	}

	public function sign_up()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);

		$this->load->library('form_validation');
		$this->load->model('Customer_model');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[customers.email]',  
			array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        ));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',
			  array(
                'required'      => 'You have not provided %s.',
                'min_length'    => 'Your password must be atleast 8 characters'
        ));
		$this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'required|matches[password]',  array(
                'required'      => 'You have not provided %s.',
                'matches'     => 'These passwords did not match'
        ));
		$this->form_validation->set_rules('name', 'Name', 'required',  array(
                'required'      => 'You have not provided %s.'));

		$this->form_validation->set_rules('dob', 'Birthdate', 'required',  array(
                'required'      => 'You have not provided %s.',
               ));

		if($this->form_validation->run() == TRUE){
			
			
		$password = $this->input->post('password');
		$gender = $this->input->post('gender');
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$dob = $this->input->post('dob');
		$salt = rand(0,9999);
		$hash = md5($password.$salt);

		$this->Customer_model->add($gender,$email,$name,$dob,$salt,$hash);
		}
		else{
			$this->load->view('page/sign-up',$data);
		}
	}
}
