<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*define routing for Home Controller(Front View)*/
$route['login'] = "Login";
// $route['login/facebook-login'] = "Login/facebookLogin";
$route['register'] = "Register";
$route['register-sucessfull'] = "Register/register_successfull";
$route['forget-password'] = "Forget_Password";
$route['insructor-login'] = "Instructor_Login";

$route['confirmemail/:any'] = "Register/confirmemail";
$route['reset-password/:any'] = "Forget_Password/reset_password";

$route['corporate-training'] = "Home/corporate_training";
$route['future-training'] = "Home/future_training";
$route['submit_future_training_enquiry'] = "Home/submit_future_training_enquiry";


$route['courses'] = "Courses";

$route['online-java-training'] = "Courses/java";
$route['courses/java-developer'] = "Courses/java_developer";
$route['courses/advanced-java-developer'] = "Courses/advanced_java_developer";

$route['dotnet-training'] = "Courses/dotnet";
$route['courses/dotnet-developer'] = "Courses/dotnet_developer";
$route['courses/advanced-dotnet-developer'] = "Courses/advanced_dotnet_developer";

$route['business-analyst-training'] = "Courses/ba";

$route['online-qa-training'] = "Courses/qa";
$route['courses/qa-manual-testing'] = "Courses/qa_manual_testing";
$route['courses/qa-qtp-testing'] = "Courses/qa_qtp_testing";
$route['courses/qa-selenium-automation'] = "Courses/qa_selenium_automation";

$route['pmp-course'] = "Courses/pmp";

$route['hadoop-big-data-analytics'] = "Courses/hadoop";
$route['courses/hadoop-admin'] = "Courses/hadoop_admin";
$route['submit_corporate_enquiry'] = "Home/submit_corporate_enquiry";
$route['submit_contact_enquiry'] = "Home/submit_contact_enquiry";
$route['submit_popup_form1'] = "Home/submit_popup_form1";
$route['thanks-you'] = "Home/thankyou";
$route['newsleter_form'] = "Home/newsleter_form";
$route['courses/hadoop-developer'] = "Courses/hadoop_developer";
$route['courses/hadoop-adv-admin'] = "Courses/hadoop_adv_admin";
$route['courses/hadoop-adv-developer'] = "Courses/hadoop_adv_developer";

$route['online-salesforce-training'] = "Courses/salesforce";
$route['online-it-training'] = "Courses/online_it_training";
$route['courses/salesforce-admin'] = "Courses/salesforce_admin";
$route['courses/salesforce-developer'] = "Courses/salesforce_developer";
$route['courses/salesforce-adv-admin'] = "Courses/salesforce_adv_admin";
$route['courses/salesforce-adv-developer'] = "Courses/salesforce_adv_developer";

$route['courses/aws'] = "Courses/aws";
$route['courses/aws-admin'] = "Courses/aws_admin";
$route['courses/aws-developer'] = "Courses/aws_developer";
$route['courses/aws-adv-admin'] = "Courses/aws_adv_admin";
$route['courses/aws-adv-developer'] = "Courses/aws_adv_developer";
$route['courses/digital-marketing'] = "Courses/digital_marketing";
$route['oracle-dba-training'] = "Courses/oracle_dba";
$route['online-sql-server-training'] = "Courses/sql";
$route['data-science'] = "Courses/data_science";
$route['courses/vmware'] = "Courses/vmware";
$route['devops-certification-training'] = "Courses/devops";

$route['courses/android'] = "Courses/android";

$route['iphone-application-training'] = "Courses/ios";

/*define routing for User Controller(Student Dashboard)*/
$route['user'] = "User";
$route['user/logout'] = "User/logout";

$route['user/profile'] = "User/profile";
$route['user/orders'] = "User/orders";
/*define routing for Checout Controller()*/
$route['checkout'] = "Checkout";
/*define routing for Payment Controller()*/
$route['payment'] = "Payment";
$route['payment-status'] = "Payment/payment_status";
/* Define routing for Information and policy pages*/
$route['about-us'] = "Information/about_us";
$route['contact-us'] = "Information/contact_us";
$route['privacy-policy'] = "Information/privacy_policy";
$route['refund-policy'] = "Information/refund_policy";
$route['term-condition'] = "Information/term_condition";
$route['term-of-use'] = "Information/term_of_use";
$route['website-policy'] = "Information/website_ploicy";
$route['disclaimer'] = "Information/disclaimer";
$route['non-started-course-enquiry'] = "Information/non_started_course_enquiry";
$route['submit-non-start-course-enquiry'] = "Information/submit_non_start_course_enquiry";
/*define routing for Admin Controller(Admin Dashboard)*/
$route['myadmin'] = "Admin_Controller";
$route['myadmin/dashboard'] = "Admin_Controller/dashboard";
$route['myadmin/users'] = "Admin_Controller/users";
$route['myadmin/updatepassword'] = "Admin_Controller/updatepassword";
$route['myadmin/enrolled-users'] = "Admin_Controller/enrolled_users";
$route['myadmin/courses'] = "Admin_Controller/courses";
$route['myadmin/add-new-course'] = "Admin_Controller/add_new_course";
$route['myadmin/edit-course/:num'] = "Admin_Controller/edit_course";
$route['myadmin/batches'] = "Admin_Controller/batches";
$route['myadmin/add-new-batch'] = "Admin_Controller/add_new_batch";
$route['myadmin/edit_batch/:num'] = "Admin_Controller/edit_batch";
$route['myadmin/classes'] = "Admin_Controller/classes";
$route['myadmin/edit-class/:num'] = "Admin_Controller/edit_class";
$route['myadmin/add-new-class'] = "Admin_Controller/add_new_class";
$route['myadmin/add-class-url/:any'] = "Admin_Controller/add_class_url";
$route['myadmin/update-class-data/:any'] = "Admin_Controller/update_class_data";
$route['myadmin/trainers'] = "Admin_Controller/trainers";
$route['myadmin/add-new-trainer'] = "Admin_Controller/add_new_trainer";
$route['myadmin/coupon'] = "Admin_Controller/coupon";
$route['myadmin/add-new-coupon'] = "Admin_Controller/add_new_coupon";
$route['myadmin/enquiries'] = "Admin_Controller/enquiries";
/*$route['myadmin/corporate-enquiries'] = "Admin_Controller/corporate_enquiries";
$route['myadmin/contact-us-enquiries'] = "Admin_Controller/contact_us_enquiries";
$route['myadmin/non-course-start-enquiry'] = "Admin_Controller/non_course_start_enquiry";
$route['myadmin/instructor-enquiry'] = "Admin_Controller/instructor_enquiry";
$route['myadmin/future-course-enquiry'] = "Admin_Controller/future_course_enquiry"; */

$route['myadmin/logout'] = "Admin_Controller/logout";
/* */
$route['myadmin/subscriber'] = "Admin_Controller/subscriber";
$route['myadmin/emailtemplate'] = "Admin_Controller/emailtemplate";
$route['myadmin/add-new-emailtemplate'] = "Admin_Controller/add_new_emailtemplate";