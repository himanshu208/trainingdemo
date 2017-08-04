<?php
class Admin_Model extends CI_Model
{
	/********************************
		Start Methods used on Admin Login Page
	*********************************/
		/*Function to fetch user info for profile page*/
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
			$id = $result[0]->id;
			$name = $result[0]->name;
			if($login_pass==$password)
			{
				if($email_verified=="0")
				{
					$response = array("mail_exist"=>"1","valid_pass"=>"1","email_verified"=>"0");
				}
				else
				{
					$response = array("mail_exist"=>"1","valid_pass"=>"1","email_verified"=>"1");
					if($table=='admin')
					{
						$this->session->set_userdata(array("admin_id"=>$id,"admin_name"=>$name));
					}
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
	function updateAdminPassword($password_arr,$admin_id)
	{
		$this->db->where('id',$admin_id);
		if($this->db->update('admin',$password_arr))
		{
			return true;
		}
		return false;
	}
	/********************************
		End Methods used on Admin Login Page
	*********************************/
	/********************************
		Start Methods used on Admin Student Page 
	*********************************/
	function userList()
	{
		$this->db->select("au.*,ac.country_name,at.state_name,acs.name as course_name,act.city_name");
		$this->db->from("user as au");
		$this->db->join("countries as ac","ac.country_id=au.country",'left');
		$this->db->join("states as at","at.state_id=au.state",'left');
		$this->db->join("courses as acs",'acs.course_id=au.course_interest','left');
		$this->db->join("cities as act",'act.city_id=au.city','left');
		$this->db->order_by('au.user_id desc');
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
	/********************************
		End Methods used on Admin Student Page
	*********************************/	
	
	
		/********************************
		Start Methods used on Admin Enrolled Student Page 
	*********************************/
	function enrolleduserList()
	{
		$this->db->select("au.*,acs.name as course_name,ab.name as batch_name,ao.order_date as enrolled_date,ac.country_name,at.state_name,act.city_name");
		$this->db->from("user as au");
		$this->db->join("order as ao","au.user_id=ao.user_id");
		$this->db->join("cart as acrt","ao.cart_id=acrt.id");
		$this->db->join("cart_item as acitem","acrt.id=acitem.cart_id");
		$this->db->join("courses as acs",'acs.course_id=acitem.course_id');
		$this->db->join("batches as ab",'ab.id=acitem.batch_id');
		
		$this->db->join("countries as ac","ac.country_id=au.country",'left');
		$this->db->join("states as at","at.state_id=au.state",'left');
		
		$this->db->join("cities as act",'act.city_id=au.city','left');
		$this->db->where("ao.is_order_complete","1");
		$this->db->where("ao.payment_status","2");
		$this->db->order_by('au.user_id desc');
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$enrolled_users = $query->result();
		}
		else
		{
			$enrolled_users = array();
		}
		return $enrolled_users;
	}	
	function updateStatus($data,$id)
	{
		$this->db->where('user_id',$id);
		if($this->db->update('jb_user',$data))
		{
			//echo $this->db->last_query();
			return true;
		}
		else
		{
			return false;
		}
		
	}
	/********************************
		End Methods used on Admin Enrolled Student Page
	*********************************/	
	
	
	/********************************
		Start Methods used on Admin Courses Page
	*********************************/
	/**Function to fetch currency list from currency table**/
	/*function fetchCurrencyList()
	{
		$this->db->select("*");
		$this->db->from('currency');
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$currency = $query->result();
		}
		else
		{
			$currency = array();
		}
		return $currency;
	}*/
	function checkExistingCourse($name)
	{
		$this->db->select("*");
		$this->db->from("courses");
		$this->db->like("name",$name);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$course_exist = $query->result();
		}
		else
		{
			$course_exist = array();
		}
		return $course_exist;
	}
	function checkExistingCourseUpdate($name,$course_id)
	{
		$this->db->select("*");
		$this->db->from("courses");
		$this->db->where("name",$name);
		$this->db->where("course_id !=",$course_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$course_exist = $query->result();
		}
		else
		{
			$course_exist = array();
		}
		return $course_exist;
	}	
	function inesertNewCourse($course_data)
	{
		if($this->db->insert('courses',$course_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}
	function updateCourse($course_data,$course_id)
	{
		$this->db->where('course_id',$course_id);
		if($this->db->update('courses',$course_data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
		/**Function to fetch course with active status 1 from trainer table**/
	function courseList()
	{
		$where_cond = array('active_status'=>'1');
		$this->db->select("*");
		$this->db->from('courses');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$courses = $query->result();
		}
		else
		{
			$courses = array();
		}
		return $courses;
	}	
		/**Function to get single course details**/
	function getSingleCourseData($batch_id)
	{
		$where_cond = array('course_id'=>$batch_id);
		$this->db->select("*");
		$this->db->from('courses');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batch_data = $query->result();
		}
		else
		{
			$batch_data = array();
		}
		return $batch_data;
	}	
	/********************************
		Start Methods used on Admin Courses Page
	*********************************/
	
	/********************************
		Start Methods used on Admin Batches Page
	*********************************/
		/**Function to insert new batch into batches table**/
	function inesertNewBatch($batch_data)
	{
		if($this->db->insert('batches',$batch_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}
		/**Function to update batch into batches table**/
	function UpdateBatch($batch_data,$batch_id)
	{
		$this->db->where('id',$batch_id);
		if($this->db->update('batches',$batch_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}	
		/**Function to insert new batch into batches table**/
	function getSingleBatchData($batch_id)
	{
		$where_cond = array('id'=>$batch_id);
		$this->db->select("*");
		$this->db->from('batches');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batch_data = $query->result();
		}
		else
		{
			$batch_data = array();
		}
		return $batch_data;
	}	
		/**Function to fetch batch with active status 1 from trainer table**/
	function batchList()
	{
		$where_cond = array('ab.active_status'=>'1');
		$this->db->select("ab.*,ac.name as course_name");
		$this->db->from('batches as ab');
		$this->db->join('courses as ac','ac.course_id=ab.course_id');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batches = $query->result();
		}
		else
		{
			$batches = array();
		}
		return $batches;
	}		
	/********************************
		End Methods used on Admin Batches Page
	*********************************/
	
	
	/********************************
		Start Methods used on Admin Classes Page
	*********************************/
		/**Function to fetch batches with active status 1 from batches table**/
	function fetchActiveBatches()
	{
		$where_cond = array('active_status'=>'1');
		$this->db->select("*");
		$this->db->from('batches');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batches = $query->result();
		}
		else
		{
			$batches = array();
		}
		return $batches;
	}
	/**Function to fetch trainers with active status 1 from trainers table**/
	function fetchActiveTrainers()
	{
		$where_cond = array('active_status'=>'1');
		$this->db->select("*");
		$this->db->from('trainer');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$trainers = $query->result();
		}
		else
		{
			$trainers = array();
		}
		return $trainers;
	}
	/**Function to fetch course based on batch selected in add new class page**/
	function fetchbatchForClass($course_id)
	{
		$where_cond = array('course_id'=>$course_id);
		$this->db->select("*");
		$this->db->from('batches');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batch_details = $query->result();
		}
		else
		{
			$batch_details = array();
		}
		return $batch_details;
	}
		/**Function to insert new class data into live_class table**/
	function inesertNewClass($class_data)
	{
		if($this->db->insert('live_class',$class_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}
		/**Function to insert new class data into live_class table**/
	function updateClass($class_data,$live_class_id)
	{
		$this->db->where('id',$live_class_id);
		if($this->db->update('live_class',$class_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}	
		/**Function to get single course details**/
	function getSingleLiveClassData($live_class_id)
	{
		$where_cond = array('id'=>$live_class_id);
		$this->db->select("*");
		$this->db->from('live_class');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batch_data = $query->result();
		}
		else
		{
			$batch_data = array();
		}
		return $batch_data;
	}	

	/**Function to fetch live class with active status 1 from trainer table**/
	function liveClassList()
	{
		$this->db->select("alc.*,ac.name as course_name,ab.name as batch_name,at.name as trainer_name");
		$this->db->from('live_class as alc');
		$this->db->join('courses as ac','ac.course_id=alc.course_id');
		$this->db->join('batches as ab','ab.id=alc.batch_id');
		$this->db->join('trainer as at','at.id=alc.trainter_id');
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batches = $query->result();
		}
		else
		{
			$batches = array();
		}
		return $batches;
	}
		/**Function to check id a url is already exist**/
	function checkExistingUrl($class_id)
	{
		$this->db->select("*");
		$this->db->from("live_class");
		$this->db->where("id",$class_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$class_data = $query->result();
		}
		else
		{
			$class_data = array();
		}
		return $class_data;
	}
		/**Method to update live class url**/
	function updateClassUrl($id,$update_data)
	{
		$this->db->where('id',$id);
		if($this->db->update('live_class',$update_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}
		/**Method to update class data after class end**/
	function updateClassData($id,$update_data)
	{
		$this->db->where('id',$id);
		if($this->db->update('live_class',$update_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}
		/**Method to fetch enrolled users based on batch id while starting the class**/
	function fetchClassEnrolledUsers($batch_id)
	{
		$this->db->select("*");
		$this->db->from("user_enrolled_batches");
		$this->db->where("batch_id",$batch_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$users = $query->result();			
		}
		else
		{
			$users = array();
		}
		return $users;
	}
		/**Method to fetch user emails to send email while class starts**/
	function fetchUserEmailsForClass($user_id)
	{
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where("user_id",$user_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$user_details = $query->result();			
		}
		else
		{
			$user_details = array();
		}
		return $user_details;
	}
		/**Fetch Class Details to populate email while class starts**/
	function fetchClassDetailsForEmail($class_id)
	{
		$this->db->select("lc.*,crs.name as course_name,tr.name as trainer_name");
		$this->db->from("live_class as lc");
		$this->db->join("courses as crs","lc.course_id=crs.course_id");
		$this->db->join("trainer as tr","lc.trainter_id=tr.id");
		$this->db->where("lc.id",$class_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$result = $query->result();
		}
		else
		{
			$result = array();
		}
		return $result;
	}
	/********************************
		End Methods used on Admin Classes Page
	*********************************/
	
	/********************************
		Start Methods used on Admin Trainer Page
	*********************************/
		/**Function to check if a trainer already exist**/
	function checkExistingTrainer($name)
	{
		$this->db->select("*");
		$this->db->from("trainer");
		$this->db->like("name",$name);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$trainer_exist = $query->result();
		}
		else
		{
			$trainer_exist = array();
		}
		return $trainer_exist;
	}
	/**Function to insert new record into trainers table**/
	function inesertNewTrainer($trainer_data)
	{
		if($this->db->insert('trainer',$trainer_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}
	/********************************
		Start Methods used on Admin Trainer Page
	*********************************/
		/**Function to fetch trainer with active status 1 from trainer table**/
	function trainerList()
	{
		$where_cond = array('at.active_status'=>'1');
		$this->db->select("at.*,ac.name as course_name");
		$this->db->from('trainer as at');
		$this->db->join('courses as ac','ac.course_id=at.course_id');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batches = $query->result();
		}
		else
		{
			$batches = array();
		}
		return $batches;
	}	


	/********************************
		End Methods used on Admin Trainer Page
	*********************************/
	
	/********************************
		Start Methods used on Admin Corporate Enquiry Page
	*********************************/	
		/**Function to Trainer Enquiry List **/
	function adminEnquiryList()
	{
		$this->db->select("ace.*,ac.country_name,at.state_name");
		$this->db->from("common_enuiry as ace");
		$this->db->join("countries as ac","ac.country_id=ace.country",'left');
		$this->db->join("states as at","at.state_id=ace.state",'left');
		$this->db->order_by("ace.id desc");
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
	function contactPageEnquiryList()
	{
		$this->db->select("ace.*");
		$this->db->from("contact_enquiries as ace");
		$this->db->order_by("ace.id desc");	
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
	function coursePageEnquiryList()
	{
		$this->db->select("ace.*");
		$this->db->from("course_enuiry as ace");
		$this->db->order_by("ace.id desc");	
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
	function nonCourseEnquiryList()
	{
		$this->db->select("ace.*");
		$this->db->from("non_started_ourse_enquiries as ace");
		$this->db->order_by("ace.id desc");	
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
	function instructorEnquiryList()
	{
		$this->db->select("ace.*,ac.country_name,at.state_name");
		$this->db->from("instructor_enuiry as ace");
		$this->db->join("countries as ac","ac.country_id=ace.country",'left');
		$this->db->join("states as at","at.state_id=ace.state",'left');	
		$this->db->order_by("ace.id desc");		
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
		/**Function to Trainer Enquiry List **/
	function futureContactEnquiryList()
	{
		$this->db->select("afce.*,ac.country_name,at.state_name,acs.name as course_name");
		$this->db->from("future_training_enquiries as afce");
		$this->db->join("countries as ac","ac.country_id=afce.country","left");
		$this->db->join("states as at","at.state_id=afce.state","left");
		$this->db->join("courses as acs",'acs.course_id=afce.course',"left");
		$this->db->order_by("afce.id desc");		
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}		
	/********************************
		End Methods used on Admin Corporate Enquiry Page
	*********************************/	
	/**********************************
		Start Functions related to Newsletter page on Admin
	************************************/	
	/*Subscriber List*/
	public function subscriberList()
	{
		$this->db->select("*");
		$this->db->from("newsletter_email");
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
	/*Email Template List*/
	public function emailTemplateList()
	{
		$this->db->select("*");
		$this->db->from("newsletter_template");
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$corp_enq = $query->result();
		}
		else
		{
			$corp_enq = array();
		}
		return $corp_enq;
	}	
		/**********************************
		End Functions related to Newsletter on Admin
	************************************/	
	
	/**********************************
		Start Functions related to Coupon on Admin
	************************************/		
	
	/**Function to insert new coupon data into table**/
	function inesertNewCoupan($coupon_data)
	{
		if($this->db->insert('coupon',$coupon_data))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		return $status;
	}
		/**Function to fetch trainer with active status 1 from trainer table**/
	function couponList()
	{
		$where_cond = array('at.active_status'=>'1');
		$this->db->select("at.*,ac.name as course_name");
		$this->db->from('coupon as at');
		$this->db->join('courses as ac','ac.course_id=at.course_id','left');
		$this->db->where($where_cond);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$batches = $query->result();
		}
		else
		{
			$batches = array();
		}
		return $batches;
	}	
	/**Function to whethere coupon already exists**/
	function checkExistsCoupan($coupon_code)
	{
		$where_cond = array('at.coupon_code'=>$coupon_code);
		$this->db->select("at.*");
		$this->db->from('coupon as at');
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
	/**********************************
		End Functions related to Coupon on Admin
	************************************/	
	/**Function to whethere coupon already exists**/
	function commonDelete($table_id,$table_name,$table_id_name)
	{
		$this->db->where($table_id_name,$table_id);
		$this->db->delete($table_name);
	}		
}
	
?>