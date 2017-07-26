<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructor_Login extends Front_Controller
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
		$data["countries"] = $this->AFM->fetchCountriesList();
		$this->load->view($this->_instructor_login,$data);
	}
	public function instructorEnquiry()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$name=$_POST['name'];
			$mobile=$_POST['phone'];
			$country_code=$_POST['country_code'];
			$email=$_POST['email'];
			$state=$_POST['state'];
			$country=$_POST['country'];
			$pincode=$_POST['pincode'];
			$expertise=$_POST['expertise'];
			$experience=$_POST['experience'];
			$cover_letter=$_POST['cover_letter'];
			$file_name = "";
			if(isset($_FILES["resume"]["name"]) && !empty($_FILES["resume"]["name"]))
			{
				$extension_1 = explode(".", $_FILES['resume']['name']);
				$extension = end($extension_1);
				$resume_file = "resume".rand().'.'.$extension;
				$config['upload_path'] =  $this->config->item("DIR_ROOT_IMAGE")."trainer/resume/";
				$config['file_name'] = $resume_file;
				$config['allowed_types'] = '*';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('resume'))
				{
					$error = array('error' => $this->upload->display_errors());
				}
				else
				{
					$data = array('upload_data' => $this->upload->data()); 
					$file_name = $resume_file;
				}
			}
			$data_arr=array('name'=>$name,'country_code'=>$country_code,'mobile'=>$mobile,'email'=>$email,'country'=>$country,'state'=>$state,'pin_code'=>$pincode,'technical_expertise'=>$expertise,'experience'=>$experience,'cover_letter'=>$cover_letter,'resume'=>$resume_file,'page_name'=>"Instructor Login",'create_date'=>date("Y-m-d"));
			$isSaved=$this->HM->saveInstructorEnquiry($data_arr);
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
