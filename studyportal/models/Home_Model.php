<?php
class Home_Model extends CI_Model
{
		/********************************
			Start Methods used in Registration Process
		*********************************/
		
	/**Function to fetch Course List from jb_course**/
	function fetchCourseList()
	{
		$this->db->select("*");
		$this->db->from("courses");
		$query = $this->db->get();
		$response = $query->result();
		return $response;
	}
	
	/*Function to Check Existing User while Registration*/
	function checkExistingUser($user_info)
	{
		$email = $user_info["email"];
		$where_cond = array("email"=>$email,"delete_status"=>"0");
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
			$response["mail_exist"] = 1;
		}
		else
		{
			$this->registerNewUser($user_info);
			$response = array("mail_exist"=>"0");
		}
		return $response;
	}
	
		/*Function to register New User after check for existing user*/
	function registerNewUser($user_info)
	{
		$this->db->insert("user",$user_info);
	}
	
		/*Function to check token in order to verify mail*/
	public function userEmailVerify($token)
	{
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("mail_token",$token);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$result = $query->result();
			$mail_token = $result[0]->mail_token;
			$mail_verify_status = $result[0]->email_verified;
			$email = $result[0]->email;
			$name = $result[0]->email;
			if($mail_verify_status=="1")
			{
				$verification_status = array("is_token_verify"=>"0","is_token_valid"=>"1","is_already_verify"=>"1",'email'=>$email,'name'=>$name);
				return $verification_status;
			}
			if($mail_token==$token)
			{
				$this->updateMailVerification($mail_token);
				
				$verification_status = array("is_token_verify"=>"1","is_token_valid"=>"1","is_already_verify"=>"0",'email'=>$email,'name'=>$name);
				return $verification_status;
			}
		}
		else
		{
			$verification_status = array("is_token_verify"=>"0","is_token_valid"=>"0","is_already_verify"=>"0",'email'=>$email,'name'=>$name);
			return $verification_status;
		}
	}
	
		/*Function to update email verification status if token is valid*/
	public function updateMailVerification($mail_token)
	{
		$data = array("email_verified"=>"1");
		$this->db->where("mail_token",$mail_token);
		$this->db->update("user",$data);
	}
		/********************************
			End Methods used in Registration Process
		*********************************/
		
		
		/********************************
			Start Methods used in forget password
		*********************************/
		/*Function to Check Existing User while Password Reset*/
	function PassReset($user_info)
	{
		$email = $user_info["email"];
		$where_cond = array("email"=>$email,"delete_status"=>"0");
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$this->updatePassResetToken($user_info);
			$response = array("mail_exist"=>"1");
		}
		else
		{
			$response = array("mail_exist"=>"0");
		}
		return $response;
	}
	
		/*Function to Update Password Reset Token*/
	function updatePassResetToken($user_info)
	{
		$email = $user_info["email"];
		$this->db->where('email', $email);
		$this->db->update('user',$user_info);
	}
	
		/*Function To check valid token for password reset*/
	function passResetVerify($token)
	{
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("pass_reset_token",$token);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = array("token_exist"=>"1");
		}
		else
		{
			$response = array("token_exist"=>"0");
		}
		return $response;
	}
	
		/**Function to update password**/
	function updatePassword($table,$update_using,$check_value,$new_pass)
	{
		$user_info = array("password"=>$new_pass);
		$this->db->where($update_using, $check_value);
		$this->db->update('user',$user_info);
	}
	
		/**Function to empty the reset token field**/
	function emptyResetToken($token)
	{
		$user_info = array("pass_reset_token"=>"");
		$this->db->where('pass_reset_token', $token);
		$this->db->update('user',$user_info);
	}
		/********************************
			End Methods used in forget password
		*********************************/
		
		
		/********************************
			Start Methods used in Login Process
		*********************************/
	function checkLogin($table,$login_name,$login_pass)
	{
		$where_cond = array("email"=>$login_name,"delete_status"=>"0");
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$result = $query->result();
			$password = $result[0]->password;
			$email_verified = $result[0]->email_verified;
			$user_id = $result[0]->user_id;
			$user_name = $result[0]->name;
			if($login_pass==$password)
			{
				if($email_verified=="0")
				{
					$response = array("mail_exist"=>"1","valid_pass"=>"1","email_verified"=>"0");
				}
				else
				{
					$response = array("mail_exist"=>"1","valid_pass"=>"1","email_verified"=>"1");
					$this->session->set_userdata(array("user_id"=>$user_id,"user_name"=>$user_name));
				}
			}
			if($login_pass!=$password)
			{
				$response = array("mail_exist"=>"1","valid_pass"=>"0","email_verified"=>"0");
			}
		}
		else
		{
			$response = array("mail_exist"=>"0","valid_pass"=>"0","email_verified"=>"0");
		}
		return $response;
	}
		
		/********************************
			Start Methods used in Login Process
		*********************************/
		
		/********************************
			Start Methods used in Enquiry Information Store
		*********************************/	
		/**Function to store Corporate Enquiry **/		
			function saveInstructorEnquiry($data_arr)
			{
				if($this->db->insert('common_enuiry',$data_arr))
				{
					return true;
				}
				return false;
			}
		/**Function to store Corporate Enquiry **/		
			function courseEnquiry($data_arr)
			{
				if($this->db->insert('common_enuiry',$data_arr))
				{
					return true;
				}
				return false;
			}			
		/**Function to store Corporate Enquiry **/		
			function storeCorporateInquirt($data_arr)
			{
				$this->db->insert('common_enuiry',$data_arr);
			}
		/**Function to Non Started Course Enquiry **/		
			function storeNonStartCourseEnquiry($data_arr)
			{
				$this->db->insert('common_enuiry',$data_arr);
			}			
		/**Function to store Future training Enquiry **/		
			function storeFutureTrainingInquirt($data_arr)
			{
				$this->db->insert('common_enuiry',$data_arr);
			}			
		/**Function to store Contact Enquiry **/		
			function storeContactInquirt($data_arr)
			{
				$this->db->insert('common_enuiry',$data_arr);
			}	
			/**Function to store Daily Deals **/		
			function storeDailyDealsEnquiry($data_arr)
			{
				$this->db->select("*");
				$this->db->from("daily_deals");
				$this->db->where($data_arr);
				$query = $this->db->get();
				if($query->num_rows()==0)
				{
					$this->db->insert('daily_deals',$data_arr);
					return true;
				}else{
					return false;
				}
				
			}
		
		/**Function to check Newsletter Email**/
			function checkNewsletterEmail($email)
			{
				$this->db->select("*");
				$this->db->from("newsletter_email");
				$this->db->where("email",$email);
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
		/**Function to store Newsletter Email**/		
			function storeNewsletterEmail($data_arr)
			{
				$this->db->insert('newsletter_email',$data_arr);
			}				
		/********************************
			End Methods used in Enquiry Information Store
		*********************************/		
		
}
	
?>