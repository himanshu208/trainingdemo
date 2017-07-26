<?php
class Payment_Model extends CI_Model
{
	/********************************
		Start Functions to check and insert data in cart and cart item tables
	*********************************/
		/**Function to check if**/
	function checkExistingCart($cart_data)
	{
		$user_id = $cart_data['user_id'];
		$where_cond = array("user_id"=>$user_id,"status"=>"0");
		$this->db->select("*");
		$this->db->from("cart");
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$cart_info = $query->result();
			$cart_id = $cart_info[0]->id;
			$this->checkExistingCartItem($cart_id,$cart_data);
			$response = array('cart_exist'=>'1');
		}
		else
		{
			$this->createNewCart($cart_data);
			$response = array('cart_exist'=>'0');
		}
		return $response;
	}
		/**Function to check if cart item already exist**/
	function checkExistingCartItem($cart_id,$cart_data)
	{
		$this->db->select("*");
		$this->db->from("cart_item");
		$this->db->where('cart_id',$cart_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$getCartItem = $query->result();
			/*if($getCartItem[0]->course_id!=$cart_data['course_id'])
			{
				$this->updateExistingCart($cart_id);
			}*/
			$this->updateExistingCart($cart_id);
			$this->updateCartItem($cart_id,$cart_data);
		}
		else
		{
			$this->createNewCartItem($cart_id,$cart_data);
		}
	}
		/**Function to update exiting cart item**/
	function updateCartItem($cart_id,$cart_data)
	{
		$cart_data['create_date'] = date('Y-m-d');
		$this->db->where('cart_id', $cart_id);
		$this->db->update('cart_item',$cart_data);
	}
	function updateExistingCart($cart_id)
	{
		$cart_data=array('coupon_id'=>'0');
		$this->db->where('id', $cart_id);
		$this->db->update('cart',$cart_data);
	}	
		/**Function to create new cart**/
	function createNewCart($cart_data)
	{
		$new_cart_data['user_id'] = $cart_data['user_id'];
		$new_cart_data['create_date'] = date('Y-m-d');
		$this->db->insert('cart',$new_cart_data);
		$cart_id = $this->db->insert_id();
		$this->createNewCartItem($cart_id,$cart_data);
	}
		/**Function to insert inew cart item**/
	function createNewCartItem($cart_id,$cart_data)
	{
		$cart_data['cart_id'] = $cart_id;
		$cart_data['create_date'] = date('Y-m-d');
		$this->db->insert('cart_item',$cart_data);
	}
	/********************************
		End Functions to check and insert data in cart and cart item tables
	*********************************/
	
	/********************************
		Start Functions to fetch cart items for payment page
	*********************************/
		/**Function to fetch cart details**/
	function fetchCartDetails($user_id)
	{
		$where_cond = array('user_id'=>$user_id,'status'=>'0');
		$this->db->select('a.*');
		$this->db->from('cart as a');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$result = $query->result();
			$cart_id = $result[0]->id;
			$response = $this->fetchCartItems($user_id,$cart_id);
		}
		else
		{
			$response = array();
		}
		return $response;
	}
	
		/**Function to apply coupon on cart details**/
	function applyCoupon($data_coupon,$cart_id)
	{
		$this->db->where('id',$cart_id);
		if($this->db->update('cart',$data_coupon))
		{
			return true;
		}
		else
		{
			return false;
		}
			
		
	}	
		/**Function to fetch Cart Items**/
	function fetchCartItems($user_id,$cart_id)
	{
		$this->db->select('item1.cart_id,item1.create_date as order_date,item2.name as course_name,item2.image as course_image,item3.*,item5.fixed_percent,item5.value as coupon_value,item4.coupon_id');
		$this->db->from('cart_item as item1');
		$this->db->join('courses as item2','item1.course_id=item2.course_id');
		$this->db->join('batches as item3','item1.batch_id=item3.id');
		$this->db->join('cart as item4','item4.id=item1.cart_id');
		$this->db->join('coupon as item5','item5.id=item4.coupon_id','left');		
		$this->db->where('item1.cart_id',$cart_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}
	
		/**Method to create insert new order in order table**/
	function createOrder($order_data)
	{
		$this->db->insert('order',$order_data);
		$order_id = $this->db->insert_id();
		$response = $this->updateInvoiceId($order_id,$order_data);
		return $response;
	}
		/**function to update invoice id in order table**/
	function updateInvoiceId($order_id,$order_data)
	{
		$orderSaved=$this->getOrderCourse($order_id);
		$courseshortname=strtoupper(substr($orderSaved[0]->course_name,0,2));
		$date_month=date("mdy");
		$invoice_code=$courseshortname.$date_month."#1560023".$order_id;
		$update_data = array('invoice_id'=>$order_id,'invoice_code'=>$invoice_code);
		$this->db->where('id',$order_id);
		$this->db->update('order',$update_data);
		$response = array('order_created'=>'1');
		/*$response = $this->updateCart($order_data); */
		return $response;
	}
	/**function to Get Order Course**/
	function getOrderCourse($order_id)
	{
		$this->db->select("a.name as course_name");
		$this->db->from("courses as a");
		$this->db->join("cart_item as b","b.course_id=a.course_id");
		$this->db->join("cart as c","c.id=b.cart_id");
		$this->db->join("order as d","d.cart_id=c.id");
		$this->db->where("d.id",$order_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;		
	}
	
		/**function to update cart table with status with 1 with cart_id**/
	function updateCart($cart_id)
	{
		
		$update_data = array("status"=>"1");
		$this->db->where('id',$cart_id);
		$this->db->update('cart',$update_data);
		
	}
		/**function to update cart table with status with 1 with cart_id**/
	function checkUserOrder($user_id)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('user_id',$user_id);
		$this->db->where('payment_status',"1");
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	/**function to update cart table with status with 1 with cart_id**/
	function getOrderData($user_id)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('user_id',$user_id);
		$this->db->where('payment_status',"1");
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;

	}	
	/**function to update cart table with status with 1 with cart_id**/
	function checkUserOrderExists($user_id)
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('user_id',$user_id);
		$this->db->where('payment_status',"1");
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}

	}	
	function updateOrder($orderData,$order_id)
	{
		$this->db->where('id',$order_id);
		$this->db->update('order',$orderData);
		
	}
	function checkUserOrderExistsId($user_id)
	{
		$this->db->select('id');
		$this->db->from('order');
		$this->db->where('user_id',$user_id);
		$this->db->where('payment_status',"1");
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}	
		/**function to update cart table with status with 1 with cart_id**/
	function updateOrderStatus($order_id,$cart_id)
	{
		$data_arr=array('is_order_complete'=>"1","payment_status"=>"2");
		$this->db->where('id',$order_id);
		$this->db->update('order',$data_arr);
		$this->updateCart($cart_id);

	}	
		/**Function to fetch cart data in order to update user_enrolled_batches**/
	function fetchCartData($cart_id)
	{
		$this->db->select("*");
		$this->db->from("cart_item");
		$this->db->where("cart_id",$cart_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}
	public function insertUserEnrolledBatch($enrolled_batch_data)
	{
		$this->db->insert('user_enrolled_batches',$enrolled_batch_data);
	}
	/********************************
		End Functions to fetch cart items for payment page
	*********************************/
	/********************************
		Start Functions to fetch Order data
	*********************************/
		/**Function to fetch Order Item details**/
	function fetchUserOrderItemDetails($cart_id,$user_id )
	{
		$where_cond = array('id'=>$cart_id);
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$result = $query->result();
			$cart_id = $result[0]->id;
			$response = $this->fetchCartItems($user_id,$cart_id);
		}
		else
		{
			$response = array();
		}
		return $response;
	}
		/**Function to fetch Order Item details**/
	function fetchUserOrderDetails($order_id)
	{
		$where_cond = array('id'=>$order_id);
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}	
		/**Function to fetch Order Item details**/
	function isCouponCodeUsed($coupon_code,$user_id,$course_id)
	{
		$where_cond = array('b.coupon_code'=>$coupon_code,'a.user_id'=>$user_id,'a.status'=>'1');
		$this->db->select('a.*');
		$this->db->from('cart as a');
		$this->db->from('cart_item as c','c.cart_id=a.id');
		$this->db->join('coupon as b','b.id=a.coupon_id');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}	
	/* Function to get Coupon Details*/
	function getCouponDetails($coupon_code)
	{
		$where_cond = array('coupon_code'=>$coupon_code,'active_status'=>"1");
		$this->db->select('*');
		$this->db->from('coupon');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}	
		/**Function to fetch Order user details**/
	function fetchUserDetails($user_id)
	{
		$where_cond = array('user_id'=>$user_id);
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}	
	/********************************
		End Functions to fetch Order Data
	*********************************/	
}
	
?>