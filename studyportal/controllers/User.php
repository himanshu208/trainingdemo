<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->checkUserLoginSession();
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://www.janbasktraining.com/user
	 *	- or -
	 * 		http://www.janbasktraining.com/user/index
	*/
	
	public function index()
	{
		$user_id = $this->session->userdata("user_id");
		$data['classes'] = $this->UM->fetchUserClasses($user_id);
		// print_r($data['classes']);die();
		$this->load->view($this->_user_container,$data);
	}
	
	/********************************
		Start Function related to profile 
	*********************************/
		/*Function to view User Profile Info*/
	public function profile()
	{
		$user_id = $this->session->userdata("user_id");
		$user_info = $this->UM->fetchUserInfo($user_id);
		$data["user_info"] = $user_info;
		$data["countries"] = $this->AFM->fetchCountriesList();
		$data["states"] = $this->AFM->fetchStateList($user_info[0]->country);
		$data["cities"] = $this->AFM->fetchCityList($user_info[0]->state);
		$data["user_id"] = $user_id;

		$this->load->view($this->_user_profile,$data);
	}
		/**Function to update user information**/
	public function updateProfile()
	{
		$user_id = $this->session->userdata("user_id");
		$profile_name = $this->input->post("profile_name");
		$profile_email = $this->input->post("profile_email");
		$profile_mobile = $this->input->post("profile_mobile");
		$profile_address = $this->input->post("profile_address");
		$country_selected = $this->input->post("country_selected");
		$state_selected = $this->input->post("state_selected");
		$city_selected = $this->input->post("city_selected");
		$profile_pincode = $this->input->post("profile_pincode");
		$image_name = "";
		if(isset($_FILES["profile_image"]["name"]) && !empty($_FILES["profile_image"]["name"]))
		{
			$extension_1 = explode(".", $_FILES['profile_image']['name']);
			$extension = end($extension_1);
			$user_image_name = "user".rand().'.'.$extension;
			$config['upload_path'] =  $this->config->item("DIR_ROOT_IMAGE")."user/profile_pic/";
			$config['file_name'] = $user_image_name;
			$config['allowed_types'] = 'jpeg|jpg|png|JPEG|JPG|PNG';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('profile_image'))
			{
				$error = array('error' => $this->upload->display_errors());
			}
			else
			{ 
				$data = array('upload_data' => $this->upload->data()); 
				$image_name = $user_image_name;
			}
		}
		$new_info = array("name"=>$profile_name,"email"=>$profile_email,"mobile"=>$profile_mobile,"image"=>$image_name,"address"=>$profile_address,"country"=>$country_selected,"state"=>$state_selected,"city"=>$city_selected,"pincode"=>$profile_pincode);
		if($this->UM->updateUserInfo('user','user_id',$user_id,$new_info))
		{
			$response = array("update_status"=>"1");
			$this->session->set_flashdata('action_message', 'Profile Update Successfully');
		}
		else
		{
			$response = array("update_status"=>"0");
			$this->session->set_flashdata('error_message', 'Error Occured,Contact Admin');
		}
		echo json_encode($response);
		die();
	}
	
	/********************************
		End Function related to profile 
	*********************************/
	
	/********************************
		Start Function related to orders 
	*********************************/
		/*Function to view User Orders*/
	public function orders()
	{
		$user_id = $this->session->userdata("user_id");
		$data["order_arr"] = $this->UM->fetchUserOrders($user_id);
		$this->load->view($this->_user_orders,$data);
	}
	/********************************
		End Function related to profile 
	*********************************/
	
	/**Function for logout**/
	public function logout()
	{
		$this->session->unset_userdata("user_id");
		$this->session->unset_userdata("user_name");
		$this->session->sess_destroy();
		redirect(site_url());	
	}
}
