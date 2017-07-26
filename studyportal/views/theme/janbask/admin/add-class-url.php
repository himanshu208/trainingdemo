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
</head>
<body>
<?php	$this->load->view($this->config->item("admin_template_include")."header");	?>
<?php	$this->load->view($this->config->item("admin_template_include")."sidebar");	?>

		<!--main-container-part-->
		<div id="content" style="background-color:#fff;">
			<div id="content-header" >
				<div id="breadcrumb">
					<a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="#" class="current">Add Class URL</a>
				</div>
			</div>
			<div class="container-fluid">
				<h3>Add Url for class <?php	echo $class_data[0]->title;	?></h3>
				<div class="row-fluid">
					
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> 
            <h5>Add URL</h5>
          </div>
          <div class="widget-content nopadding">
				<?php	echo form_open("",array("id"=>"add_class_url_form","class"=>"form-horizontal"));	?>
					<div class="control-group">
						<label class="control-label">Add Url :</label>
						<div class="controls">
							<?php
								if($class_data[0]->live_class_url=='')
								{
									echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Add Live Class Url","id"=>"class_live_url","name"=>"class_live_url"));
								}
								else
								{
									echo form_input(array("type"=>"text","class"=>"span11","placeholder"=>"Add Live Class Url","id"=>"class_live_url","name"=>"class_live_url",'value'=>$class_data[0]->live_class_url));
								}
								echo form_hidden(array("class_id"=>$class_data[0]->id,"batch_id"=>$class_data[0]->batch_id));
							?>
							<div style='color:#666' class="admin-validation-error" id="class_live_url_error"></div>
						</div>
						<div class="form-actions">
							<?php	echo form_submit(array("class"=>"btn btn-success","value"=>"Save"));	?>
							<span id='success_message' style="font-weight:bold;color:red;font-size: 16px;"></span>
						</div>
					</div>
				
				<?php	echo form_close();	?>
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
<script>
	$("#add_class_url_form").off();
	$("#add_class_url_form").on("submit",function(event){
		event.preventDefault();
		
		$("#class_live_url_error").html("");
		
		var class_live_url = $('#class_live_url').val();
		if(class_live_url=="")
		{
			$('#class_live_url_error').html("Value Can't be empty");
			$("#class_live_url").focus();
			return false;
		}
		
		var form = $(this)[0]; 
		var formData = new FormData(form);
		$("#success_message").html("Please Wait...");
		$.ajax({
			url:site_url+"Admin_Controller/updateClassUrl",
			data:formData,
			type:"POST",
			processData: false,
			contentType: false,
			success:function(response)
			{
				
				if(response==1)
				{
					window.location.href = site_url+"myadmin/classes"
				}
				else
				{
					window.location.href = site_url+"myadmin/classes"
				}
			},
			error:function()
			{
				alert("Error Occured,Contact Admin");
				// $('form')[0].reset(); 
			}
		});	
	});
</script>
</body>
</html>
