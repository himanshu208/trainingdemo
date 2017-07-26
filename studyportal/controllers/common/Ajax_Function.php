<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_Function extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		
	}
	
		/********************************
		Start Function used to fetch state List from states table
		*********************************/
	public function fetchStateList()
	{
		$country_id = $this->input->post("country_id");
		$states = $this->AFM->fetchStateList($country_id);
		echo json_encode($states);
		die();
	}
		/********************************
		End Function used to fetch state List from states table
		*********************************/
		
		/********************************
		Start Function used to fetch cities List from city table
		*********************************/
	public function fetchCityList()
	{
		$state_id = $this->input->post("state_id");
		$states = $this->AFM->fetchCityList($state_id);
		echo json_encode($states);
		die();
	}
		/********************************
		End Function used to fetch cities List from city table
		*********************************/
		
		/********************************
			Start Function to update password from profile page
		*********************************/
	public function updateProfilePass()
	{
		$this->checkUserLoginSession();
		$user_id = $this->session->userdata("user_id");
		$current_pass = md5($this->input->post("profile_current_pass"));
		$new_pass = md5($this->input->post("profile_new_pass"));
		// echo $user_id."<br />";
		// echo $current_pass."<br />";
		// echo $new_pass."<br />";die();
		$response = $this->AFM->updateProfilePass($user_id,$current_pass,$new_pass);
		if($response["pass_update"]=="1")
		{
			$this->session->set_flashdata('action_message', 'Password Update Successfully');
		}
		echo json_encode($response);
		die();
	}
		/********************************
			End Function to update password from profile page
		*********************************/
	
}
