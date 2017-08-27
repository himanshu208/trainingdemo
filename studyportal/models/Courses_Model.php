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
	
}
	
?>