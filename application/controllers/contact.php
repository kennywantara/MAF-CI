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
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userEmail', 'Email', 'required|valid_email',  
			array(
                'required'      => 'You have not provided %s.',
                'valid_email'   => 'You have not provided valid %s'
        ));
		
		if($this->form_validation->run() == TRUE){

		$name = $this->input->post('userName');
		$email = $this->input->post('userEmail');
		$msg = $this->input->post('userMsg');

		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.googlemail.com";
		$config['smtp_user'] = "automessage23@gmail.com";
		$config['smtp_pass'] = "nianiania";
		$config['smtp_port'] = "465";
		$config['charset'] ="iso-8859-1";
		$config['mailtype'] = "html";
		
		$this->load->library('email', $config);
		$this->email->set_crlf("\r\n");
$this->email->set_newline("\r\n");
		$this->email->from('automsg23@gmail.com', 'no-reply-message');
		$this->email->to($email);
		$this->email->subject('Madame Antoine Florist');
$this->email->message('Thank you for contacting us. Your request will be processed soon. Regards, Madame Antoine Florist');
$this->email->send();
		
		 $this->session->set_flashdata('sukses', 'Your email has been successfully sent');  
         
         redirect(site_url('contact/index'),'refresh');
	}
	else{
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		
		$this->load->view('page/contact',$data);
	}
}
}
