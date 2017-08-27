<?php
class Courses_Model extends CI_Model
{
	/********************************
		Start Function used to fetch batches info based on course id
	*********************************/
	function fetchBatches($course_id)
	{
		$this->db->select("*");
		$this->db->from("batches");
		$this->db->where("course_id",$course_id);
		$this->db->where("start_date >",date("Y-m-d"));
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}
	/********************************
		End Function used to fetch Country List from countries table
	*********************************/
	
	/********************************
		Start Function used by jb_helper to check if user already enrolled for batch
	*********************************/	
	function check_enrolled_batches($user_id,$batch_id)
	{
		$this->db->select("*");
		$this->db->from("user_enrolled_batches");
		$this->db->where("user_id",$user_id);
		$this->db->where("batch_id",$batch_id);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$response = $query->result();
		}
		else
		{
			$response = array();
		}
		return $response;
	}
	/********************************
		End Function used by jb_helper to check if user already enrolled for batch
	*********************************/	
	
	/********************************
		Start Function to fetch ratings based on course id
	*********************************/
	function checkUserRatings($course_id) {
		$this->db->select("*");
		$this->db->from("jb_rating");
		$this->db->where("course_id",$course_id);
		$query = $this->db->get();
		if($query->num_rows()>0) {
			$response = $query->result();
		} else {
			$response = array();
		}
		return $response;
	}
	/********************************
		End Function to fetch ratings based on course id
	*********************************/
	
	/********************************
		Start Function to check if user enrolled in particular course
	*********************************/
	function userEnrollStatus($course_id,$user_id) {
		$this->db->select("*");
		$this->db->from("user_enrolled_batches");
		$this->db->where("course_id",$course_id);
		$this->db->where("user_id",$user_id);
		$query = $this->db->get();
		if($query->num_rows()>0) {
			$response = array("UserLoggedIn"=>"1","userEnrollStatus"=>"1","course_id"=>$course_id,"user_id"=>$user_id);
		} else {
			$response = array("UserLoggedIn"=>"1","userEnrollStatus"=>"0","course_id"=>$course_id,"user_id"=>$user_id);
		}
		return $response;
	}
	/********************************
		End Function to check if user enrolled in particular course
	*********************************/
}
	
?>