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
					<a href="#" class="current">Enroll Student to course</a>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
				
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"> <i class="icon-align-justify"></i> </span>
								<h5>Enroll Student to course</h5>
							</div>
							<div class="widget-content nopadding">
								<?php	echo form_open_multipart("",array("id"=>"admin_user_enrollment","class"=>"form-horizontal"));	?>
									<div class="control-group">
										<label class="control-label">Users</label>
										<div class="controls">
											<?php
												$user_list[0] = "Choose From List";
												foreach($user_arr as $user)
												{
													$user_list[$user->user_id] = $user->name . "        (JB" .$user->user_id .")";
												}
												echo form_dropdown("user_selected",$user_list,'',array("id"=>"user_selected"));
											?>
											<div style='color:#666' class="admin-validation-error" id="select_user_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Courses</label>
										<div class="controls">
											<?php
												$course_list[0] = "Choose From List";
												foreach($course_arr as $course)
												{
													$course_list[$course->course_id] = $course->name;
												}
												echo form_dropdown("class_course_selected",$course_list,'',array("id"=>"class_course_selected"));
											?>
											<div style='color:#666' class="admin-validation-error" id="select_course_error"></div>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Batches :</label>
										<div class="controls">
											<select id="class_batch_selected"></select>
											<div style='color:#666' class="admin-validation-error" id="select_batch_error"></div>
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Enrolled By</label>
										<div class="controls">
											<?php
												$sMList = array(0=>"Choose From List","Admin User 1"=>"Admin User 1","Admin User 2"=>"Admin User 2","Admin User 3"=>"Admin User 3");
												echo form_dropdown("student_enrolled_by",$sMList,'',array("id"=>"student_enrolled_by"));
											?>
											<div style='color:#666' class="admin-validation-error" id="select_adminuser_error"></div>
										</div>
									</div>
									
								<!--	<div class="control-group">
										<label class="control-label">Amount :</label>
										<div class="controls">
											<?php	//echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Enter Amount","id"=>"batch_amount","name"=>"batch_amount"));	?>
											<div style='color:#666' class="admin-validation-error" id="select_batch_amount_error"></div>
										</div>
									</div>-->
									
									
									
									<div class="form-actions">
										<?php	echo form_submit(array("class"=>"btn btn-success","value"=>"Submit"));	?>
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
		
		<script>
			$("#class_course_selected").on("change",function(){
				batchesForCourse();
			});
			
			function batchesForCourse() {
				var course_id = $("#class_course_selected").val();
				if(course_id=="0")
				{
					return false;
				}
				
				var postData = {"course_id":course_id};
				$.ajax({
					url:site_url+"Admin_Controller/fetchbatchForClass",
					data:postData,
					type:"POST",
					success:function(response)
					{
						response = JSON.parse(response);
						var batch_selected = "<option value='0'>Select Batch</option>";
						$.each(response,function(index,key)
						{
							var batch_start_date = key.start_date;
							var splitBatchStartDate = batch_start_date.split("-");
							var start_date = splitBatchStartDate[1]+"/"+splitBatchStartDate[2]+"/"+splitBatchStartDate[0];
							var finalBatchStartDate = new Date(start_date);
							
							var currentDate = new Date();
							currentDate.setHours(0,0,0,0);
							
							
							if(finalBatchStartDate >= currentDate) {
							// if(key.front_status=="1" && finalBatchStartDate >= currentDate) {
								batch_selected+='<option value="'+key.id+'">'+key.name+'</option>';
							}
						});
						$("#class_batch_selected").html(batch_selected);
					},
					error:function()
					{
						alert("Error Occoured,Contact Admin");
					}
				});	
			}
			
		</script>
	</body>
</html>
