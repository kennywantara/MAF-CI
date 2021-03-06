<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Product_model');
		$this->load->model('customer_model');
		$this->load->model('Order_model');
		$this->load->model('OrderDetail_model');
		$this->load->library('form_validation');
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
                'category' => $this->input->post('category'),
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

	public function payment(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$cart  = $this->cart->contents();
		$this->form_validation->set_rules('deliveryAddress', 'DeliveryAddress', 'required|trim',  
			array(
                'required'      => 'You have not provided %s.',
                    ));
		if (empty($cart)){
			$data['login']  = "Your cart cannot be empty";
			$this->load->view('page/checkout',$data);
		}
		else if (!isset($_SESSION['name'])){
			$this->session->set_flashdata('needlogin', 'You need to login first');  
			redirect('signin/index');}
		else if($this->form_validation->run() == true){
			
			$address = $this->input->post('deliveryAddress');
			$note = $this->input->post('notes');
			$price = $this->input->post('total');
			$this->load->model('customer_model');
			$status = "WaitingConfirmation";
			$custID = $this->customer_model->getUser($_SESSION['email']);
			$id = $custID->customerid;
			$this->Order_model->add($id,$address,$status,$price);
			$orderID = $this->Order_model->getLatest();

			$cart = $this->cart->contents();
			foreach ($cart as $data) {
				$this->OrderDetail_model->add($orderID->orderID,$data['id'],$data['qty'],$data['price']);
			}

			$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$data['orderID'] = $orderID->orderID;
		$data['price'] = $orderID->totalPrice;

			 $this->cart->destroy();
			$this->load->view('page/payment',$data);
		
		
			}
		else{
			$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$data['cart']  = $this->cart->contents();
		$this->load->view('page/checkout',$data);
		}

	}
	
	public function confirmPayment(){
		$orderID = $this->uri->segment(3);
		$data['order'] = $orderID;
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$this->load->view('page/confirm-payment',$data);		
	}

	public function profile(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$customerid = $this->customer_model->getUser($_SESSION['email']);
		$data['data'] = $this->Order_model->getOrder($customerid->customerid);
		$this->load->view('page/profile',$data);	
	}

	public function orderdetails(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
		$orderID = $this->uri->segment(3);
		$data['line'] = $this->OrderDetail_model->getProduct($orderID);
		$this->load->view('page/orderdetail',$data);	
	}

	public function confirmYourPayment(){

		
		
		$config['upload_path']          = './img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
             

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('struk'))
                {
                        $data['error'] = array('error' => $this->upload->display_errors());
                        $data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['script'] = $this->load->view('include/script',NULL,TRUE);
		$data['header'] = $this->load->view('template/header',NULL,TRUE);
		$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
                        $this->load->view('page/confirm-payment', $data);
                }
                else
                {
                		$data['style'] = $this->load->view('include/style',NULL,TRUE);
						$data['script'] = $this->load->view('include/script',NULL,TRUE);
						$data['header'] = $this->load->view('template/header',NULL,TRUE);
						$data['footer'] = $this->load->view('template/footer',NULL,TRUE);
                        
                        $picture = $this->upload->data();
						$orderid = $this->input->post('order');
						$bank = $this->input->post('bank');
						$transferMethod = $this->input->post('transfermethod');
						$date = $this->input->post('date');
						$amount = $this->input->post('amountTransfer');
                        $data['line'] = $this->Order_model->addConfirmation($orderid,$bank,$transferMethod,$date,$amount,"img/".$picture['file_name']);
						$customerid = $this->customer_model->getUser($_SESSION['email']);
		$data['data'] = $this->Order_model->getOrder($customerid->customerid);
		$this->load->view('page/profile',$data);	
                }


	
	}

	
}
