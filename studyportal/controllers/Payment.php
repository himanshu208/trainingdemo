<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends Front_Controller
{
	private $stripeSecretKey="sk_live_Xt8s9m9k6cTnacWWvN8Wosj9"; // Stripe Secret Key
    private $stripePublishKey="pk_live_9twRhaRwUoMpRFAsOqxXxtEy"; // Stripe Publishable Key

	public function __construct()
	{
		parent::__construct();
	          $this->load->helper(array('form','url')); 
	          $this->load->library(array('form_validation'));		
		$this->checkUserLoginSession();
	}
	
	
	/********************************
		Start Function related to profile 
	*********************************/
		/*Function to view User Profile Info*/
	public function index()
	{
		$this->checkUserLoginSession();
		$user_id = $this->session->userdata("user_id");
		if(!($this->PM->checkUserOrderExists($user_id)))
		{
			redirect(site_url());
			exit();
		}
	    $arr['title']='Stripe Payment';
	    $arr['stripePublishKey']=$this->stripePublishKey;
	    $arr['error']='';
	    $arr['success']='';
		
		$orderData=$this->PM->getOrderData($user_id);
		
		$arr['amount_paid']=round($orderData[0]->amount_paid,2);;
		$arr['currency']=$orderData[0]->currency;
		//$arr['currency']='1';
		$order_id=$orderData[0]->id;
		$order_description="Payment for Order ID - ".$orderData[0]->invoice_code;
		$cart_id=$orderData[0]->cart_id;
	    $this->form_validation->set_rules('cardholdername',"Card Holder's Name",'trim|required');
	    if($this->form_validation->run()==TRUE){
	         $stripeToken=$this->input->post('stripeToken');
			 $price=round($orderData[0]->amount_paid,2);	 //$this->input->post('price') Static price
			 //$price='1';	 //$this->input->post('price') Static price
			 $this->load->library('stripe_payment'); // load stripe payment libaray
		 $response=$this->stripe_payment->makePayment($this->stripeSecretKey,$stripeToken,$price,$order_description); // call the stripe payment function 
				
		        if($response['success']==1)
				{  // stripe success
					$this->PM->updateOrderStatus($order_id,$cart_id);
					$cart_items = $this->PM->fetchCartData($cart_id);
					foreach($cart_items as $cart_item)
					{
						$enrolled_batch_data = array('course_id'=>$cart_item->course_id,'batch_id'=>$cart_item->batch_id,'user_id'=>$user_id);
						$this->PM->insertUserEnrolledBatch($enrolled_batch_data);
					} 				 
					$this->sendOrderEmail($order_id,$cart_id,$user_id );
		            $arr['success']= 'Your payment was successful.';
					redirect(site_url('payment-status'));
					//$this->load->view($this->_payment,$arr);
		        }else if($response['error']==1){  // stripe error
					$arr['error']=$response['msg'];
					$this->load->view($this->_payment,$arr);
				}else{
				        $arr['error']='Something goes wrong';
					$this->load->view($this->_payment,$arr);
			}
			 
		}else{
		        $this->load->view($this->_payment,$arr);	
		}


	}
	/* Function to send Order Email */
	public function sendOrderEmail($order_id,$cart_id,$user_id)
	{
		$data['cart_data'] = $this->PM->fetchUserOrderItemDetails($cart_id,$user_id);
		$user_detail = $this->PM->fetchUserDetails($user_id);
		$order_data = $this->PM->fetchUserOrderDetails($order_id);
		$data['order_data'] = $order_data;
		$html= $this->load->view($this->_order_complete_email,$data,true);
		$email=$user_detail[0]->email;
		$order_no=$order_data[0]->invoice_code;
		$this->email->clear(TRUE);
        $config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from("info@janbasktraining.com","Janbask Training");
		$this->email->to($email);
		/* $this->email->bcc('navin.3434@gmail.com');  */
		$this->email->subject( 'Thank you for Enrolling at JanBaskTraining! ');
		$this->email->message($html);
		$this->email->send();		
	}	
	/**Function to view the payment status page**/
	public function payment_status()
	{
		$this->checkUserLoginSession();
		$data['any'] = '123';
		$this->load->view($this->_payment_status,$data);
	}	
	/********************************
		End Function related to profile 
	*********************************/
	
}
