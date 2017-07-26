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

<body id="home">









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
            <div align="center" class="hidden-xs hidden-sm col-lg-12 col-sm-12 col-xs-12">

					

				</div>
            
            <div style="padding:30px 20px 30px 20px;" align="center" class="col-lg-12 col-sm-12 col-xs-12">

					<div class="inner underline no-margin">
						<h1  class="inside-banner" class="inside-banner" style="color:#666;"><?php	echo $msg;	?></h1>
						<?php
							if($status=="1")
							{
						?>
								<span style=" line-height:25px;">For Login, Visit</span>
								<a href="<?php	echo site_url("login");	?>" style=" color:#2980B9; text-decoration:none;"><strong>Login</strong></a><br />
								<span style=" line-height:25px;">For New Registration, Visit</span>
								<a href="<?php	echo site_url("register");	?>" style=" color:#2980B9; text-decoration:none;"><strong>Register</strong></a><br />
								<span style=" line-height:25px;">To reset your password, enter your registered email address here.</span>
								<a href="<?php	echo site_url("forget-password");	?>" style=" color:#2980B9; text-decoration:none;"><strong>Forget Password</strong></a>
						<?php
							}
							else
							{
						?>
								<span style=" line-height:25px;">For Login, Visit</span>
								<a href="<?php	echo site_url("login");	?>" style=" color:#2980B9; text-decoration:none;"><strong>Login</strong></a>
						<?php
							}
						?>

					</div>

				</div>

				

					

			</div>	

		</div>

		
	</div>	

    



</section>
      
     
      </div>
    </div>
  </div>
</section>
<?php include('include/footer-home.php') ?>

<link rel="stylesheet" href="<?php	echo site_url('assets/css/angelodemo.css');	?>">
<script src="<?php	echo site_url('assets/js/paccordion.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/angular.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/bootstrap.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.singlePageNav.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.superslides.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.countdown.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/wow.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/custom3860.js?v=1');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/app.js');	?>"></script>
</body>
</html>