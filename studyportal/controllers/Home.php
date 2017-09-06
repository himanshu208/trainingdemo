<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('jb');
	}	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/Home
	 *	- or -
	 * 		http://www.janbasktraining.com/Home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://www.janbasktraining.com/
	 */
	public function index()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_home_container,$data);
	}
	
	public function corporate_training()
	{
		$data["courses"] = $this->HM->fetchCourseList();
		$data["countries"] = $this->AFM->fetchCountriesList();
		$this->load->view($this->_corporate_training,$data);
	}
	public function submit_corporate_enquiry()
	{
		if(isset($_POST) && !empty($_POST))
		{ //print_r($_POST); die();
			$name=$this->input->post("name");
			$country_code=$this->input->post("country_code");
			$mobile=$this->input->post("mobile");
			$email=$this->input->post("email");
			$company=$this->input->post("company");
			$course=$this->input->post("course");
			$country=$this->input->post("country");
			$state=$this->input->post("state");
			$pincode=$this->input->post("pincode");
			$message=$this->input->post("message");
			$data_arr=array("name"=>$name,"email"=>$email,'country_code'=>$country_code,"mobile"=>$mobile,"company"=>$company,"course"=>$course,"country"=>$country,"state"=>$state,'page_name'=>"Corporate Enquiry","pin_code"=>$pincode,"message"=>$message,"create_date"=>date("Y-m-d"));
			$this->HM->storeCorporateInquirt($data_arr);
			///////////////////////////////////////
			$country_code_obj = $this->input->post("country_code_obj");
			$course_obj = $this->input->post("course_obj");
			$country_obj = $this->input->post("country_obj");
			$state_obj = $this->input->post("state_obj");
			
			$data_arr=array("name"=>$name,"email"=>$email,'country_code'=>$country_code_obj[$country_code],"mobile"=>$mobile,"company"=>$company,"course"=>$course_obj[$course],"country"=>$country_obj[$country],"state"=>$state_obj[$state],'page_name'=>"Corporate Enquiry","pin_code"=>$pincode,"message"=>$message,"create_date"=>date("Y-m-d"));
			
			$this->_corporate_enquiry = $this->config->item("email_template") . "corporate_enquiry.php";
			$html= $this->load->view($this->_corporate_enquiry,$data_arr,true);
			$this->email->clear(TRUE);
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from("noreply@janbasktraining.com","Janbask Training");
			//$this->email->to("himanshu.208@gmail.com");
			$this->email->to("tarun.arora@janbask.com, training@janbask.com, rohit.batra@janbask.com, jiten.miglani@janbask.com");
			/* $this->email->bcc('navin.3434@gmail.com');  */
			$this->email->subject( 'Enquiry from Corporate Training Page');
			$this->email->message($html);
			$this->email->send();
			/////////////////////////////////////////
			echo json_encode(array("status"=>"1"));
			die();			
		}
		else
		{
			echo json_encode(array("status"=>"0"));
			die();
		}
		
	}
	public function submit_contact_enquiry()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$name=$this->input->post("name");
			$mobile=$this->input->post("mobile");
			$email=$this->input->post("email");
			$course=$this->input->post("course");
			$location=$this->input->post("location");
			$data_arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,'page_name'=>"Contact Enquiry","course"=>$course,"location"=>$location,"create_date"=>date("Y-m-d"));
			$this->HM->storeContactInquirt($data_arr);
			///////////////////////////////////////
			$this->_contact_enquiry = $this->config->item("email_template") . "contact_enquiry.php";
			$html= $this->load->view($this->_contact_enquiry,$data_arr,true);
			$this->email->clear(TRUE);
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from("noreply@janbasktraining.com","Janbask Training");
			//$this->email->to("himanshu.208@gmail.com");
			$this->email->to("tarun.arora@janbask.com,training@janbask.com, rohit.batra@janbask.com, jiten.miglani@janbask.com");
			/* $this->email->bcc('navin.3434@gmail.com');  */
			$this->email->subject( 'Enquiry from Contact Us Page');
			$this->email->message($html);
			$this->email->send();
			/////////////////////////////////////////
			echo json_encode(array("status"=>"1"));
			die();			
		}
		else
		{
			echo json_encode(array("status"=>"0"));
			die();
		}
		
	}
public function submit_popup_form1() {///print_r($_POST); die();
		if(isset($_POST) && !empty($_POST))
		{
			if(empty($this->input->post("email"))){
				echo json_encode(array("status"=>"0","msg"=>"Please provide a valid Email Id"));
				die();
			}
			$name=$this->input->post("name");
			$mobile=$this->input->post("mobile");
			$email=$this->input->post("email");
			//$course=$this->input->post("course");
			//$location=$this->input->post("location");
			$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
			$data_arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,'page_name'=>"Popup Form 1 Enquiry","create_date"=>date("Y-m-d"),"referer"=>$referer );
			//$this->HM->storeContactInquirt($data_arr);
			///////////////////////////////////////
			$this->_contact_enquiry = $this->config->item("email_template") . "popup_enquiry.php";
			$html= $this->load->view($this->_contact_enquiry,$data_arr,true);
			$this->email->clear(TRUE);
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			//$this->email->from("noreply@janbasktraining.com","Janbask Training");
			$this->email->from($email,$name);
			$this->email->to("himanshu.208@gmail.com");
			$this->email->to("tarun.arora@janbask.com,training@janbask.com, rohit.batra@janbask.com, jiten.miglani@janbask.com");
			/* $this->email->bcc('navin.3434@gmail.com');  */
			$this->email->subject( 'Enquiry from JanBaskTraining PopUp Form');
			$this->email->message($html);
			$this->email->send();
			/////////////////////////////////////////
			echo json_encode(array("status"=>"1","msg"=>"Thank you for submitting your query!"));
			die();			
		}
		else
		{
			echo json_encode(array("status"=>"0","msg"=>"Invalid Request.Please try again."));
			die();
		}
		
	}	
		public function submit_daily_deal() {///print_r($_POST); die(); 
		if(isset($_POST) && !empty($_POST))
		{
			if(empty($this->input->post("email"))){
				echo json_encode(array("status"=>"0","msg"=>"Please provide a valid Email Id"));
				die();
			}
			$name=$this->input->post("name");
			$phone=$this->input->post("phone");
			$email=$this->input->post("email");
			//$course=$this->input->post("course");
			//$location=$this->input->post("location");
			$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
			$data_arr=array("name"=>$name,"email"=>$email,"phone"=>$phone,"enquiry_date"=>date("Y-m-d"),"course"=>$referer );
			$res = $this->HM->storeDailyDealsEnquiry($data_arr);
			if($res ==false){
				echo json_encode(array("status"=>"0","msg"=>"You already applied for Today's Deal. Kindly check your email for discount coupon."));
				die();	
			}
			///////////////////////////////////////
			$this->_contact_enquiry = $this->config->item("email_template") . "daily_deals.php";
			$html= $this->load->view($this->_contact_enquiry,$data_arr,true);
			$this->email->clear(TRUE);
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['mailtype'] = 'html';
			//$this->email->initialize($config);
			//$this->email->from("noreply@janbasktraining.com","Janbask Training");
			///$this->email->from($email,$name);
			///$this->email->to("himanshu.208@gmail.com");
			//$this->email->to("tarun.arora@janbask.com,training@janbask.com, rohit.batra@janbask.com, jiten.miglani@janbask.com");
			/* $this->email->bcc('navin.3434@gmail.com');  */
			//$this->email->subject( 'Enquiry from JanBaskTraining PopUp Form');
			//$this->email->message($html);
			//$this->email->send();
			/////////////////////////////////////////
			echo json_encode(array("status"=>"1","msg"=>"Thanks for checking with us. We have sent you the coupon at your email address entered. We will also call you and ensure you have received the coupon."));
			die();			
		}
		else
		{
			echo json_encode(array("status"=>"0","msg"=>"Invalid Request.Please try again."));
			die();
		}
		
	}
		
	public function newsleter_form()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$email=$this->input->post("email");
			$data_arr=array("email"=>$email,"register_date"=>date("Y-m-d"));
			$is_exists=$this->HM->checkNewsletterEmail($email);
			if($is_exists)
			{
			
				echo json_encode(array("status"=>"0","email_exists"=>"1"));
				die();			
			}
			else
			{
				$this->HM->storeNewsletterEmail($data_arr);
				echo json_encode(array("status"=>"1"));
				die();				
			}
		}
		else
		{
			echo json_encode(array("status"=>"0"));
			die();
		}
		
	}	
	public function future_training()
	{
		$data["courses"] = $this->HM->fetchCourseList();
		$data["countries"] = $this->AFM->fetchCountriesList();
		$this->load->view($this->_future_training,$data);
	}
	public function thankyou()
	{
		$data['page']='';
		$this->load->view($this->_thankyou,$data);
	}	
	public function submit_future_training_enquiry()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$name=$this->input->post("name");
			$mobile=$this->input->post("mobile");
			$email=$this->input->post("email");
			$ft_suitable_timing=$this->input->post("ft_suitable_timing");
			$course=$this->input->post("course");
			$country=$this->input->post("country");
			$state=$this->input->post("state");
			$pincode=$this->input->post("pincode");
			$message=$this->input->post("message");
			$data_arr=array("name"=>$name,"email"=>$email,"mobile"=>$mobile,"suitable_timing"=>$ft_suitable_timing,"course"=>$course,"country"=>$country,"state"=>$state,"pin_code"=>$pincode,'page_name'=>"Future Training Enquiry","message"=>$message,"create_date"=>date("Y-m-d"));
			$this->HM->storeFutureTrainingInquirt($data_arr);
			echo json_encode(array("status"=>"1"));
			die();			
		}
		else
		{
			echo json_encode(array("status"=>"0"));
			die();
		}
	}	
	
	public function submitRating() {
		if(isset($_POST) && !empty($_POST)) {
			$user_id = $this->input->post("user_id");
			$course_id = $this->input->post("course_id");
			$comments = $this->input->post("comments");
			$stars = $this->input->post("stars");
			$userDetails = $this->HM->ratingUserDetails($user_id);
			
			$create_date = date('Y-m-d');
			$rating_data = array('course_id'=>$course_id,'user_id'=>$user_id,'stars'=>$stars,'comments'=>$comments,'status'=>"0","is_admin_added"=>"0","user_name"=>$userDetails[0]->name,"user_email"=>$userDetails[0]->email,"user_image"=>$userDetails[0]->image,"create_date"=>$create_date);
			
			$status = $this->AM->inesertNewRating($rating_data);
			if ($status=="1") {
				$return = array("rating"=>"1");
			} else {
				$return = array("rating"=>"0");
			}
			echo json_encode($return);
			die();
		} else {
			redirect(site_url);	
		}
	}
}
