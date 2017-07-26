<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function about_us()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_about_us,$data);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function contact_us()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_contact_us,$data);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function privacy_policy()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_privacy_policy,$data);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function refund_policy()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_refund_policy,$data);
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function term_condition()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_term_condition,$data);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function term_of_use()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_term_of_use,$data);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function website_ploicy()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_website_ploicy,$data);
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function disclaimer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_disclaimer,$data);
	}	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function non_started_course_enquiry()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_non_started_course_enquiry,$data);
	}	
	public function submit_non_start_course_enquiry()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$name=$this->input->post("name");
			$mobile=$this->input->post("mobile");
			$email=$this->input->post("email");
			$course=$this->input->post("course");
			$location=$this->input->post("location");
			$data_arr=array("name"=>$name,"email"=>$email,'page_name'=>"Non-course Start Enquiry","mobile"=>$mobile,"course"=>$course,"location"=>$location,"create_date"=>date("Y-m-d"));
			$this->HM->storeNonStartCourseEnquiry($data_arr);
			echo json_encode(array("status"=>"1"));
			die();			
		}
		else
		{
			echo json_encode(array("status"=>"0"));
			die();
		}
		
	}	

}
