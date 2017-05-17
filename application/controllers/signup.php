<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('Product_model');
    $this->load->model('Customer_model');
  }

	
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
    $login = array(
        'name' => $name,
        'email' => $email );
      $this->session->set_userdata($login);
		$this->load->model('Product_model');
    $data['data'] =  $this->Product_model->getFour();

    $this->load->view('page/home', $data);
    
    }
		else{
			$this->load->view('page/sign-up',$data);
		}
	}

	public function forgot_index(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->view('page/forgotpassword',$data);
	}

	public function forgot_your_password()
	{    
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->library('form_validation');
		$this->load->model('Customer_model');
         $this->form_validation->set_rules('email', 'Email', 'required|valid_email',array(
                'required'      => 'You have not provided %s.',
               ));   
         
         if($this->form_validation->run() == FALSE) {  
              
             $this->load->view('page/forgotpassword',$data);  
         }else{  
             $email = $this->input->post('email');   
             $clean = $this->security->xss_clean($email);  
             $userInfo = $this->Customer_model->getUser($clean);  
           
           if($userInfo){
             	//set token; 
               $token = $this->Customer_model->insertToken($userInfo->customerid); 

             $qstring = $this->base64url_encode($token);

             $url = site_url() . '/signup/token_url/token/' . $qstring;  
             $link = '<a href="' . $url . '">' . $url . '</a>';   
               
             $message = '';             
             $message .= '<strong>Hello, you havve requested for resetting your password </strong><br>';  
             $message .= '<strong>Please open the link below:</strong> ' . $link;         
   
             $email =$userInfo->email;

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
			$this->email->to($clean);
			$this->email->subject('Reset Password');
			$this->email->message($message .'Regards, Madame Antoine Florist');
			$this->email->send();
		}

             $this->session->set_flashdata('fail', 'Recovery email has been sent to your email');  
         
         redirect(site_url('signIn/index'),'refresh');   
             }    
 
           
         
         
     }  
   
     public function token_url()  
     {  

       $token = $this->base64url_decode($this->uri->segment(4));           
       $cleanToken = $this->security->xss_clean($token);  
        $this->load->model('Customer_model');
       $user_info = $this->Customer_model->isTokenValid($cleanToken); //either false or array();          
         
       if(!$user_info){  
         $this->session->set_flashdata('salah', 'Token is not valid/expired');  
         redirect(site_url('signIn/index'),'refresh');   
       }    
   		else{
   			$data['user_info'] = $user_info->customerid;
   			$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->view('page/resetpassword',$data);

       }
   }

       public function resetpassword(){
       	$this->load->library('form_validation');
       	$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
        $user_info = $this->input->post('user_info');
       $this->load->model('Customer_model'); 
       $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');  
       $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'required|matches[password]');         
         
       if ($this->form_validation->run() == FALSE) {  
       $data['user_info'] =  $this->input->post('user_info'); 
         $this->load->view('page/resetpassword',$data);  
       }else{  
		                           
         $post = $this->input->post('password');          
         $cleanPost = $this->security->xss_clean($post);  
         $user_info = $this->Customer_model->getUserByID($user_info);

         $hashed = md5($cleanPost.$user_info->salt);          
         $Post = array('password' => $hashed, 'customerID' => $user_info->customerid );  
        if(!$this->Customer_model->updatePassword($Post)){  
           $this->session->set_flashdata('salah', 'Password has failed to changed');  
         }else{  
           $this->session->set_flashdata('fail', 'Password has successfully changed');  
         }  
         redirect(site_url('signIn/index'),'refresh');         
       }  
   	  }
       
       
   public function base64url_encode($data) {   
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');   
   }   
   
   public function base64url_decode($data) {   
    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));   
   }    
 }  
	



