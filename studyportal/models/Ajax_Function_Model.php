<?php
class Ajax_Function_Model extends CI_Model
{
	/********************************
		Start Function used to fetch Country List from countries table
	*********************************/
	function fetchCountriesList()
	{
		$this->db->select("*");
		$this->db->from("countries");
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
		Start Function used to fetch Country Name Based on Coutry Id
	*********************************/
	function fetchCountryName($country_id)
	{
		$this->db->select("*");
		$this->db->from("countries");
		$this->db->where("country_id",$country_id);
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
		Start Function used to fetch Country Name Based on Coutry Id
	*********************************/
	
	/********************************
		Start Function used to fetch State List from states table
	*********************************/
	function fetchStateList($country_id)
	{
		$where_cond = array("country_id"=>$country_id);
		$this->db->select("*");
		$this->db->from("states");
		$this->db->where($where_cond);
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
		End Function used to fetch State List from states table
	*********************************/
	
	/********************************
		Start Function used to fetch City List from cities table
	*********************************/
	function fetchCityList($state_id)
	{
		$where_cond = array("state_id"=>$state_id);
		$this->db->select("*");
		$this->db->from("cities");
		$this->db->where($where_cond);
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
		End Function used to fetch State List from states table
	*********************************/
	
	/********************************
		Start Function to update password from profile page
	*********************************/
	function updateProfilePass($user_id,$current_pass,$new_pass)
	{
		$where_cond = array("user_id"=>$user_id);
		$this->db->select("*");
		$this->db->from("user");
		$this->db->where($where_cond);
		$query = $this->db->get();
		$response = $query->result();
		$db_pass = $response[0]->password;
		if($db_pass==$current_pass)
		{
			$this->updateUserPass($user_id,$new_pass);
			$response = array("pass_match"=>"1","pass_update"=>"1");
		}
		else
		{
			$response = array("pass_match"=>"0","pass_update"=>"0");
		}
		return $response;
	}	
	function updateUserPass($user_id,$new_pass)
	{
		$user_info = array("password"=>$new_pass);
		$this->db->where('user_id', $user_id);
		$this->db->update('user',$user_info);
	}
	/********************************
		End Function to update password from profile page
	*********************************/
}
	
?>