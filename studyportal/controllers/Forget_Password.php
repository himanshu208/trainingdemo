<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget_Password extends Front_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/forget-password
	 *	- or -
	 * 		http://www.janbasktraining.com/forget-password/index
	 */
	public function index()
	{
		$data["page"] = "Page123";
		$this->load->view($this->_forget_password,$data);
	}
	
		/*Function to check if user exist or send email for password reset*/
	public function checkExistingUser()
	{
		$email = $this->input->post("forget_pass_email");
		$token = $this->getToken(15);
		$user_info = array("email"=>$email,"pass_reset_token"=>$token);
		$user_exist = $this->HM->PassReset($user_info);
		if($user_exist["mail_exist"]=="1")
		{
			$this->userPassResetEmail($email,$token);
		}
		echo json_encode($user_exist);
		die();
	}
	
	/*	Function to send Password Reset Email	*/
	public function userPassResetEmail($email,$token)
	{
		$url  = site_url("/reset-password/".$token);
		$data["url"] = $url;
		$html= $this->load->view($this->_password_reset,$data,true);
		$this->email->clear(TRUE);
        $config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from("info@janbasktraining.com","Janbask Training");
		$this->email->to($email);
		/* $this->email->bcc('navin.3434@gmail.com');  */
		$this->email->subject( 'Janbask-Password Reset');
		$this->email->message($html);
		$this->email->send();
	}
	
		/*Function Used to View Password Reset Page*/
	public function reset_password()
	{
		$token = $this->uri->segment(2);
		$verification_status = $this->HM->passResetVerify($token);
		if($verification_status["token_exist"]=="1")
		{
			$data["msg"] = "Reset Password";
			$data["token_exist"] = "1";
		}
		else
		{
			$data["msg"] = "Inavlid Url/Token";
			$data["token_exist"] = "0";
		}
		$data["token"] = $token;
		$this->load->view($this->_reset_password,$data);
	}
	
		/**Function to update passwrod**/
	public function update_user_password()
	{
		$token = $this->input->post("token");
		$reset_pass = $this->input->post("reset_pass");
		$reset_pass = md5($reset_pass);
		$this->HM->updatePassword('user','pass_reset_token',$token,$reset_pass);
		$this->HM->emptyResetToken($token);
		echo json_encode(array("pass_update"=>"1"));
		die();
	}
}
