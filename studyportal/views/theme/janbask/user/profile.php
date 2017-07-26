<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JanBask Dashboard</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/bootstrap.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/bootstrap-responsive.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/colorpicker.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/datepicker.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/uniform.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/select2.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/matrix-style.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/matrix-media.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/bootstrap-wysihtml5.css');	?>" />
		<link href="<?php	echo site_url('assets/student_css_js/font-awesome/css/font-awesome.css');	?>" rel="stylesheet" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/custom.css');	?>">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php	$this->load->view($this->config->item("user_template_include")."header");	?>
<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-inbox"></i> Menu</a>
  <ul>
    <li ><a href="<?php	echo site_url("user");	?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li > <a href="<?php	echo site_url("user/orders");	?>"><i class="icon icon-money"></i> <span>Order History</span></a> </li>
    <li class="active"> <a href="<?php	echo site_url("user/profile");	?>"><i class="icon icon-pencil"></i> <span>Edit Profile</span></a> </li>
    <!--<li class="content"> <span>Java Classes Completed</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 10%;" class="bar"></div>
      </div>
      <span class="percent">10%</span>
      <div class="stat">1 / 10</div>
    </li>
    <li class="content"> <span>Salesforce Classes Completed</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 50%;" class="bar"></div>
      </div>
      <span class="percent">50%</span>
      <div class="stat">10 / 20</div>
    </li> -->
  </ul>
</div>
<!--sidebar-menu--> 
		
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb">
					<a href="<?php echo site_url('user');?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="#" class="tip-bottom">Edit Profile</a>
				</div>
				<h1>Edit/Update Profile</h1>
				<h4 style="color:green;margin-left:20px;"><?php echo $this->session->flashdata('action_message'); ?></h4>
				<h4 style="color:red;margin-left:20px;"><?php echo $this->session->flashdata('error_message'); ?></h4>
			</div>
			<div class="container-fluid">
				<hr>
				<div class="row-fluid">
					<div class="span6">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Personal-info</h5>
							</div>
							<div class="widget-content nopadding">
								<?php	echo form_open_multipart("",array("id"=>"profile_update_form","class"=>"form-horizontal"));	?>
									<div class="control-group">
										<label class="control-label">Name :</label>
										<div class="controls">
											<?php	$profile_name = $user_info[0]->name;	?>
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"","id"=>"profile_name","name"=>"profile_name","value"=>"$profile_name"));	?>
											<div class="validation-error" id="profile_name_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email ID :</label>
										<div class="controls">
											<?php	$profile_email = $user_info[0]->email;	?>
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"","id"=>"profile_email","name"=>"profile_email","value"=>"$profile_email"));	?>
											<div class="validation-error" id="profile_email_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Contact No. :</label>
										<div class="controls">
											<?php	$profile_contact = $user_info[0]->mobile;	?>
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"","id"=>"profile_mobile","name"=>"profile_mobile","value"=>"$profile_contact"));	?>
											<div class="validation-error" id="profile_mobile_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Your Address</label>
											<div class="controls">
												<?php	$profile_address = $user_info[0]->address;	?>
												<?php	echo form_textarea(array("class"=>"span11","id"=>"profile_address","name"=>"profile_address","rows"=>"3","value"=>"$profile_address"));	?>
												<div class="validation-error" id="profile_address_error"></div>
											</div>
									</div>
									<div class="control-group">
										<label class="control-label">Select Country</label>
										<div class="controls">
										<?php
											if(empty($countries))
											{
												echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Enter Country","id"=>"country_selected","name"=>"country_selected"));
											}
											else
											{
												$country_list[0] = "Choose Country";
												foreach($countries as $country)
												{
													$country_list[$country->country_id] = $country->country_name;
												}
												if($user_info[0]->country!="" || $user_info[0]->country!="0")
												{
													if (array_key_exists($user_info[0]->country,$country_list))
													{
														$country_selected = array($user_info[0]->country);
													}
												}
												else
												{
													$country_selected = array();
												}
												echo form_dropdown("country_selected",$country_list,$country_selected,array("id"=>"country_selected","onchange"=>"select_state()"));
											}
										?>
											<div class="validation-error" id="profile_country_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Select State</label>
										<div class="controls">
											<?php
												if(empty($states))
												{
													echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Enter State","id"=>"state_selected","name"=>"state_selected"));
												}
												else
												{
												$state_list[0] = "Choose State";
												foreach($states as $country)
												{
													$state_list[$country->state_id] = $country->state_name;
												}
												if($user_info[0]->state!="" || $user_info[0]->state!="0")
												{
													if (array_key_exists($user_info[0]->state,$state_list))
													{
														$state_selected = array($user_info[0]->state);
													}
												}
												else
												{
													$state_selected = array();
												}
												echo form_dropdown("state_selected",$state_list,$state_selected,array("id"=>"state_selected","onchange"=>"select_city()"));
													
											?>
													
											<?php
												}
											?>
												<div class="validation-error" id="profile_state_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Select City</label>
										<div class="controls">
											<?php
												
													
												if(empty($cities))
												{
													echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Enter State","id"=>"state_selected","name"=>"state_selected"));
												}
												
												else
												{
												$city_list[0] = "Choose State";
												foreach($cities as $state)
												{
													$city_list[$state->city_id] = $state->city_name;
												}
												if($user_info[0]->city!="" || $user_info[0]->city!="0")
												{
													if (array_key_exists($user_info[0]->city,$city_list))
													{
														$city_selected = array($user_info[0]->city);
													}
												}
												else
												{
													$city_selected = array();
												}
												echo form_dropdown("city_selected",$city_list,$city_selected,array("id"=>"city_selected"));
											?>
													
											<?php
												}
											?>
												<div class="validation-error" id="profile_city_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Pin Code</label>
										<div class="controls">
											<?php	$profile_pincode = $user_info[0]->pincode;	?>
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Pin Code","id"=>"profile_pincode","name"=>"profile_pincode","value"=>$profile_pincode));	?>
											<div class="validation-error" id="profile_pincode_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Upload Photo</label>
										<div class="controls">
											<?php	echo form_upload(array("name"=>"profile_image","id"=>"profile_image","placeholder"=>"Choose File"));	?>
											<div class="validation-error" id="profile_image_error"></div>
										</div>
									</div>
									<div class="form-actions">
										<?php	echo form_submit(array("class"=>"btn btn-success","value"=>"Update Profile"));	?>
									</div>
								<?php	echo form_close();	?>
							</div>
							<div id="show_loader" class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background:#EBEBEB;height:100%;width: 100%;top: 0;left: 0;opacity: 1;display:none;">
								<!--<p class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style='text-align:center;height:100%;width:100%;top:40%'>This is the overlay!</p>-->
								<img src="<?php	echo site_url('assets/img/loading.gif');	?>" alt="">
							</div>
						</div>
					</div>
					<div class="span6">
						
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Reset Password</h5>
							</div>
							<div class="widget-content nopadding">
								<?php	echo form_open("",array("id"=>"profile_pass_form","class"=>"form-horizontal"));	?>
									<div class="control-group">
										<label class="control-label">Current Password</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"password","class"=>"span11","placeholder"=>"Current Password","id"=>"profile_current_pass","name"=>"profile_current_pass"));	?>
											<div class="validation-error" id="profile_current_pass_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">New Password</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"password","class"=>"span11","placeholder"=>"New Password","id"=>"profile_new_pass","name"=>"profile_new_pass"));	?>
											<p style="font-size:12px;">(Password must be 8 Character that contains Numbers, Special Character, Upper Case )</p>
											<div class="validation-error" id="profile_new_pass_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Confirn New Password</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"password","class"=>"span11","placeholder"=>"Confirn New Password","id"=>"profile_con_new_pass","name"=>"profile_con_new_pass"));	?>
											<div class="validation-error" id="profile_con_new_pass_error"></div>
										</div>
									</div>
									<div class="form-actions">
										<?php	echo form_submit(array("class"=>"btn btn-success","value"=>"Save"));	?>
									</div>
								<?php	echo form_close();	?>
							</div>
							<div id="change_pass_loader" class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background:#EBEBEB;height:100%;width: 100%;top: 0;left: 0;opacity: 1;display:none;">
								<!--<p class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style='text-align:center;height:100%;width:100%;top:40%'>This is the overlay!</p>-->
								<img src="<?php	echo site_url('assets/img/loading.gif');	?>" alt="">
							</div>
						</div>
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Additional Information</h5>
							</div>
							<div class="widget-content nopadding">
								<form action="#" method="get" class="form-horizontal">
									<div class="control-group">
										<label class="control-label">Courses Interetsed in</label>
										<div class="controls">
											<select multiple >
												<option>Java</option>
												<option selected>Salesforce</option>
												<option>.net</option>
												<option>Others</option>
											</select>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn btn-success">Save</button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<?php	$this->load->view($this->config->item("user_template_include")."footer");	?>
		<script src="<?php	echo site_url('assets/student_css_js/js/jquery.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/bootstrap.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/jquery.uniform.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/select2.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/matrix.form_common.js');	?>"></script> 
		<script type="text/javascript" src="<?php	echo site_url('assets/student_css_js/custom/user_common_functions.js');	?>"></script>
		<script type="text/javascript" src="<?php	echo site_url('assets/student_css_js/custom/user_cutom_validations.js');	?>"></script>
	</body>
</html>
