<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Front_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/Register
	 *	- or -
	 * 		http://www.janbasktraining.com/Register/index
	 */
	public function index()
	{
		$data["courses"] = $this->HM->fetchCourseList();
		$this->load->view($this->_register_container,$data);
	}
	public function register_successfull()
	{
		$data['page']='Register Successfull.';
		$this->load->view($this->_register_successfull,$data);
	}	
	
		/*Function to check if user already exist or to register a new user*/
	public function checkExistingUser()
	{
		$name = $this->input->post("reg_name");
		$country_code = $this->input->post("country_code");
		$mobile = $this->input->post("reg_mobile");
		$email = $this->input->post("reg_email");
		$pass = $this->input->post("reg_password");
		$course_interest = $this->input->post("reg_course");
		$password = md5($pass);
		$mail_token =$this->getToken(20);
		$date_created = date("Y-m-d");
		$user_info = array("name"=>$name,"email"=>$email,"country_code"=>$country_code,"mobile"=>$mobile,"password"=>$password,"course_interest"=>$course_interest,"mail_token"=>$mail_token,"date_created"=>$date_created);
		$user_exist = $this->HM->checkExistingUser($user_info);
		if($user_exist["mail_exist"]=="0")
		{
			$this->userRegistrationEmail($name,$email,$mail_token);
		}
		echo json_encode($user_exist);
		die();
	}
	
	/*	Function to send Verification Email After Registration	*/
	public function userRegistrationEmail($name,$email,$token)
	{
		// echo $name."<br />";
		// echo $email."<br />";
		// echo $token."<br />";
		$url  = site_url("/confirmemail/".$token);
		// $user_name = "Hello ".$name;
		$data["name"] = $name;
		$data["url"] = $url;
		$html= $this->load->view($this->_on_registration,$data,true);
		$this->email->clear(TRUE);
        $config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from("noreply@janbasktraining.com","Janbask Training");
		$this->email->to($email);
		/* $this->email->bcc('navin.3434@gmail.com');  */
		$this->email->subject( 'Verify Your Email ID - JanBask Training Registration');
		$this->email->message($html);
		$this->email->send();
	}
	
		/*Function Used to Confirm User Email*/
	public function confirmemail(){
		$token = $this->uri->segment(2);
		
		$verification_status = $this->HM->userEmailVerify($token);
		$is_token_valid = $verification_status["is_token_valid"];
		if($is_token_valid=="0")
		{
			$data["msg"] = "Invalid Url/Token";
			$data["status"] = "1";
		}
		else
		{
			$is_already_verify = $verification_status["is_already_verify"];
			if($is_already_verify=="1")
			{
				$data["msg"] = "Your E-mail ID has already been Verified";
				$data["status"] = "2";
			}
			else
			{
				$data["msg"] = "Your E-mail ID has been Successfully Verified";
				$data["status"] = "3";
				$email = $verification_status["email"];
				$name = $verification_status["name"];
				$this->sucessfullyVerifiedEmail($name,$email);
			}
		}
		$this->load->view($this->_confirm_email,$data);
	}
	
		/**Function to send email after successful verification**/
	public function sucessfullyVerifiedEmail($name,$email)
	{
		$data["name"] = $name;
		$html= $this->load->view($this->_sucessfully_verified,$data,true);
		$this->email->clear(TRUE);
        $config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from("noreply@janbasktraining.com","Janbask Training");
		$this->email->to($email);
		/* $this->email->bcc('navin.3434@gmail.com');  */
		$this->email->subject( 'Account Verified Successfully - JanBask Training ');
		$this->email->message($html);
		$this->email->send();
	}
	
}
