<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Front_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/Login
	 *	- or -
	 * 		http://www.janbasktraining.com/Login/index
	 */
	public function index()
	{
		/*session_start();*/
		// Include the facebook api php libraries
		include_once APPPATH."libraries/facebook-login-api/facebook.php";
		
		// Facebook API Configuration
		$appId = '805136382987551';
		$appSecret = '8a1585cb769e27ce29adde7624a41858';
		$redirectUrl = 'http://janbaskdemo.com/jbclasses/Login/facebookLogin';
		$fbPermissions = 'email';
		
		//Call Facebook API
		$facebook = new Facebook(array(
		  'appId'  => $appId,
		  'secret' => $appSecret
		));
		$fbuser = '';
        $data['authUrl'] = $facebook->getLoginUrl(array('redirect_uri'=>$redirectUrl,'scope'=>$fbPermissions));
		$this->load->view($this->_login_container,$data);
	}
	
		/**Function for Login Process**/
	public function checkLogin()
	{
		$login_name = $this->input->post("login_name");
		$login_pass = md5($this->input->post("login_pass"));
		$response = $this->HM->checkLogin('user',$login_name,$login_pass);
		echo json_encode($response);
		die();
	}
	
		/**Function Used While Login With Facebook**/
	public function facebookLogin()
	{
		// Include the facebook api php libraries
		include_once APPPATH."libraries/facebook-login-api/facebook.php";
		
		// Facebook API Configuration
		$appId = '805136382987551';
		$appSecret = '8a1585cb769e27ce29adde7624a41858';

		//Call Facebook API
		$facebook = new Facebook(array(
		  'appId'  => $appId,
		  'secret' => $appSecret
		));
		
		if(isset($_GET['error']) && $_GET['error']=="access_denied")
		{
			return redirect(site_url('login'),'refresh');
		}
		else
		{
			$fbuser = $facebook->getUser();
			// print_r($fbuser);
			if($fbuser)
			{
				$userProfile = $facebook->api('/me?fields=id,first_name,last_name,email,gender,locale,picture');
				// Preparing data for database insertion
				/*$userData['oauth_provider'] = 'facebook';
				$userData['oauth_uid'] = $userProfile['id'];
				$userData['first_name'] = $userProfile['first_name'];
				$userData['last_name'] = $userProfile['last_name'];
				$userData['email'] = $userProfile['email'];
				$userData['gender'] = $userProfile['gender'];
				$userData['locale'] = $userProfile['locale'];
				$userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
				$userData['picture_url'] = $userProfile['picture']['data']['url'];*/
				$social_email = $userProfile['email'];
				$social_name = $userProfile['first_name']." ".$userProfile['last_name'];;
				$user_info = array("name"=>$social_name,"email"=>$social_email,"email_verified"=>"1","is_social"=>"1","social_platform","facebook");
				$response = $this->HM->checkExistingUser($user_info);
				if($response["mail_exist"]=="1")
				{
					$user_id = $response[0]->user_id;
					// echo 'Location:'.site_url('/user');die();
					// $userData['user_id']=$user_id;
					$this->session->set_userdata(array('user_id'=>$user_id));
					// print_r($userData);
					// echo "<br />";
					// echo $this->session->userdata("user_id");die();
					// redirect(site_url('user'));
					// header('Location:'.site_url('/user'));	
					 redirect(site_url('/user'), "location");
				}
			}
		}
	}
	
}
