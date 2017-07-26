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
	</head>
	<body id="login">
		<section id="login-main" class="padding-top-bottom" style="background-color:#F1F1F1;"  >
			<div class="container">
				<div class="row">
					<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:solid 1px #CFCFD3; border-radius:4px; background:#fff;">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" align="center" style="">
							<a href="<?php	echo site_url();	?>"><img src="<?php	echo site_url('assets/img/jbt-logo-color.png');	?>" class="img-responsive" style="padding-top:20px;"></a>
						</div>
						<div>
							<!--<h1>Account Login</h1>		-->
							<div style="margin-bottom:20px;" class="login-content wrapper">
								<div class="row">
									<div align="center" class="hidden-xs hidden-sm col-lg-3 col-sm-6 col-xs-12"></div>
									<div style="padding:30px 20px 30px 20px;" class="col-lg-6 col-sm-6 col-xs-12">
										<div class="inner underline no-margin">
											<h1  class="inside-banner" class="inside-banner" style="color:#666;"><?php	echo $msg;	?></h1>
											<?php
												if($token_exist=="0")
												{
											?>
													<div class="content">
														<div class="form-group">
															<span style="">Don't have an account?</span>
															<a href="<?php	echo site_url("register");	?>" style=" color:#2980B9; text-decoration:none;"><strong>Sign Up Now</strong></a>
														</div>
													</div>
											<?php
												}
												if($token_exist=="1")
												{
											?>
											<span style=" line-height:25px;">To reset your password, enter new password here.</span>
											<?php	echo form_open_multipart("",array("id"=>"pass_reset_form"));	?>
												<div class="content">
													<div class="form-group">
														<!--<label class="control-label">E-Mail Address:</label>-->
														<?php	echo form_input(array("type"=>"password","class"=>"form-control","placeholder"=>"Enter New Password Here","id"=>"reset_pass","name"=>"reset_pass"));	?>
														<div class="validation-error" id="reset_pass_error"></div>
													</div>
													<div class="form-group">
														<!--<label class="control-label">E-Mail Address:</label>-->
														<?php	echo form_input(array("type"=>"password","class"=>"form-control","placeholder"=>"Confirm New Password","id"=>"reset_con_pass","name"=>"reset_con_pass"));	?>
														<div class="validation-error" id="reset_con_pass_error"></div>
													</div>
													<?php	echo form_hidden(array("token"=>$token));	?>
													<div class="form-group" align="center">
														<div class="enrolltd" align="center">
															<span class="validation-error" id="success_message"></span>
															<span class="input-group-btn">
																<?php	echo form_submit(array("class"=>"btn btn-store","value"=>"Submit"));	?>
															</span>
														</div>
													</div>
												</div>
											<?php	echo form_close();	?>
											<?php	}	?>
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
		<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery-3.2.0.min.js');	?>"></script> 
		<script type="text/javascript" src="<?php	echo site_url('assets/js/common_functions.js');	?>"></script>
		<script type="text/javascript" src="<?php	echo site_url('assets/js/cutom_validations.js');	?>"></script>
	</body>
</html>