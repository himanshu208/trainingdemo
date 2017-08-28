<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JanBask Dashboard</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap-responsive.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/uniform.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/select2.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/matrix-style.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/matrix-media.css');	?>" />
		<link href="<?php	echo site_url('assets/admin/font-awesome/css/font-awesome.css');	?>" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/custom.css');	?>">
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/rating.css');	?>">
	</head>
	<body>
		<?php	$this->load->view($this->config->item("admin_template_include")."header");	?>
		<?php	$this->load->view($this->config->item("admin_template_include")."sidebar");	?>

		<!--main-container-part-->
		<div id="content" style="background-color:#fff;">
			<div id="content-header" >
				<div id="breadcrumb">
					<a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="#" class="current">Add New Rating</a>
				</div>
			</div>
			<div class="container-fluid">
				<h4 style="color:red"><?php echo $this->session->flashdata('error_message'); ?></h4>
				<div class="row-fluid">
				
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Add New Rating</h5>
							</div>
							<div class="widget-content nopadding">

								<?php	echo form_open_multipart("",array("id"=>"add_new_rating_form","class"=>"form-horizontal"));	?>
									<div class="control-group">
										<label class="control-label">Name :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Name","id"=>"ratingUserName","name"=>"ratingUserName"));	?>
											<div style='color:#666' class="admin-validation-error" id="ratingUserNameError"></div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Course :</label>
										<div class="controls">
											<?php
												$course_list[0] = "Choose From List";
												foreach($course_arr as $course)
												{
													$course_list[$course->course_id] = $course->name;
												}
												echo form_dropdown("ratingCourse",$course_list,'',array("id"=>"ratingCourse"));
											?>
											<div style='color:#666' class="admin-validation-error" id="ratingCourseError"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Comments</label>
										<div class="controls">
											<?php	echo form_textarea(array("class"=>"span11","placeholder"=>"Enter Comments","id"=>"ratingComments","name"=>"ratingComments"));	?>
											<div style='color:#666' class="admin-validation-error" id="ratingCommentsError"></div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Ratings</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Rating Stars","id"=>"ratingStar","name"=>"ratingStar"));	?>
											<div style='color:#666' class="admin-validation-error" id="ratingStarError"></div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Upload Image</label>
										<div class="controls">
											<?php	echo form_upload(array("name"=>"ratingUserImage","id"=>"ratingUserImage","placeholder"=>"Choose File"));	?>
											<div style='color:#666' class="admin-validation-error" id="ratingImageError"></div>
										</div>
									</div>
									<div class="form-actions">
										<?php	echo form_submit(array("class"=>"btn btn-success","value"=>"Save"));	?>
									</div>
								<?php	echo form_close();	?>
								<div id="show_loader" class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background:#EBEBEB;height:100%;width: 100%;top: 0;left: 0;opacity: 1;display:none;">
								<!--<p class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style='text-align:center;height:100%;width:100%;top:40%'>This is the overlay!</p>-->
								<img src="<?php	echo site_url('assets/img/loading.gif');	?>" alt="">
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--main-container-part--> 
		
		<?php	$this->load->view($this->config->item("admin_template_include")."footer");	?>
		<script src="<?php	echo site_url('assets/admin/js/jquery.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/admin/js/jquery.ui.custom.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/admin/js/bootstrap.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/admin/js/jquery.uniform.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/admin/js/select2.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/admin/js/jquery.dataTables.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/admin/js/matrix.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/admin/js/matrix.tables.js');	?>"></script>
		<script src="<?php	echo site_url('assets/admin/custom/common_functions.js');	?>"></script>
		<script src="<?php	echo site_url('assets/admin/custom/custom_validations.js');	?>"></script>
		<script src="<?php	echo site_url('assets/admin/custom/admin.js');	?>"></script>
	</body>
</html>
