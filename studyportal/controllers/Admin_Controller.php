<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/myadmin
	 *	- or -
	 * 		http://www.janbasktraining.com/myadmin/index
	*/
	
	public function index()
	{
		$data['page'] = '123';
		if($this->session->userdata('admin_id'))
		{
			redirect(site_url('myadmin/dashboard'));
		}
		$this->load->view($this->_admin_login_container,$data);
	}
	
		/**Function for Login Process**/
	public function checkLogin()
	{
		$login_name = $this->input->post("login_name");
		$login_pass = md5($this->input->post("login_pass"));
		$response = $this->AM->checkLogin('admin',$login_name,$login_pass);
		echo json_encode($response);
		die();
	}
	
	/**Function for Dashboard**/
	public function dashboard()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$this->load->view($this->_admin_dashboard,$data);
	}

	public function updatepassword()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$this->load->view($this->_admin_updatepassword,$data);
	}	
	/**********************************
		Start Functions related to users page on Admin
	************************************/
	public function users()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		//print_r($_POST);	
		if(!empty($_POST['status'])){
			$id = $_POST['id'];
			$status = ($_POST['status']=="Active")?"1":"0";
			$data = array("email_verified"=>$status);
			$this->AM->updateStatus($data,$id);
		}
		$data['user_arr']=$this->AM->userList();	
		$this->load->view($this->_admin_users,$data);
	}
	/**********************************
		End Functions related to users page on Admin
	************************************/
	
	
	/**********************************
		Start Functions related to enrolled users page on Admin
	************************************/
	public function enrolled_users()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['enrolled_user_arr']=$this->AM->enrolleduserList();
		$this->load->view($this->_admin_enrolled_users,$data);
	}
	/**********************************
		End Functions related to enrolled users page on Admin
	************************************/
	
	/**********************************
		Start Functions related to enroll user to a course on Admin
	************************************/
	public function add_new_user()
	{
		$this->checkAdminLoginSession();
		$data["courses"] = $this->HM->fetchCourseList();
		$this->load->view($this->_admin_add_new_user,$data);
	}
	/**********************************
		End Functions related to enroll user to a course on Admin
	************************************/

	
	/**********************************
		Start Functions related to enroll user to a course on Admin
	************************************/
	public function enroll_user_course()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['user_arr'] = $this->AM->userList();
		$data['course_arr'] = $this->AM->courseList();
		$this->load->view($this->_admin_enroll_user_course,$data);
	}
	/**********************************
		End Functions related to enroll user to a course on Admin
	************************************/
	
	
	/**********************************
		Start Functions related to Courses page on Admin
	************************************/
		/**Function to view the list of courses**/
	public function courses()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['course_arr']=$this->AM->courseList();
		$this->load->view($this->_admin_courses,$data);
	}
	public function add_new_course()
	{
		$this->checkAdminLoginSession();
		// $data['currencies'] = $this->AM->fetchCurrencyList();
		$data['page'] = '123';
		$this->load->view($this->_admin_add_new_course,$data);
	}
		/**Function to insert new course into courses table**/
	public function insert_new_course()
	{
		$this->checkAdminLoginSession();
		$name = $this->input->post('course_name');
		$amount = $this->input->post('course_amount');
		$currency = $this->input->post('course_currency');
		
		$image_name = "default.png";
		if(isset($_FILES["course_image"]["name"]) && !empty($_FILES["course_image"]["name"]))
		{
			$extension_1 = explode(".", $_FILES['course_image']['name']);
			$extension = end($extension_1);
			$course_image_name = "course".rand().'.'.$extension;
			$config['upload_path'] =  $this->config->item("DIR_ROOT_IMAGE")."course/";
			$config['file_name'] = $course_image_name;
			$config['allowed_types'] = 'jpeg|jpg|png|JPEG|JPG|PNG';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('course_image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data()); 
				$image_name = $course_image_name;
			}
		}
		
		$course_data = array('name'=>$name,'amount'=>$amount,'currency'=>$currency,'image'=>$image_name);
		
		$course_exist = $this->AM->checkExistingCourse($name);
		if(!empty($course_exist))
		{
			$this->session->set_flashdata('error_message', 'Course with same name exists');
			$response = array('course_exist'=>'1','course_added'=>'0');
		}
		else
		{
			$status = $this->AM->inesertNewCourse($course_data);
			if($status==1)
			{
				$this->session->set_flashdata('action_message', 'Course Added Successfully');
				$response = array('course_exist'=>'0','course_added'=>'1');
			}
			else
			{
				$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
				$response = array('course_exist'=>'0','course_added'=>'0');
			}
		}
		echo json_encode($response);
		die();
	}
	public function submit_updatepassword()
	{
		$this->checkAdminLoginSession();
		$password = $this->input->post('password');
		$admin_id = $this->input->post('admin_id');
		$pass_arr=array('password'=>md5($password));
		if($this->AM->updateAdminPassword($pass_arr,$admin_id))
		{
			echo json_encode(array("status"=>"1"));
			die();
		}
		else
		{
			echo json_encode(array("status"=>"0"));
			die();			
		}
	}

	/*  */
	public function edit_course()
	{
		$this->checkAdminLoginSession();
		// $data['currencies'] = $this->AM->fetchCurrencyList();
		$course_id=$this->uri->segment(3);
		$data['single_data'] = $this->AM->getSingleCourseData($course_id);
		$this->load->view($this->_admin_edit_course,$data);
	}	

		/**Function to insert new course into courses table**/
	public function update_course()
	{
		$this->checkAdminLoginSession();
		$course_id = $this->input->post('course_id');
		$name = $this->input->post('course_name');
		$amount = $this->input->post('course_amount');
		$currency = $this->input->post('course_currency');
		
		$image_name = "default.png";
		if(isset($_FILES["course_image"]["name"]) && !empty($_FILES["course_image"]["name"]))
		{
			$extension_1 = explode(".", $_FILES['course_image']['name']);
			$extension = end($extension_1);
			$course_image_name = "course".rand().'.'.$extension;
			
			$config['upload_path'] =  $this->config->item("DIR_ROOT_IMAGE")."course/";
			$config['file_name'] = $course_image_name;
			$config['allowed_types'] = '*';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('course_image'))
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error );
				$course_data = array('name'=>$name,'amount'=>$amount,'currency'=>$currency);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data()); 
				$course_data = array('name'=>$name,'amount'=>$amount,'currency'=>$currency,'image'=>$course_image_name);
			}
		}
		else
		{
			$course_data = array('name'=>$name,'amount'=>$amount,'currency'=>$currency);
		}
		
		
		
		$course_exist = $this->AM->checkExistingCourseUpdate($name,$course_id);
		if(!empty($course_exist))
		{
			$this->session->set_flashdata('error_message', 'Course with same name exists');
			$response = array('course_exist'=>'1','course_added'=>'0');
		}
		else
		{
			$status = $this->AM->updateCourse($course_data,$course_id);
			if($status==1)
			{
				$this->session->set_flashdata('action_message', 'Course Updated Successfully');
				$response = array('course_exist'=>'0','course_added'=>'1');
			}
			else
			{
				$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
				$response = array('course_exist'=>'0','course_added'=>'0');
			}
		}
		echo json_encode($response);
		die();
	}
	/**********************************
		End Functions related to Courses page on Admin
	************************************/
	
	/**********************************
		Start Functions related to Batches page on Admin
	************************************/
		/**Function to view the list of batches**/
	public function batches()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['batch_arr']=$this->AM->batchList();
		$this->load->view($this->_admin_batches,$data);
	}
		/**Function to view the add new batch page**/
	public function add_new_batch()
	{
		$this->checkAdminLoginSession();
		$data['courses'] = $this->HM->fetchCourseList();
		$this->load->view($this->_admin_add_new_batch,$data);
	}
	
		/**Function to insert new batch into batches table**/
	public function insert_new_batch()
	{
		$this->checkAdminLoginSession();
		$name = $this->input->post('batch_name');
		$course_id = $this->input->post('batch_course_selected');
		$start_date = $this->input->post('batch_start_date');
		$end_date = $this->input->post('batch_end_date');
		$start_time = $this->input->post('batch_start_time');
		$end_time = $this->input->post('batch_end_time');
		$time_zone = $this->input->post('batch_time_zone');
		$am_pm = $this->input->post('batch_am_pm');
		$amount = $this->input->post('batch_amount');
		$currency = $this->input->post('batch_currency');
		$duration = $this->input->post('batch_duration_period');
		$duration_in = $this->input->post('batch_duration_in');
		$class_type = $this->input->post('batch_type');
		$front_status = $this->input->post('batch_front_status');
		
		$batch_data = array('name'=>$name,'course_id'=>$course_id,'start_date'=>$start_date,'end_date'=>$end_date,'start_time'=>$start_time,'end_time'=>$end_time,'time_zone'=>$time_zone,'am_pm'=>$am_pm,'amount'=>$amount,'currency'=>$currency,'duration'=>$duration,'duration_in'=>$duration_in,'class_type'=>$class_type,'front_status'=>$front_status);
		
		$status = $this->AM->inesertNewBatch($batch_data);
		if($status==1)
		{
			$this->session->set_flashdata('action_message', 'Batch Added Successfully');
		}
		else
		{
			$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
		}
		echo $status;
		die();
	}
		/**Function to view the add new batch page**/
	public function edit_batch()
	{
		$this->checkAdminLoginSession();
		$batch_id=$this->uri->segment(3);
		$data['single_data'] = $this->AM->getSingleBatchData($batch_id);
		$data['courses'] = $this->HM->fetchCourseList();
		$this->load->view($this->_admin_edit_batch,$data);
	}	
		/**Function to update batch into batches table**/
	public function update_batch()
	{
		$this->checkAdminLoginSession();
		$batch_id = $this->input->post('batch_id');
		$name = $this->input->post('batch_name');
		$course_id = $this->input->post('batch_course_selected');
		$start_date = $this->input->post('batch_start_date');
		$end_date = $this->input->post('batch_end_date');
		$start_time = $this->input->post('batch_start_time');
		$end_time = $this->input->post('batch_end_time');
		$time_zone = $this->input->post('batch_time_zone');
		$am_pm = $this->input->post('batch_am_pm');
		$amount = $this->input->post('batch_amount');
		$currency = $this->input->post('batch_currency');
		$duration = $this->input->post('batch_duration_period');
		$duration_in = $this->input->post('batch_duration_in');
		$class_type = $this->input->post('batch_type');
		$front_status = $this->input->post('batch_front_status');
		
		$batch_data = array('name'=>$name,'course_id'=>$course_id,'start_date'=>$start_date,'end_date'=>$end_date,'start_time'=>$start_time,'end_time'=>$end_time,'time_zone'=>$time_zone,'am_pm'=>$am_pm,'amount'=>$amount,'currency'=>$currency,'duration'=>$duration,'duration_in'=>$duration_in,'class_type'=>$class_type,'front_status'=>$front_status);
		
		$status = $this->AM->UpdateBatch($batch_data,$batch_id);
		if($status==1)
		{
			$this->session->set_flashdata('action_message', 'Batch Updated Successfully');
		}
		else
		{
			$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
		}
		echo $status;
		die();
	}	
	/**********************************
		End Functions related to Batches page on Admin
	************************************/
	
	
	/**********************************
		Start Functions related to classes page on Admin
	************************************/
		/**Function to view the list of classes**/
	public function classes()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['live_class_arr']=$this->AM->liveClassList();		
		$this->load->view($this->_admin_classes,$data);
	}
		/**Function to view the add new class page**/
	public function add_new_class()
	{
		$this->checkAdminLoginSession();
		$data['courses'] = $this->HM->fetchCourseList();
		$data['batches'] = $this->AM->fetchActiveBatches();
		$data['trainers'] = $this->AM->fetchActiveTrainers();
		$this->load->view($this->_admin_add_new_class,$data);
	}
		/**Function to view the add new class page**/
	public function edit_class()
	{
		$this->checkAdminLoginSession();
		$class_id=$this->uri->segment(3);
		$single_data = $this->AM->getSingleLiveClassData($class_id);		
		$data['single_data'] = $single_data;		
		$data['courses'] = $this->HM->fetchCourseList();
		$data['course_batch_arr']= $this->AM->fetchbatchForClass($single_data[0]->course_id);
		$data['batches'] = $this->AM->fetchActiveBatches();
		$data['trainers'] = $this->AM->fetchActiveTrainers();
		$this->load->view($this->_admin_edit_class,$data);
	}	
		/**Function to insert new batch into batches table**/
	public function insert_new_class()
	{
		$this->checkAdminLoginSession();
		$title = $this->input->post('class_title');
		$intro = $this->input->post('class_intro');
		$course_id = $this->input->post('class_course_selected');
		$batch_id = $this->input->post('class_batch_selected');
		$trainter_id = $this->input->post('class_trainer_selected');
		$class_date = $this->input->post('class_start_date');
		$class_time = $this->input->post('class_start_time');
		$am_pm = $this->input->post('class_am_pm');
		$time_zone = $this->input->post('class_time_zone');
		$live_class_url = $this->input->post('class_live_url');
		
		$image_name = "av1.jpg";
		if(isset($_FILES["class_image"]["name"]) && !empty($_FILES["class_image"]["name"]))
		{
			$extension_1 = explode(".", $_FILES['class_image']['name']);
			$extension = end($extension_1);
			$class_image_name = "class".rand().'.'.$extension;
			$config['upload_path'] =  $this->config->item("DIR_ROOT_IMAGE")."classes/";
			$config['file_name'] = $class_image_name;
			$config['allowed_types'] = 'jpeg|jpg|png|JPEG|JPG|PNG';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('class_image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data()); 
				$image_name = $class_image_name;
			}
		}
		$class_data = array('title'=>$title,'intro'=>$intro,'course_id'=>$course_id,'batch_id'=>$batch_id,'trainter_id'=>$trainter_id,'class_date'=>$class_date,'class_time'=>$class_time,'am_pm'=>$am_pm,'time_zone'=>$time_zone,'live_class_url'=>$live_class_url,'image'=>$image_name);
		$status = $this->AM->inesertNewClass($class_data);
		if($status==1)
		{
			$this->session->set_flashdata('action_message', 'Class Added Successfully');
		}
		else
		{
			$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
		}
		echo $status;
		die();
	}
	public function submit_update_class()
	{
		$this->checkAdminLoginSession();
		$title = $this->input->post('class_title');
		$intro = $this->input->post('class_intro');
		$course_id = $this->input->post('class_course_selected');
		$batch_id = $this->input->post('class_batch_selected');
		$trainter_id = $this->input->post('class_trainer_selected');
		$class_date = $this->input->post('class_start_date');
		$class_time = $this->input->post('class_start_time');
		$am_pm = $this->input->post('class_am_pm');
		$time_zone = $this->input->post('class_time_zone');
		$live_class_id = $this->input->post('live_class_id');
		$live_class_url = $this->input->post('class_live_url');
		
		$image_name = "av1.jpg";
		if(isset($_FILES["class_image"]["name"]) && !empty($_FILES["class_image"]["name"]))
		{
			$extension_1 = explode(".", $_FILES['class_image']['name']);
			$extension = end($extension_1);
			$class_image_name = "class".rand().'.'.$extension;
			$config['upload_path'] =  $this->config->item("DIR_ROOT_IMAGE")."classes/";
			$config['file_name'] = $class_image_name;
			$config['allowed_types'] = 'jpeg|jpg|png|JPEG|JPG|PNG';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('class_image'))
			{
				$error = array('error' => $this->upload->display_errors());
				$class_data = array('title'=>$title,'intro'=>$intro,'course_id'=>$course_id,'batch_id'=>$batch_id,'trainter_id'=>$trainter_id,'class_date'=>$class_date,'class_time'=>$class_time,'am_pm'=>$am_pm,'time_zone'=>$time_zone,'live_class_url'=>$live_class_url);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data()); 
				$image_name = $class_image_name;
				$class_data = array('title'=>$title,'intro'=>$intro,'course_id'=>$course_id,'batch_id'=>$batch_id,'trainter_id'=>$trainter_id,'class_date'=>$class_date,'class_time'=>$class_time,'am_pm'=>$am_pm,'time_zone'=>$time_zone,'live_class_url'=>$live_class_url,'image'=>$image_name);
			}
		}
		else
		{
			$class_data = array('title'=>$title,'intro'=>$intro,'course_id'=>$course_id,'batch_id'=>$batch_id,'trainter_id'=>$trainter_id,'class_date'=>$class_date,'class_time'=>$class_time,'am_pm'=>$am_pm,'time_zone'=>$time_zone,'live_class_url'=>$live_class_url);
		}
		
		$status = $this->AM->updateClass($class_data,$live_class_id);
		if($status==1)
		{
			$this->session->set_flashdata('action_message', 'Class Updated Successfully');
		}
		else
		{
			$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
		}
		echo $status;
		die();
	}
		/**Function to fetch batches based on course selected in add new class page**/
	public function fetchbatchForClass()
	{
		$course_id = $this->input->post('course_id');
		$batch_details = $this->AM->fetchbatchForClass($course_id);
		
		echo json_encode($batch_details);
		die();
	}
		/**Function to fetch batches based on course selected in add new class page**/
	public function fetchbatchForClassIdWise($course_id)
	{
		
		$batch_details = $this->AM->fetchbatchForClass($course_id);
		
		echo json_encode($batch_details);
		die();
	}	
		/**Function to add live class url based on class id**/
	public function add_class_url()
	{
		$class_id = $this->uri->segment(3);
		$data['class_data'] = $this->AM->checkExistingUrl($class_id);
		$this->load->view($this->_admin_add_class_url,$data);
	}
		/**Function to update live class url**/
	public function updateClassUrl()
	{
		$id = $this->input->post('class_id');
		$live_class_url = $this->input->post('class_live_url');
		$update_data = array('live_class_url'=>$live_class_url,'status'=>'2');
		$update_status = $this->AM->updateClassUrl($id,$update_data);
		if($update_status==1)
		{
			$this->session->set_flashdata('action_message', 'Url Added Successfully');
		}
		else
		{
			$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
		}
		echo $update_status;
		die();
	}
		/**Function to add downlaodable data after end class**/
	public function update_class_data()
	{
		$class_id = $this->uri->segment(3);
		$data['class_data'] = $this->AM->checkExistingUrl($class_id);
		$this->load->view($this->_admin_update_class_data,$data);
	}
		/**Function to update class data**/
	public function updateClassData()
	{
		$id = $this->input->post('class_id');
		$download_video_url = $this->input->post('class_video_url');
		$download_file_url = $this->input->post('class_file_url');
		$update_data = array('download_video_url'=>$download_video_url,"download_file_url"=>$download_file_url,'status'=>'3');
		$update_status = $this->AM->updateClassData($id,$update_data);
		if($update_status==1)
		{
			$this->session->set_flashdata('action_message', 'Data Added Successfully');
		}
		else
		{
			$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
		}
		echo $update_status;
		die();
	}
	/**********************************
		End Functions related to classes page on Admin
	************************************/

	/**********************************
		Start Functions related to trainer page on Admin
	************************************/
	public function trainers()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['trainer_arr']=$this->AM->trainerList();
		$this->load->view($this->_admin_trainers,$data);
	}
		/**Function to view the add new trainer page**/
	public function add_new_trainer()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['courses'] = $this->HM->fetchCourseList();
		$this->load->view($this->_admin_add_new_trainer,$data);
	}
		/**Function to insert new trainer into trainers table**/
	public function insert_new_trainer()
	{
		$this->checkAdminLoginSession();
		$course_id = $this->input->post('course_id');
		$join_date = $this->input->post('join_date');
		$name = $this->input->post('trainer_name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$location = $this->input->post('location');
		
		$image_name = "default.png";
		if(isset($_FILES["trainer_image"]["name"]) && !empty($_FILES["trainer_image"]["name"]))
		{
			$extension_1 = explode(".", $_FILES['trainer_image']['name']);
			$extension = end($extension_1);
			$trainer_image_name = "trainer".rand().'.'.$extension;
			$config['upload_path'] =  $this->config->item("DIR_ROOT_IMAGE")."trainer/";
			$config['file_name'] = $trainer_image_name;
			$config['allowed_types'] = 'jpeg|jpg|png|JPEG|JPG|PNG';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('trainer_image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{
				$data = array('upload_data' => $this->upload->data()); 
				$image_name = $trainer_image_name;
			}
		}
		$create_date = date('Y-m-d');
		$trainer_data = array('name'=>$name,'course_id'=>$course_id,'join_date'=>$join_date,'email'=>$email,'mobile'=>$mobile,'location'=>$location,'image'=>$image_name,'create_date'=>$create_date);
		
		$trainer_exist = $this->AM->checkExistingTrainer($name);
		if(!empty($trainer_exist))
		{
			$this->session->set_flashdata('error_message', 'Trainer with same name exists');
			$response = array('trainer_exist'=>'1','trainer_added'=>'0');
		}
		else
		{
			$status = $this->AM->inesertNewTrainer($trainer_data);
			if($status==1)
			{
				$this->session->set_flashdata('action_message', 'Trainer Added Successfully');
				$response = array('trainer_exist'=>'0','trainer_added'=>'1');
			}
			else
			{
				$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
				$response = array('trainer_exist'=>'0','trainer_added'=>'0');
			}
		}
		echo json_encode($response);
		die();
	}
	/**********************************
		End Functions related to trainer page on Admin
	************************************/
	
	/**********************************
		Start Functions related to Coupon on Admin
	************************************/
	public function coupon()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['coupon_arr']=$this->AM->couponList();
		$this->load->view($this->_admin_coupon,$data);
	}
		/**Function to view the add new coupon page**/
	public function add_new_coupon()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['courses'] = $this->HM->fetchCourseList();
		$this->load->view($this->_admin_add_new_coupon,$data);
	}
		/**Function to insert new batch into batches table**/
	public function insert_new_coupan()
	{
		$this->checkAdminLoginSession();
		$coupon_name = $this->input->post('coupon_name');
		$coupon_code = $this->input->post('coupan_code');
		$coupon_type = $this->input->post('coupon_type_selected');
		$course_id = $this->input->post('coupon_course_selected');
		if(isset($course_id) || !empty($course_id))
		{
			$course_id=$course_id;
		}
		else
		{
			$course_id=0;
		}
		$course_id=!empty($course_id)?$course_id:"0";
		$start_date = $this->input->post('coupon_start_date');
		$expiry_date = $this->input->post('coupon_expiry_date');
		$fixed_percent = $this->input->post('coupon_fixed_percentage');
		$value = $this->input->post('coupon_value');
		$coupan_arr = array('coupon_code'=>$coupon_code,'coupon_name'=>$coupon_name,'coupon_type'=>$coupon_type,'course_id'=>$course_id,'start_date'=>$start_date,'expiry_date'=>$expiry_date,'fixed_percent'=>$fixed_percent,'value'=>$value);
		$isExist = $this->AM->checkExistsCoupan($coupon_code);
		if($isExist)
		{
			$status=2;
		}
		else
		{
			$status = $this->AM->inesertNewCoupan($coupan_arr);
			if($status==1)
			{
				$this->session->set_flashdata('action_message', 'Coupon Added Successfully');
			}
			else
			{
				$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
			}
		}
		echo $status;
		die();
	}	
	/**********************************
		End Functions related to Coupon on Admin
	************************************/
	
	
	/**********************************
		Start Functions related to corporate enquiries page on Admin
	************************************/
	public function corporate_enquiries()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['list_arr']=$this->AM->corporateEnquiryList();			
		$this->load->view($this->_admin_corporate_enquiries,$data);
	}
	/**********************************
		End Functions related to corporate enquiries page on Admin
	************************************/
	
	/**********************************
		Start Functions related to contact us enquiries page on Admin
	************************************/
	public function enquiries()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['list_arr']=$this->AM->adminEnquiryList();		
		$this->load->view($this->_admin_enquiries,$data);
	}
	/* public function course_page_enquiry()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['list_arr']=$this->AM->coursePageEnquiryList();		
		$this->load->view($this->_admin_course_page_enquiry,$data);
	}
	public function non_course_start_enquiry()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['list_arr']=$this->AM->nonCourseEnquiryList();		
		$this->load->view($this->_admin_non_course_enquiry,$data);
	}	
	public function instructor_enquiry()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['list_arr']=$this->AM->instructorEnquiryList();		
		$this->load->view($this->_admin_instructor_enquiry,$data);
	}	
	public function future_course_enquiry()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['list_arr']=$this->AM->futureContactEnquiryList();		
		$this->load->view($this->_admin_future_course_enquiry,$data);
	}	 */
	/**********************************
		End Functions related to contact us enquiries page on Admin
	************************************/
	/**********************************
		Start Functions related to Newsletter page on Admin
	************************************/	
	/*Subscriber List*/
	public function subscriber()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['subscriber_arr']=$this->AM->subscriberList();		
		$this->load->view($this->_admin_newsletter_subscriber,$data);
	}
	/*Email Template  List*/	
	public function emailtemplate()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$data['emailtemplate_arr']=$this->AM->emailTemplateList();		
		$this->load->view($this->_admin_newsletter_emailtemplate,$data);
	}	
	/*Add New Email Template  List*/	
	public function add_new_emailtemplate()
	{
		$this->checkAdminLoginSession();
		$data['page'] = '123';
		$this->load->view($this->_admin_newsletter_add_new_emailtemplate,$data);
	}	
		/**********************************
		End Functions related to Newsletter on Admin
	************************************/
	
	/**Function for logout**/
	public function logout()
	{
		$this->session->unset_userdata("admin_id");
		$this->session->unset_userdata("admin_name");
		$this->session->sess_destroy();
		redirect(site_url('myadmin'));	
	}
	/**Function for logout**/
	public function commonDelete()
	{
		$this->checkAdminLoginSession();
		if(isset($_POST) && !empty($_POST))
		{
			$table_id=$_POST['table_id'];
			$table_name=$_POST['table_name'];
			$table_id_name=$_POST['table_id_name'];
			$this->AM->commonDelete($table_id,$table_name,$table_id_name);
		}
		else
		{
			echo json_encode(array("status"=>"0","msg"=>"Invalid request"));
			die();
		}
	}	
}
