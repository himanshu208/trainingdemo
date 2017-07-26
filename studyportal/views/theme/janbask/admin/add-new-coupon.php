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
					<a href="#" class="current">Add New Coupon</a>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
				
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Add New Coupon</h5>
								<span id="coupon_exists_error"></span>
							</div>
							<div class="widget-content nopadding">
								<?php	echo form_open_multipart("",array("id"=>"add_new_coupon","class"=>"form-horizontal"));	?>
									<div class="control-group">
										<label class="control-label">Name :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Name","id"=>"coupon_name","name"=>"coupon_name"));	?>
											<div style='color:red' class="admin-validation-error" id="coupon_name_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Coupan Code :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Coupan Code","id"=>"coupan_code","name"=>"coupan_code"));	?>
											<div style='color:red' class="admin-validation-error" id="coupan_code_error"></div>
										</div>
									</div>									
									<div class="control-group">
										<label class="control-label">Coupon Type</label>
										<div class="controls">
											<?php
												$coupon_type_arr = array(''=>'Choose Coupon Type','1'=>'Particular Course','2'=>'public');
												echo form_dropdown("coupon_type_selected",$coupon_type_arr,'',array("id"=>"coupon_type_selected","onchange"=>"select_coupon_type()"));
											?>
											<div style='color:red' class="admin-validation-error" id="coupon_type_selected_error"></div>
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
												echo form_dropdown("coupon_course_selected",$course_list,'',array("id"=>"coupon_course_selected",'disabled'=>'disabled'));
											?>
											<div style='color:red' class="admin-validation-error" id="coupon_course_selected_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Start Date :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Date Format 2017-05-26 Y-m-d","id"=>"coupon_start_date","name"=>"coupon_start_date"));	?>
											<div style='color:red' class="admin-validation-error" id="coupon_start_date_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Expiry Date :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Date Format 2017-05-26 Y-m-d","id"=>"coupon_expiry_date","name"=>"coupon_expiry_date"));	?>
											<div style='color:red' class="admin-validation-error" id="coupon_expiry_date_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Value Type :</label>
										<div class="controls">
											<?php
												$coupon_fixed_percent = array('0'=>'Choose option','1'=>'Fixed Value','2'=>'Percentage');
												echo form_dropdown("coupon_fixed_percentage",$coupon_fixed_percent,'',array("id"=>"coupon_fixed_percentage"));
											?>
											<div style='color:red' class="admin-validation-error" id="coupon_fixed_percentage_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Value :</label>
										<div class="controls">
											<?php	echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Amount for fixed or percentage value`","id"=>"coupon_value","name"=>"coupon_value"));	?>
											<div style='color:red' class="admin-validation-error" id="coupon_value_error"></div>
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
		<script>
			function select_coupon_type()
			{
				var coupon_type = $("#coupon_type_selected").val();
				
				if(coupon_type=='2' || coupon_type=='')
				{
					
					$("#s2id_coupon_course_selected").addClass('select2-container-disabled');
					$("#coupon_course_selected").prop('disabled',true)
					$('#coupon_course_selected').select2('disable');
				}
				else
				{
					$("#s2id_coupon_course_selected").removeClass('select2-container-disabled');
					$("#coupon_course_selected").prop('disabled',false)
					$('#coupon_course_selected').select2('enable');
				}
				
			/*	if(coupon_type=='1')
				{
					
					$("#coupon_course_selected").prop('disabled',false)
				}
				else
				{
					alert(11);
				}*/
			}
		</script>
	</body>
</html>
