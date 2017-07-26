<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if ( ! function_exists('check_enrolled_batches'))
{
	/**Function to check if a user already enrolled for a particular batch**/
	function check_enrolled_batches($user_id,$batch_id)
	{
		$ci =& get_instance();
		$ci->load->model("Courses_Model","CM1");
		$enrolled_status=$ci->CM1->check_enrolled_batches($user_id,$batch_id);
		$total=count($enrolled_status);

		return $total;
	}
	
}

?>