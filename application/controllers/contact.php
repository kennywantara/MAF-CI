<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		
		$this->load->view('page/contact',$data);
	}

	public function send_email()
	{
		$name = $this->input->post('userName');
		$email = $this->input->post('userEmail');
		$msg = $this->input->post('userMsg');

		$config['protocol'] = "smtp";
		$config['smtp_host'] = "smtp.googlemail.com";
		$config['smtp_user'] = "automessage23@gmail.com";
		$config['smtp_pass'] = "nianiania";
		$config['smtp_port'] = "465";
		$config['charset'] ="iso-8859-1";
		$config['mailtype'] = "html";

		$this->load->library('email', $config);

		$this->email->from('automsg23@gmail.com', 'no-reply-message');
		$this->email->to($email);
		$this->email->subject('Test email from CI and Gmail');
$this->email->message('This is a test.');
$this->email->send();

	}
}
