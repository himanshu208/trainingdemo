<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");

/**
 * @subpackage      Controllers
 */
class Front_Controller extends My_Controller
{
	function Front_Controller()
	{
		parent::My_Controller();
		$this->_site_root_dir = $this->config->item("DIR_ROOT_IMAGE") ;
		$this->_site_host_image = $this->config->item("SITE_ROOT_IMAGE");
		
			/*Load Views for Home Contoller(Front View)*/
		$this->_thankyou = $this->config->item("tree_template") . "thankyou.php";
		$this->_home_container = $this->config->item("tree_template") . "home.php";
		$this->_login_container = $this->config->item("tree_template")."login.php";
		$this->_register_container = $this->config->item("tree_template")."register.php";
		$this->_register_successfull = $this->config->item("tree_template")."register_successfull.php";
		$this->_forget_password = $this->config->item("tree_template")."forget-password.php";
		$this->_reset_password = $this->config->item("tree_template")."reset-password.php";
		$this->_confirm_email = $this->config->item("tree_template") . "confirm-email.php";
		$this->_instructor_login = $this->config->item("tree_template")."insructor-login.php";
		$this->_future_training = $this->config->item("tree_template")."future_training.php";
		$this->_corporate_training = $this->config->item("tree_template")."corporate-training.php";
	
		
		$this->_course_container = $this->config->item("tree_template")."courses.php";
		$this->_online_it_training = $this->config->item("tree_template")."online_it_training.php";
		
		$this->_java_container = $this->config->item("tree_template")."java.php";
		$this->_java_developer = $this->config->item("tree_template")."java-developer.php";
		$this->_advanced_java_developer = $this->config->item("tree_template")."advanced-java-developer.php";
		
		$this->_dotnet_container = $this->config->item("tree_template")."dotnet.php";
		$this->_dotnet_developer = $this->config->item("tree_template")."dotnet-developer.php";
		$this->_advanced_dotnet_developer = $this->config->item("tree_template")."advanced-dotnet-developer.php";
		
		$this->_ba_container = $this->config->item("tree_template")."ba.php";
		
		$this->_qa_container = $this->config->item("tree_template")."qa.php";
		$this->_qa_manual_testing = $this->config->item("tree_template")."qa-manual-testing.php";
		$this->_qa_qtp_testing = $this->config->item("tree_template")."qa-qtp-testing.php";
		$this->_qa_selenium_automation = $this->config->item("tree_template")."qa-selenium-automation.php";
		
		$this->_pmp_container = $this->config->item("tree_template")."pmp.php";
		
		$this->_hadoop_container = $this->config->item("tree_template")."hadoop.php";
		$this->_hadoop_admin = $this->config->item("tree_template")."hadoop-admin.php";
		$this->_hadoop_developer = $this->config->item("tree_template")."hadoop-developer.php";
		$this->_hadoop_adv_admin = $this->config->item("tree_template")."hadoop-adv-admin.php";
		$this->_hadoop_adv_developer = $this->config->item("tree_template")."hadoop-adv-developer.php";
		
		$this->_salesforce_container = $this->config->item("tree_template")."salesforce.php";
		$this->_salesforce_admin = $this->config->item("tree_template")."salesforce-admin.php";
		$this->_salesforce_developer = $this->config->item("tree_template")."salesforce-developer.php";
		$this->_salesforce_adv_admin = $this->config->item("tree_template")."salesforce-adv-admin.php";
		$this->_salesforce_adv_developer = $this->config->item("tree_template")."salesforce-adv-developer.php";
		
		$this->_aws_container = $this->config->item("tree_template")."aws.php";
		$this->_aws_admin = $this->config->item("tree_template")."aws-admin.php";
		$this->_aws_developer = $this->config->item("tree_template")."aws-developer.php";
		$this->_aws_adv_admin = $this->config->item("tree_template")."aws-adv-admin.php";
		$this->_aws_adv_developer = $this->config->item("tree_template")."aws-adv-developer.php";
		$this->_payment = $this->config->item("tree_template") . "payment.php";		
		$this->_android_container = $this->config->item("tree_template")."android.php";
		
		$this->_ios_container = $this->config->item("tree_template")."ios.php";
		
		$this->_digital_marketing = $this->config->item("tree_template")."digital_marketing.php";
		$this->_oracle_dba = $this->config->item("tree_template")."oracle_dba.php";
		$this->_sql = $this->config->item("tree_template")."sql.php";
		$this->_data_science = $this->config->item("tree_template")."data_science.php";
		$this->_vmware = $this->config->item("tree_template")."vmware.php";
		$this->_devops = $this->config->item("tree_template")."devops.php";
		$this->_salesforce22 = $this->config->item("tree_template")."salesforce22.php";
		$this->_sql22 = $this->config->item("tree_template")."sql22.php";
		/* Load view for Information pages*/
		$this->_about_us = $this->config->item("tree_template")."about_us.php";		
		$this->_contact_us = $this->config->item("tree_template")."contact_us.php";		
		$this->_non_started_course_enquiry = $this->config->item("tree_template")."non_started_course_enquiry.php";		
		$this->_privacy_policy = $this->config->item("tree_template")."privacy_policy.php";		
		$this->_refund_policy = $this->config->item("tree_template")."refund_policy.php";		
		$this->_term_condition = $this->config->item("tree_template")."term_condition.php";		
		$this->_term_of_use = $this->config->item("tree_template")."term_of_use.php";		
		$this->_website_ploicy = $this->config->item("tree_template")."website_use_policy.php";		
		$this->_disclaimer = $this->config->item("tree_template")."disclaimer.php";		
			/*Load Views for User Contoller(Student Dashboard)*/
		$this->_user_container = $this->config->item("user_template") . "home.php";
		$this->_user_profile = $this->config->item("user_template") . "profile.php";
		$this->_user_orders = $this->config->item("user_template") . "orders.php";

		
		
			/*Load Views for Payment Contoller*/
		$this->_checkout = $this->config->item("tree_template") . "checkout.php";
		$this->_payment_status = $this->config->item("tree_template") . "payment-status.php";
		
			/*Load Views for Admin Contoller*/
		$this->_admin_login_container = $this->config->item("admin_template") . "login.php";
		$this->_admin_dashboard = $this->config->item("admin_template") . "dashboard.php";
		$this->_admin_users = $this->config->item("admin_template") . "users.php";
		$this->_admin_enrolled_users = $this->config->item("admin_template") . "enrolled-users.php";
		$this->_admin_courses = $this->config->item("admin_template") . "courses.php";
		$this->_admin_add_new_course = $this->config->item("admin_template") . "add-new-course.php";
		$this->_admin_edit_course = $this->config->item("admin_template") . "edit_course.php";
		$this->_admin_batches = $this->config->item("admin_template") . "batches.php";
		$this->_admin_add_new_batch = $this->config->item("admin_template") . "add-new-batch.php";
		$this->_admin_edit_batch = $this->config->item("admin_template") . "edit-batch.php";
		$this->_admin_classes = $this->config->item("admin_template") . "classes.php";
		$this->_admin_add_new_class = $this->config->item("admin_template") . "add-new-class.php";
		$this->_admin_edit_class = $this->config->item("admin_template") . "edit-class.php";
		$this->_admin_add_class_url = $this->config->item("admin_template") . "add-class-url.php";
		$this->_admin_update_class_data = $this->config->item("admin_template") . "update-class-data.php";
		$this->_admin_trainers = $this->config->item("admin_template") . "trainers.php";
		$this->_admin_add_new_trainer = $this->config->item("admin_template") . "add-new-trainer.php";
		$this->_admin_coupon = $this->config->item("admin_template") . "coupon.php";
		$this->_admin_add_new_coupon = $this->config->item("admin_template") . "add-new-coupon.php";
		$this->_admin_enquiries = $this->config->item("admin_template") . "admin_enquiries.php";
		//$this->_admin_contact_us_enquiries = $this->config->item("admin_template") . "contact-us-enquiries.php";
		//$this->_admin_course_page_enquiry = $this->config->item("admin_template")."admin_course_page_enquiry.php";
		//$this->_admin_non_course_enquiry = $this->config->item("admin_template")."non_course_enquiry.php";
		//$this->_admin_instructor_enquiry = $this->config->item("admin_template")."instructor_enquiry.php";
		$this->_admin_updatepassword = $this->config->item("admin_template")."admin_updatepassword.php";
		//$this->_admin_future_course_enquiry = $this->config->item("admin_template")."future_course_enquiry.php";		
		$this->_admin_newsletter_subscriber = $this->config->item("admin_template")."newsletter-subscriber.php";		
		$this->_admin_newsletter_emailtemplate = $this->config->item("admin_template")."newsletter-emailtemplate.php";		
		$this->_admin_newsletter_add_new_emailtemplate = $this->config->item("admin_template")."add-new-newsletter-emailtemplate.php";		
		
			/*Load Views for Emails*/
		$this->_on_registration = $this->config->item("email_template") . "on-registeration.php";
		$this->_sucessfully_verified = $this->config->item("email_template") . "sucessfully-verified.php";
		$this->_password_reset = $this->config->item("email_template") . "password-reset.php";
		$this->_class_joining_link = $this->config->item("email_template") . "joining-link.php";
		$this->_order_complete_email = $this->config->item("email_template") . "order-complete-email.php";
		$this->_on_class_end = $this->config->item("email_template") . "on-class-end.php";
		
		// $this->_register = $this->config->item("tree_template") . "register.php";
			
		/*Load Models Here*/
		$this->load->model("Home_Model","HM");	##LOads Home Model
		$this->load->model("User_Model","UM");	##Loads User Model
		$this->load->model("Ajax_Function_Model","AFM");	##Loads Ajax Function Model
		$this->load->model("Courses_Model","CM");	##Loads Ajax Function Model
		$this->load->model("Payment_Model","PM");	##Loads Ajax Function Model
		$this->load->model("Admin_Model","AM"); ##Loads Admin Model
	}
	
	/*Function to check for Session*/
	function checkUserLoginSession()
	{
		if(!($this->session->userdata("user_id")))
		{
			redirect(site_url());
		}
	}
	
	/*Function to check for Session*/
	function checkAdminLoginSession()
	{
		if(!($this->session->userdata("admin_id")))
		{
			redirect(site_url('myadmin'));
		}
	}
	
}
/* End of Front_controller.php */
/* Location: ./studyportal/libraries/Front_Controller.php */
