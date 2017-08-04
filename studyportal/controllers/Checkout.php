<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->checkUserLoginSession();
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/payment
	 *	- or -
	 * 		http://www.janbasktraining.com/Payment/index
	 */
	public function index()
	{
		$this->checkUserLoginSession();
		$user_id = $this->session->userdata("user_id");
		$data['cart_items'] = $this->PM->fetchCartDetails($user_id);
		$this->load->view($this->_checkout,$data);
	}
	
	public function enrollUser()
	{
		// $this->checkUserLoginSession();
		if(isset($_POST['batch_id']) && !empty($_POST['batch_id']))
		{
			// if($this->session->userdata("user_id"))
			// {
				$user_id = $this->session->userdata("user_id");
				if($user_id == "") {
					$user_id = $this->input->post('user_id');
					$admin_user = $this->input->post('admin_user');
					$this->session->set_userdata(array("user_id"=>$user_id,"admin_user"=>$admin_user));
				}
				
				$batch_id = $this->input->post('batch_id');
				$course_id = $this->input->post('course_id');
				$cart_data = array('user_id'=>$user_id,'batch_id'=>$batch_id,'course_id'=>$course_id);
				$check_cart = $this->PM->checkExistingCart($cart_data);
				$response = array('loged_in_user'=>'1','item_added'=>'1','redirect'=>'checkout');
			// }
			// else
			// {
				// $response = array('loged_in_user'=>'0','item_added'=>'0','redirect'=>'login');
			// }
			echo json_encode($response);
		}
		else
		{
			redirect(site_url());
		}
	}
	
		/**Function to add order data to table and redirect to payment gateway**/
	public function processOrder()
	{
		$this->checkUserLoginSession();
		if(isset($_POST['cart_id']) && !empty($_POST['cart_id']))
		{
			$user_id = $this->session->userdata("user_id");
			$cart_id = $this->input->post('cart_id');
			$amount_paid = $this->input->post('amount');
			$currency = 'USD';
			$order_date = date("Y-m-d");
			$checkOrder=$this->PM->checkUserOrder($user_id);
			
				/*Check if user is enrolled from admin*/
			$enrolled_by_admin = "";
			if($this->session->userdata("admin_user")){
				$enrolled_by_admin = $this->session->userdata("admin_user");
			}
				
			
			if($checkOrder)
			{
				
				$orderData=$this->PM->checkUserOrderExistsId($user_id);
				$orderId = $orderData[0]->id;
				$order_data = array("user_id"=>$user_id,"cart_id"=>$cart_id,"amount_paid"=>$amount_paid,"currency"=>$currency,"order_date"=>$order_date,"is_order_complete"=>"0","payment_status"=>'1',"enrolled_by_admin"=>$enrolled_by_admin);
				$response = $this->PM->updateOrder($order_data,$orderId);
				$response = array('order_created'=>'1',"redirect"=>"payment");
			}
			else
			{
				$order_data = array("user_id"=>$user_id,"cart_id"=>$cart_id,"amount_paid"=>$amount_paid,"currency"=>$currency,"order_date"=>$order_date,"is_order_complete"=>"0","payment_status"=>'1',"enrolled_by_admin"=>$enrolled_by_admin);
				$response = $this->PM->createOrder($order_data);
				$response["redirect"] = "payment";
			}
			
			$this->session->unset_userdata('admin_user');
				/*Enroll Admin user directly to course without payment*/
			if($user_id=="3") {
				$admin_order_data = $this->PM->getOrderData($user_id);
				$order_id = $admin_order_data[0]->id;
				$cart_id = $admin_order_data[0]->cart_id;
				$this->PM->updateOrderStatus($order_id,$cart_id);
				$cart_items = $this->PM->fetchCartData($cart_id);
				foreach($cart_items as $cart_item) {
					$enrolled_batch_data = array('course_id'=>$cart_item->course_id,'batch_id'=>$cart_item->batch_id,'user_id'=>$user_id);
					$this->PM->insertUserEnrolledBatch($enrolled_batch_data);
				} 
				$response = array('order_created'=>'1',"redirect"=>"payment-status");
			}
			
			echo json_encode($response);
			die();
			
		}
		else
		{
			redirect(site_url());
		}
	}
	
	/* Function to apply coupon code*/
	public function applyCouponCode()
	{
		$this->checkUserLoginSession();
		if(isset($_POST['COUPON_CODE']) && !empty($_POST['COUPON_CODE']))
		{
			$coupon_code=$_POST['COUPON_CODE'];
			$course_id=$_POST['COURSE_ID'];
			$cart_id=$_POST['CART_ID'];
			$user_id = $this->session->userdata("user_id");
			/* Check Coupon code already used*/
			$couponUsed=$this->PM->isCouponCodeUsed($coupon_code,$user_id,$course_id);
			$couponDetail=$this->PM->getCouponDetails($coupon_code);
			if(!$couponDetail)
			{
				echo json_encode(array("status"=>"0",'coupon_code_status'=>"Invalid coupon code."));
				die();
			}
			else if($couponUsed)
			{
				echo json_encode(array("status"=>"0",'coupon_code_status'=>"You have already used this code."));
				die();
			}
			else 
			{
				/* Check Coupon public */
				

				if($couponDetail[0]->coupon_type=="1" && $couponDetail[0]->course_id!=$course_id)
				{
					echo json_encode(array("status"=>"0",'coupon_code_status'=>"Coupon not valid for this course."));
					die();
				}
				else
				{
					/* Check Coupon Expiry */
					$today_date=date("Y-m-d");
					$couponExpiry=$this->PM->getCouponDetails($coupon_code);
					if( (strtotime($couponExpiry[0]->start_date) <= strtotime($today_date) ) && (strtotime($couponExpiry[0]->expiry_date) >= strtotime($today_date)))
					{
						$data_coupon=array('coupon_id'=>$couponExpiry[0]->id);
						$isApply=$this->PM->applyCoupon($data_coupon,$cart_id);
						if($isApply)
						{
							echo json_encode(array("status"=>"1",'coupon_code_status'=>"Coupon apply successfully."));
							die();
						}
						else
						{
							echo json_encode(array("status"=>"0",'coupon_code_status'=>"There is some problem.Try again."));
							die();
						}
					}
					else 
					{
						echo json_encode(array("status"=>"0",'coupon_code_status'=>"Coupon not applicable."));
						die();	
					}
					
					
				}
				
				
			}
		}
		else
		{
			echo json_encode(array("status"=>"0","msg"=>"Invalid request"));
			die();
		}
		
	}
	

	
}
