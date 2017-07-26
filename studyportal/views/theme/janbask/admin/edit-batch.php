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
	</head>
	<body>
		<?php	$this->load->view($this->config->item("admin_template_include")."header");	?>
		<?php	$this->load->view($this->config->item("admin_template_include")."sidebar");	?>

		<!--main-container-part-->
		<div id="content" style="background-color:#fff;">
			<div id="content-header" >
				<div id="breadcrumb">
					<a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="<?php	echo site_url('myadmin/batches');	?>" title="Go to Batches" class="tip-bottom"> Batches</a>
					<a href="#" class="current">Update Batch</a>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
				
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Update Batch</h5>
							</div>
							<div class="widget-content nopadding">
								<?php	echo form_open_multipart("",array("id"=>"update_batch_form","class"=>"form-horizontal"));	?>
								<input type="hidden" id="batch_id" name="batch_id" value="<?php echo $single_data[0]->id;?>">
									<div class="control-group">
										<label class="control-label">Name :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Name","id"=>"batch_name","name"=>"batch_name",'value'=>$single_data[0]->name));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_name_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Course</label>
										<div class="controls">
											<?php
												$course_list[0] = "Choose From List";
												foreach($courses as $course)
												{
													$course_list[$course->course_id] = $course->name;
												}
												echo form_dropdown("batch_course_selected",$course_list,$single_data[0]->course_id,array("id"=>"batch_course_selected"));
											?>
											<div style='color:#666' class="admin-validation-error" id="batch_course_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Start Date :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Date Format 2017-04-25 Y-m-d","id"=>"batch_start_date","name"=>"batch_start_date",'value'=>$single_data[0]->start_date));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_start_date_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">End Date :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Date Format 2017-04-25 Y-m-d","id"=>"batch_end_date","name"=>"batch_end_date",'value'=>$single_data[0]->end_date));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_end_date_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Start Time :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Time Format 16:00:00 H:m:s","id"=>"batch_start_time","name"=>"batch_start_time",'value'=>$single_data[0]->start_time));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_start_time_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">End Time :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Time Format 18:00:00 H:m:s","id"=>"batch_end_time","name"=>"batch_end_time",'value'=>$single_data[0]->end_time));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_end_time_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Time Zone :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Time Zone","id"=>"batch_time_zone","name"=>"batch_time_zone",'value'=>$single_data[0]->time_zone));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_time_zone_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">AM PM :</label>
										<div class="controls">
											<?php
												$am_pm = array('0'=>'Choose From List','AM'=>'AM','PM'=>'PM');
												echo form_dropdown("batch_am_pm",$am_pm,$single_data[0]->am_pm,array("id"=>"batch_am_pm"));
											?>
											<div style='color:#666' class="admin-validation-error" id="batch_am_pm_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Amount :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Enter Amount","id"=>"batch_amount","name"=>"batch_amount",'value'=>$single_data[0]->amount));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_amount_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Cuurency :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Enter Currency","id"=>"batch_currency","name"=>"batch_currency",'value'=>$single_data[0]->currency));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_currency_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Duration Period :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Duration Period as 1/2/3/4","id"=>"batch_duration_period","name"=>"batch_duration_period",'value'=>$single_data[0]->duration));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_duration_period_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Duration In :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Enter Duartion as days/weeks/months","id"=>"batch_duration_in","name"=>"batch_duration_in",'value'=>$single_data[0]->duration_in));	?>
											<div style='color:#666' class="admin-validation-error" id="batch_duration_in_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Batch Type :</label>
										<div class="controls">
											<?php
												$batch_type = array('0'=>'Choose From List','1'=>'Weekly','2'=>'Weekend');
												echo form_dropdown("batch_type",$batch_type,$single_data[0]->class_type,array("id"=>"batch_type"));
											?>
											<div style='color:#666' class="admin-validation-error" id="batch_type_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Show on Front :</label>
										<div class="controls">
											<?php
												$front_status = array('2'=>'Choose From List','1'=>'Show','0'=>'Do not Show');
												echo form_dropdown("batch_front_status",$front_status,$single_data[0]->front_status,array("id"=>"batch_front_status"));
											?>
											<div style='color:#666' class="admin-validation-error" id="batch_front_status_error"></div>
										</div>
									</div>
									<div class="form-actions">
										<?php	echo form_submit(array("class"=>"btn btn-success","value"=>"Update"));	?>
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
	</body>
</html>
