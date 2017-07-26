<!doctype html>
<html>
<head>
<title>JanBask - Training in Basic & Advanced Technologies</title>
<meta charset="utf-8">
<meta name="description" content="JanBask - Training in Basic & Advanced Technologies">
<meta name="author" content="JanBask - Training in Basic & Advanced Technologies">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/bootstrap.min.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/superslides.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/style5e1f.css?v=2');	?>">


<link rel="stylesheet" href="<?php	echo site_url('assets/css/green.css');	?>" class="colors">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<style>
#yourElement {
	-vendor-animation-duration: 3s;
	-vendor-animation-delay: 2s;
	-vendor-animation-iteration-count: infinite;
}
</style>
<link rel="stylesheet" href="<?php	echo site_url('assets/menu/css/reset.css');	?>">
<!-- CSS reset -->
<link rel="stylesheet" href="<?php	echo site_url('assets/menu/css/style.css');	?>">
<!-- Resource style -->

<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

	<body id="login">
		<section id="login-main" class="padding-top-bottom" style="background-color:#F1F1F1;"  >
			<div class="container">
				<div class="row">
					<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:solid 1px #CFCFD3; border-radius:4px; background:#fff;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" align="center" style="padding-bottom:50px;">
							<a href="<?php	echo site_url();	?>">
								<img src="<?php	echo site_url('assets/img/jbt-logo-color.png');	?>" class="img-responsive" style="padding-top:20px;">
							</a>
						</div>
						<div>  
							<!--<h1>Account Login</h1>		-->
							<div style="margin-bottom:20px;" class="">
								<div class="row"><div  class="col-lg-1 col-md-1 hidden-xs hidden-sm"></div>
									<div  class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
										<div class="inner underline no-margin">
											<h1 class="inside-banner" style="color:#666;">Can't find Convenient schedule?</h1>
											<p style=" line-height:20px;">Don't Worry Tell us your suitable Timings, We will arrange classes for You.</p>
											<span id="success_message"></span>
											<?php	echo form_open_multipart("Home/submit_corporate_enquiry",array("id"=>"future_training"));	?>
												<div class="content">
													<div class="form-group">
														<?php	echo form_input(array("type"=>"text","class"=>"form-control","placeholder"=>"ENTER YOUR NAME","id"=>"corp_enq_name","name"=>"corp_enq_name","required"=>"required"));	?>
													</div>
													<div class="form-group">
														<?php	echo form_input(array("type"=>"text","class"=>"form-control number_only","placeholder"=>"ENTER YOUR PHONE NO.","id"=>"corp_enq_mobile","name"=>"corp_enq_mobile","required"=>"required"));	?>
													</div>
													<div class="form-group">
														<?php	echo form_input(array("type"=>"email","class"=>"form-control","placeholder"=>"ENTER YOUR EMAIL ID","id"=>"corp_enq_email","name"=>"corp_enq_email","required"=>"required"));	?>
													</div>
													<div class="form-group">
														<?php	echo form_input(array("type"=>"text","class"=>"form-control","placeholder"=>"ENTER YOUR SUITABLE TIMING","id"=>"ft_suitable_timing","name"=>"ft_suitable_timing","required"=>"required"));	?>
													</div>
													<div class="form-group">
														<select name="corp_enq_course" id="corp_enq_course" form="carform" class="form-control" required>
															<option disabled selected value> -- Select Course -- </option>
															<?php
																foreach($courses as $course)
																{
															?>
																	<option value="<?php	echo $course->course_id;	?>"><?php	echo $course->name;	?></option>
															<?php
																}
															?>
														</select>
													</div>
													<div class="form-group">
														<select name="corp_enq_country" id="corp_enq_country" form="carform" class="form-control" onchange='select_state_on_corporate()' required>
															<option disabled selected value> -- Select Country -- </option>
															<?php
																foreach($countries as $country)
																{
															?>
																	<option value="<?php	echo $country->country_id;	?>"><?php	echo $country->country_name;	?></option>
															<?php
																}
															?>
														</select>
													</div>
													
													<div class="form-group">
														<select name="corp_enq_state" id="corp_enq_state" form="carform" class="form-control" required>
														<option value="">Select State</option>
														</select>
													</div>
													
													<div class="form-group">
														
														<?php	echo form_input(array("type"=>"text","class"=>"form-control number_only","placeholder"=>"ENTER PIN CODE","id"=>"corp_enq_pin_code","name"=>"corp_enq_pin_code","required"=>"required"));	?>
													</div>
													<div class="form-group">
														
														<?php	echo form_textarea(array("class"=>"form-control","id"=>"corp_enq_msg","name"=>"corp_enq_msg","rows"=>"3","placeholder"=>"YOUR MESSAGE"));	?>
													</div>
													<div class="form-group" align="center">
														<div class="enrolltd" align="center">
															<span class="input-group-btn">
																<?php	echo form_submit(array("class"=>"btn btn-store","value"=>"Join Us"));	?>
															</span>
														</div>
													</div>
												</div>
											<?php	echo form_close();	?>
										</div>
									</div>
									  <div class="col-lg-1 col-md-1 hidden-xs hidden-sm"></div>
									  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
										<div class="inner no-margin">
										 <h1 class="inside-banner" style="color:#666;" align="left">Why JanBask</h1>
										  <span style=" text-align:left !important;">Benefits of Our Training</span> 
										  
										  <div class="content"> 
											<ul class="ul_left_arrow">
											<li><strong>Training in Basic and Advanced Technologies.</strong></li>
											<li><strong>Become Professional by Qualified Tutors</strong></li>
											<li><strong>Built your career in IT with JanBask</strong></li>
											<li><strong>Training in Basic and Advanced Technologies.</strong></li>
											<li><strong>Become Professional by Qualified Tutors</strong></li>
											<li><strong>Built your career in IT with JanBask</strong></li>
											<li><strong>Training in Basic and Advanced Technologies.</strong></li>
											<li><strong>Become Professional by Qualified Tutors</strong></li>
											<li><strong>Built your career in IT with JanBask</strong></li>
											<li><strong>Training in Basic and Advanced Technologies.</strong></li>
											<br>
											<br>
											<br>
										  </ul>
										   
											
											
										  </div>
										</div>
									  </div>
									
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
		<?php include('include/footer-home.php') ?>
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/angelodemo.css');	?>">
		<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery-3.2.0.min.js');	?>"></script>  
		<script type="text/javascript" src="<?php	echo site_url('assets/js/angular.min.js');	?>"></script> 
		<script type="text/javascript" src="<?php	echo site_url('assets/js/bootstrap.min.js');	?>"></script>
		<script type="text/javascript" src="<?php	echo site_url('assets/js/wow.min.js');	?>"></script> 
		
		<script type="text/javascript" src="<?php	echo site_url('assets/js/common_functions.js');	?>"></script>
		<script>
		$("#future_training").on("submit",function(evt)
		{
			$("#success_message").html('');
			evt.preventDefault();
			var name=$("#corp_enq_name").val();
			var mobile=$("#corp_enq_mobile").val();
			var email=$("#corp_enq_email").val();
			var ft_suitable_timing=$("#ft_suitable_timing").val();
			var course=$("#corp_enq_course").val();
			var country=$("#corp_enq_country").val();
			var state=$("#corp_enq_state").val();
			var pincode=$("#corp_enq_pin_code").val();
			var message=$("#corp_enq_msg").val();
			var post_data={"name":name,"email":email,"mobile":mobile,"ft_suitable_timing":ft_suitable_timing,"course":course,"country":country,"state":state,"pincode":pincode,"message":message};
			$.ajax({
				url:"<?php echo site_url("submit_future_training_enquiry");?>",
				data:post_data,
				type:"POST",
				success:function(response)
				{
					response=JSON.parse(response);
					if(response.status=="1")
					{
						$("#success_message").html("Successfully submitted enuiry.").css("color","green");
						 $("#future_training")[0].reset();
						  window.location.href="<?php echo site_url("thanks-you");?>";
					}
				},
				error:function()
				{
					$("#success_message").html("Error Occured,Contact Admin").css("color","red");
					$("#corporate_enquiry_form")[0].reset();
					
				}
			});			
		});
		$(".number_only").on("keypress",function(evt){
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){
		//$("#reg_mobile_error").html("Enter Numbers Only");
		return false;			
	}
	return true;
});
		</script>
	</body>
</html>