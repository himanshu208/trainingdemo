<!doctype html>
<html>
	<head>
		<title>Login</title>
        <link rel="shortcut icon" href="<?php	echo site_url('assets/img/tech-logos/homelogo/favicon.png');	?>">
		<meta charset="utf-8">
		<meta name="description" content="Login">
		<meta name="author" content="JanBask Training">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/bootstrap.min.css');	?>">
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/superslides.css');	?>">
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/style5e1f.css?v=2');	?>">
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/custom.css');	?>">
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
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59047824-2', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body id="login">
		<section id="login-main" class="padding-top-bottom" style="background-color:#F1F1F1;"  >
			<div class="container">
				<div class="row">
					<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:solid 1px #CFCFD3; border-radius:4px; background:#fff;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" align="center" style="padding-bottom:50px;">
							<a href="<?php	echo site_url();	?>"><img src="<?php	echo site_url('assets/img/jbt-logo-color.png');	?>" class="img-responsive" style="padding-top:20px;"></a>
						</div>
						<div>
							<!--<h1>Account Login</h1>-->
							<div style="margin-bottom:20px;" class="">
								<div class="row">
									<div align="center" class="hidden-xs hidden-sm col-lg-2 col-sm-6 col-xs-12"></div>
									<div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="inner underline no-margin">
											<h1 class="inside-banner" style="color:#666;">Login Here</h1>
											<span style="">Don't have an account?</span> <a href="<?php	echo site_url("register");	?>" style=" color:#2980B9; text-decoration:none;"><strong>Sign Up Now</strong></a><br>
											<?php	echo form_open_multipart("",array("id"=>"login_form"));	?>
												<div class="content">
													<div class="form-group">
														<?php	echo form_input(array("type"=>"text","class"=>"form-control","placeholder"=>"ENTER REGISTERED EMAIL","id"=>"login_name","name"=>"login_name"));	?>
														<div class="validation-error" id="login_name_error"></div>
													</div>
													<div class="form-group">
														<?php	echo form_input(array("type"=>"password","class"=>"form-control","placeholder"=>"ENTER PASSWORD","id"=>"login_pass","name"=>"login_pass"));	?>
														<div class="validation-error" id="login_pass_error"></div>
													</div>
													<a href="<?php	echo site_url("forget-password");	?>" style=" color:#2980B9; text-decoration:none;"><strong>Forgot Password?</strong></a><br><br> 
													<div class="form-group" align="center">
														<div class="enrolltd" align="center">
															<span class="validation-error" id="success_message"></span>
															<span class="input-group-btn">
																<?php	echo form_submit(array("class"=>"btn btn-store","value"=>"Log In"));	?>
															</span>
														</div>
													</div>
												</div>
											<?php	echo form_close();	?>
										</div>
									</div>
									<!--<div align="center" class="hidden-xs hidden-sm col-md-2 col-lg-2 ">
										<img style="height:170px; margin-top:50px; " src="<?php	//echo site_url('assets/img/new/spratr.png');	?>">
									</div>-->
									<div align="center" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="inner no-margin">
                                        <img style="" src="<?php echo site_url('assets/img/about-girl.png');?>">
											<!--h1 class="inside-banner" style="color:#666;">Sign in With</h1>
											<div class="content"> 
												<p style="">You can Login with your social media accounts</p> <br>
												<a onclick="" style="cursor:pointer;" href="<?php echo site_url('/hauth/window/Facebook');?>" id="login_fb"><img style="width:150px;" src="<?php	echo site_url('assets/img/new/login_with_facebook.png');	?>"></a><br><br>
												<!--a href="" class="" id=""><img style="width:150px;" src="<?php	//echo site_url('assets/img/new/Red-signin_Long_base_44dp.png');	?>"></a><br><br>
												<a href="" class="" id=""><img style="width:150px;" src="<?php	//echo site_url('assets/img/new/linked.png');	?>"></a>
											</div-->
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery-3.2.0.min.js');	?>"></script> 
		<?php	$this->load->view($this->config->item("tree_template_include")."footer-home");	?>
		
		
		<script type="text/javascript" src="<?php	echo site_url('assets/js/common_functions.js');	?>"></script>
		<script type="text/javascript" src="<?php	echo site_url('assets/js/cutom_validations.js');	?>"></script>
        <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-59047824-2', 'auto');
ga('send', 'pageview');

</script>

	</body>
</html>