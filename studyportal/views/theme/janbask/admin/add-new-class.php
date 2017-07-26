<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JanBask Dashboard</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap-responsive.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/datepicker.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/uniform.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/select2.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/matrix-style.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/matrix-media.css');	?>" />
		<link href="<?php	echo site_url('assets/admin/font-awesome/css/font-awesome.css');	?>" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/custom.css');	?>">
	</head>
	<body>
		<?php	$this->load->view($this->config->item("admin_template_include")."header");	?>
		<?php	$this->load->view($this->config->item("admin_template_include")."sidebar");	?>

		<!--main-container-part-->
		<div id="content" style="background-color:#fff;">
			<div id="content-header" >
				<div id="breadcrumb">
					<a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="#" class="current">Add New Class</a>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
				
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Add New Class</h5>
							</div>
							<div class="widget-content nopadding">
								<?php
									if(empty($courses))
									{
										echo 'No Courses Found to assign class';
									}
									else
									{
								?>
								<?php	echo form_open_multipart("",array("id"=>"add_new_class_form","class"=>"form-horizontal"));	?>
									<div class="control-group">
										<label class="control-label">Title :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Name","id"=>"class_title","name"=>"class_title"));	?>
											<div style='color:#666' class="admin-validation-error" id="class_title_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Short Intro :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Short Intro","id"=>"class_intro","name"=>"class_intro"));	?>
											<div style='color:#666' class="admin-validation-error" id="class_intro_error"></div>
										</div>
									</div>
									
									
									<div class="control-group">
										<label class="control-label">Course</label>
										<div class="controls">
											<?php
												if(!empty($courses))
												{
													$course_list[0] = "Choose From List";
													foreach($courses as $course)
													{
														$course_list[$course->course_id] = $course->name;
													}
												}
												else
												{
													$course_list[0] = "No Courses Found";
												}
												echo form_dropdown("class_course_selected",$course_list,'',array("id"=>"class_course_selected","onchange"=>"selectBatchesForClass()"));
											?>
											<div style='color:#666' class="admin-validation-error" id="class_course_error"></div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Batch</label>
										<div class="controls">
											<select name='class_batch_selected' id='class_batch_selected'>
												
											</select>
										
											<div style='color:#666' class="admin-validation-error" id="class_batch_error"></div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Trainer</label>
										<div class="controls ">
											<?php
												$trainer_list[0] = "Choose From List";
												if(!empty($trainers))
												{
													foreach($trainers as $trainer)
													{
														$trainer_list[$trainer->id] = $trainer->name;
													}
												}
												echo form_dropdown("class_trainer_selected",$trainer_list,'',array("id"=>"class_trainer_selected"));
											?>
											<div style='color:#666' class="admin-validation-error" id="class_trainer_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Class Date :</label>
										<div class="controls">
										 
											<?php	echo form_input(array("type"=>"text","class"=>"span11 datepicker","placeholder"=>"Date Format 2017-04-25 Y-m-d","id"=>"class_start_date","name"=>"class_start_date",'data-date-format'=>"yyyy-mm-dd"));	?>
											
											<div style='color:#666' class="admin-validation-error" id="class_start_date_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Class Time :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Time Format 16:00:00 H:m:s","id"=>"class_start_time","name"=>"class_start_time"));	?>
											<div style='color:#666' class="admin-validation-error" id="class_start_time_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Time Zone :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Time Zone","id"=>"class_time_zone","name"=>"class_time_zone"));	?>
											<div style='color:#666' class="admin-validation-error" id="class_time_zone_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">AM PM :</label>
										<div class="controls">
											<?php
												$am_pm = array('0'=>'Choose From List','AM'=>'AM','PM'=>'PM');
												echo form_dropdown("class_am_pm",$am_pm,'',array("id"=>"class_am_pm"));
											?>
											<div style='color:#666' class="admin-validation-error" id="class_am_pm_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Live Class Url :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Live Class Url","id"=>"class_live_url","name"=>"class_live_url"));	?>
											<div style='color:#666' class="admin-validation-error" id="class_live_url_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Upload Image</label>
										<div class="controls">
											<?php	echo form_upload(array("name"=>"class_image","id"=>"class_image","placeholder"=>"Choose File"));	?>
											<div style='color:#666' class="admin-validation-error" id="class_image_error"></div>
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
								<?php
									}
								?>
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
		<script src="<?php	echo site_url('assets/admin/js/bootstrap-datepicker.js');	?>"></script> 
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
