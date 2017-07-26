<?php
class User_Model extends CI_Model
{
	/********************************
			Start Methods used on User Dashboard Page
	*********************************/
	function fecthEnrolledCourseList($user_id)
	{
	  $this->db->distinct();
	  $this->db->select('ueb.course_id,ac.name as course_name');
	  $this->db->from('user_enrolled_batches as ueb');
	  $this->db->join('courses as ac','ac.course_id=ueb.course_id');
	  $this->db->where("ueb.user_id",$user_id);
	  $this->db->group_by("ueb.course_id");
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		// print_r($response);die();
		return $response;
	}
	function fetchCourseWiseLiveClass($user_id,$course_id)
	{
		$this->db->select("lc.*");
		$this->db->select("lc.*,bcs.name as batch_name,tr.name as trainer_name");
		$this->db->from("live_class as lc");
		$this->db->join("batches as bcs","bcs.id=lc.batch_id");
		$this->db->join("trainer as tr","lc.trainter_id=tr.id");
		$this->db->join("user_enrolled_batches as ueb","ueb.batch_id=lc.batch_id");
		$this->db->where("ueb.user_id",$user_id);	
		$this->db->where("ueb.course_id",$course_id);	
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		// print_r($response);die();
		return $response;		 
	}
	/*Function to fetch user classes for home page*/
	function fetchUserClasses($user_id)
	{
		$course_list_arr=$this->fecthEnrolledCourseList($user_id);
		$return_arr=array();
		$count=0;
		foreach($course_list_arr as $course_list)
		{
			$return_arr[$count]['course_name']=$course_list->course_name;
			$return_arr[$count]['course_class_data']=$this->fetchCourseWiseLiveClass($user_id,$course_list->course_id);
			$count++;
		}
		return $return_arr;
	}	
	
	/********************************
		End Methods used on User Dashboard Page
	*********************************/
	
	
	/********************************
			Start Methods used on User Profile Page
	*********************************/
		/*Function to fetch user info for profile page*/
	function fetchUserInfo($user_id)
	{
		$where_cond = array("user_id"=>$user_id);
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where($where_cond);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
		/**Function to update User Information**/
	function updateUserInfo($table,$update_using,$check_value,$new_info)
	{
		$this->db->where($update_using, $check_value);
		if($this->db->update($table,$new_info))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
		/********************************
			End Methods used on User Profile Page
		*********************************/
		
		
		/********************************
			Start Methods used on User Order Page
		*********************************/
		/**Function to user orders from order table**/
	function fetchUserOrders($user_id)
	{
		// $this->db->select('*');
		// $this->db->from('order');
		// $this->db->where('user_id',$user_id);
		// $query = $this->db->get();
		// if($query->num_rows>0)
		// {
			// $response = $query->result();
		// }
		// else
		// {
			// $response = array();
		// }
		// return $response;
		
		
		$this->db->select("ao.*,acs.name as course_name,ab.name as batch_name,ab.start_date as batch_start_date,ab.amount as batch_price,cp.coupon_code,cp.fixed_percent,cp.value,acrt.coupon_id as coupon_apply");
		$this->db->from("order as ao");

		$this->db->join("cart as acrt","ao.cart_id=acrt.id");
		$this->db->join("cart_item as acitem","acrt.id=acitem.cart_id");
		$this->db->join("courses as acs",'acs.course_id=acitem.course_id');
		$this->db->join("batches as ab",'ab.id=acitem.batch_id');
		$this->db->join("coupon as cp",'cp.id=acrt.coupon_id','left');

		
		$this->db->where("ao.user_id",$user_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$user_orders = $query->result();
		}
		else
		{
			$user_orders = array();
		}
		return $user_orders;
		
		
		
	}
		/********************************
			End Methods used on User Order Page
		*********************************/
}
	
?>