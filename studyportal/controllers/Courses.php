<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends Front_Controller
{
	private $ipInfo = null;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('jb');
		$this->ipInfo = file_get_contents('http://ip-api.com/json/' . $_SERVER['REMOTE_ADDR']);
		$this->ipInfo = json_decode($this->ipInfo,true);	
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/courses
	 *	- or -
	 * 		http://www.janbasktraining.com/courses/index
	 */
	public function index()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_course_container,$data);
	}
	public function online_it_training()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_online_it_training,$data);
	}	
	
	/**
		*Page to display Java course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/java
	*/
	public function java()
	{
		echo $this->ipInfo["timezone"];
		
		$course_id = 1;
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}

		$this->load->view($this->_java_container,$data);
	}
	
	/**
		*Page to display java-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/java-developer
	*/
	public function java_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_java_developer,$data);
	}
	
	/**
		*Page to display advanced-java-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/advanced-java-developer
	*/
	public function advanced_java_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_advanced_java_developer,$data);
	}
	
	/**
		*Page to display dotnet course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/dotnet
	*/
	public function dotnet()
	{
		$course_id = 2;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_dotnet_container,$data);
	}
	
	/**
		*Page to display dotnet-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/dotnet-developer
	*/
	public function dotnet_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_dotnet_developer,$data);
	}
	
	/**
		*Page to display advanced-dotnet-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/advanced-dotnet-developer
	*/
	public function advanced_dotnet_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_advanced_dotnet_developer,$data);
	}
	
	/**
		*Page to display ba course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ba
	*/
	public function ba()
	{
		$course_id = 7;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_ba_container,$data);
	}
	
	/**
		*Page to display qa course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/qa
	*/
	public function qa()
	{
		$course_id = 5;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_qa_container,$data);
	}
	
	/**
		*Page to display qa-manual-testing course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/qa-manual-testing
	*/
	public function qa_manual_testing()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_qa_manual_testing,$data);
	}
	
	/**
		*Page to display qa-qtp-testing course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/qa-qtp-testing
	*/
	public function qa_qtp_testing()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_qa_qtp_testing,$data);
	}
	
	/**
		*Page to display qa-selenium-automation course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/qa-selenium-automation
	*/
	public function qa_selenium_automation()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_qa_selenium_automation,$data);
	}
	
	/**
		*Page to display salesforce course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/salesforce
	*/
	public function salesforce()
	{
		$course_id = 3;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_salesforce_container,$data);
	}
	
	/**
		*Page to display salesforce-admin course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/salesforce-admin
	*/
	public function salesforce_admin()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_salesforce_admin,$data);
	}
	
	/**
		*Page to display salesforce-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/salesforce-developer
	*/
	public function salesforce_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_salesforce_developer,$data);
	}
	
	/**
		*Page to display salesforce-adv-admin course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/salesforce-adv-admin
	*/
	public function salesforce_adv_admin()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_salesforce_adv_admin,$data);
	}
	
	/**
		*Page to display salesforce-adv-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/salesforce-adv-developer
	*/
	public function salesforce_adv_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_salesforce_adv_developer,$data);
	}
	
	/**
		*Page to display pmp course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/pmp
	*/
	public function pmp()
	{
		$course_id = 6;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_pmp_container,$data);
	}
	
	/**
		*Page to display hadoop course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/hadoop
	*/
	public function hadoop()
	{
		$course_id = 4;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_hadoop_container,$data);
	}
	
	/**
		*Page to display hadoop-admin course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/hadoop-admin
	*/
	public function hadoop_admin()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_hadoop_admin,$data);
	}
	
	/**
		*Page to display hadoop-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/hadoop-developer
	*/
	public function hadoop_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_hadoop_developer,$data);
	}
	
	/**
		*Page to display hadoop-adv-admin course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/hadoop-adv-admin
	*/
	public function hadoop_adv_admin()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_hadoop_adv_admin,$data);
	}
	
	/**
		*Page to display hadoop-adv-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/hadoop-adv-developer
	*/
	public function hadoop_adv_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_hadoop_adv_developer,$data);
	}
	
	/**
		*Page to display aws course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/aws
	*/
	public function aws()
	{
		$course_id = 17;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_aws_container,$data);
	}
	
	/**
		*Page to display aws-admin course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/aws-admin
	*/
	public function aws_admin()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_aws_admin,$data);
	}
	
	/**
		*Page to display aws-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/aws-developer
	*/
	public function aws_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_aws_admin,$data);
	}
	
	/**
		*Page to display aws-adv-admin course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/aws-adv-admin
	*/
	public function sql22()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_sql22,$data);
	}
	public function salesforce22()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_salesforce22,$data);
	}	
	public function aws_adv_admin()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_aws_adv_admin,$data);
	}	
	/**
		*Page to display aws-adv-developer course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/aws-adv-developer
	*/
	public function aws_adv_developer()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_aws_adv_developer,$data);
	}
	
	/**
		*Page to display android course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/android
	*/
	public function android()
	{
		$course_id = 9;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_android_container,$data);
	}
	
	/**
		*Page to display ios course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ios
	*/
	public function ios()
	{
		$course_id = 8;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_ios_container,$data);
	}
	
	/**
		*Page to display Digital Marketing course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ios
	*/
	public function digital_marketing()
	{
		$course_id = 13;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_digital_marketing,$data);
	}

	/**
		*Page to display Oracle DBA course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ios
	*/
	public function oracle_dba()
	{
		$course_id = 11;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_oracle_dba,$data);
	}

	/**
		*Page to display Sql course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ios
	*/
	public function sql()
	{
		$course_id = 10;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_sql,$data);
	}

	/**
		*Page to display Datascience course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ios
	*/
	public function data_science()
	{
		$course_id = 12;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_data_science,$data);
	}

	/**
		*Page to display VMware course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ios
	*/
	public function vmware()
	{
		$course_id = 14;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_vmware,$data);
	}

	/**
		*Page to display Devops course Page
		* Maps to the following URL
		* 		http://www.janbasktraining.com/courses/ios
	*/
	public function devops()
	{
		$course_id = 15;
		
		$user_id = $this->session->userdata("user_id");
		
		if($user_id!="") {
			$data["userEnrollStatus"] = $this->CM->userEnrollStatus($course_id,$user_id);
		} else {
			$data["userEnrollStatus"] = array("UserLoggedIn"=>"0","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>"0");
		}
		
		$data['ratings_arr'] = $this->CM->checkUserRatings($course_id);
		$data['batches'] = $this->CM->fetchBatches($course_id);
		$this->load->view($this->_devops,$data);
	}

	public function courseEnquiry()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$name=$_POST['name'];
			$mobile=$_POST['mobile'];
			$email=$_POST['email'];

			$data_arr=array('name'=>$name,'mobile'=>$mobile,'page_name'=>"Course Page Enquiry",'email'=>$email,'create_date'=>date("Y-m-d"));
			$isSaved=$this->HM->courseEnquiry($data_arr);
			if($isSaved)
			{
				echo json_encode(array("status"=>"1","msg"=>"Enquiry submitted"));
				die();				
			}
			else
			{
				echo json_encode(array("status"=>"0","msg"=>"Try again."));
				die();
			}
		}
		else
		{
			echo json_encode(array("status"=>"0","msg"=>"Invalid request"));
			die();
		}
	}		
	
	
}
