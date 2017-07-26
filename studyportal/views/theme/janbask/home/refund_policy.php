<!doctype html>
<html>
<head>
<title>JanBask - Training in Basic & Advanced Technologies</title>
<meta charset="utf-8">
<meta name="description" content="JanBask - Training in Basic & Advanced Technologies">
<meta name="author" content="JanBask - Training in Basic & Advanced Technologies">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/bootstrap.min.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/style5e1f.css?v=2');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/icons.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/animate.min.css');	?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="<?php	echo site_url('assets/js/paccordion.js');	?>"></script>
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.min.js');	?>"></script>
<script type="text/javascript" src="<?php	echo site_url('assets/js/bootstrap.min.js');	?>"></script>
<script type="text/javascript" src="<?php	echo site_url('assets/js/app.js');	?>"></script>
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
<script src="<?php	echo site_url('assets/menu/js/modernizr.js');	?>"></script>
<script src="<?php	echo site_url('assets/menu/js/jquery-2.1.1.js');	?>"></script>
<script src="<?php	echo site_url('assets/menu/js/jquery.menu-aim.js');	?>"></script><!-- menu aim -->
<script src="<?php	echo site_url('assets/menu/js/main.js');	?>"></script>
<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
<style>
.activepolicy {
	background-color: #0197D8 !important;
	color: #fff !important;
}
.panel {
	border-radius: 0px !important;
	margin-top: 0px !important;
	border: 0px !important;
}
.activepolicy h4 a {
	color: #fff !important;
}
.inactive1 {
	border-right: solid 1px #0197D8 !important;
}
.inactive a {
	color: #000 !important;
}
.para {
	font-weight: 100 !important;
	font-size: 16px !important;
	line-height: 25px !important;
}
.mainhd2 {
	padding-left: 0px !important;
	margin-top: 20px;
}
.ul_left_arrow {
}
</style>		
</head>

<body id="home">
<div class="overlaybg"> </div>
<?php	$this->load->view($this->config->item("tree_template_include")."header");	?>
<section id="tb" class=" topbanner" style="background:#000;"  >
  <div class="container-fluid">
    <div class="row">
      <div class="hidden-xs hidden-sm col-md-2 col-lg-2" style="    position: absolute;
    top: 20%;
    bottom: 0;
    left: 0%;">
        <div id="sticky-anchor"></div>
        <div>
          <div class="">
            <div id="sticky" class="" align="center">
              <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 " style="background-color:rgba(255,255,255,0.8); padding:10px 10px !important; " align="center">
                <h3 class="inside-banner" style="color:#000 !important;    font-weight: normal !important;
    font-size: 22px !important;
    line-height: 30px !important;" align="center">Our Policies </h3>
                <div class="panel-group lefttab" id="accordion">
                <div class="panel panel-default inactive1" style="">
                    <div class="panel-heading " style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title  inactive"> <a href="<?php echo site_url('website-policy');?>" style="font-size:16px; ">Website Use Policy</a> </h4>
                    </div>
                    
                  </div>
                  <div class="panel panel-default inactive1" style="">
                    <div class="panel-heading  " style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('term-of-use');?>" style="font-size:16px; color:#fff;">Terms of Use</a> </h4>
                    </div>
                    
                  </div>
                   <div class="panel panel-default inactive1" style="">
                    <div class="panel-heading" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('term-condition');?>" style="font-size:16px; color:#fff;">Terms & Condition</a> </h4>
                    </div>
                    
                  </div>
                   <div class="panel panel-default " style="">
                    <div class="panel-heading activepolicy" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title "> <a href="<?php echo site_url('refund-policy');?>" style="font-size:16px; color:#fff;">Refund Policy</a> </h4>
                    </div>
                    
                  </div>
                  <div class="panel panel-default inactive1 " style="">
                    <div class="panel-heading" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('privacy-policy');?>" style="font-size:16px; color:#fff;">Privacy Policy</a> </h4>
                    </div>
                    
                  </div>
                 <div class="panel panel-default inactive1 " style="">
                    <div class="panel-heading" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('disclaimer');?>" style="font-size:16px; color:#fff;">Disclaimer</a> </h4>
                    </div>
                    
                  </div> 
                  
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="lc" class="padding-top-bottom" style="background:#fff;">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-left col-xs-12 col-sm-12 col-md-2 col-lg-2"> </div>
      <div class="col-md-10 col-sm-12 col-lg-10 col-xs-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
          <h1 class="inside-banner" style="color:#000 !important;" align="center">Refund Policy
</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
          
 
  <p class="mainhd2" style="color:#000 !important;" align="justify">Refunds & Cancellations:</p>
  <ul class="ul_left_arrow" style="margin:20px 0 0 0; ">
            <li>Candidates are entitled to get 100% Money Back guarantee within initial 7 Days of enrollment to the course.</li>
<li>After 7 Days of Enrollment no Refund Claim shall be entertained.</li>
<li>100% Money Back Guarantee stands Null & Void in the following situations:
<ul><li>If 25% of the content has been shared than the Candidate is not eligible for 100% refund.</li>
<li>Deductions would be considered as per Content shared with the candidate according to the refund Slab*.
Refund Slab:<br>

25% Content shared – 70% Refund<br>

50% Content shared – 50% Refund<br>

75% Content shared  -20% Refund</li></ul></li>

<li>JanBask, reserves all the rights to postpone/cancel an event because of insufficient enrollments, instructor illness or force majeure events (like floods, earthquakes, political instability, etc).</li>

<li>In case JanBask cancels the entire event (batch) of sessions, 100% refund will be initiated to the Candidate.
Refund will be processed within 7Working Days of settlement between the Company and the Candidate.</li>

<li>If candidate wants to reschedule their classes it will be considered case wise, Fees can be adjusted with the next class for which the candidate enrolls. Rescheduling is not allowed if more than 50% of the classes are covered or 15 days have passed from the start date of class.</li>
<li>Company reserves the complete right to revise these Terms at any point of time without prior notice to the users other than by posting the revised Terms on the Site. </li>

<li>If we believe that you are abusing our refund policy, it will be our sole discretion to suspend or terminate your account and refuse or restrict any and all current or future use of the Company Products, without any liability to you. </li>

<li>We treat violations of our Terms of Use and Honor Code very seriously and we have no obligation to offer refunds to learners who are found to be in violation of these terms, even if their requests are made within the designated refund period. 
</li>
           
          </ul>          
        </div>
      </div>
    </div>
  </div>
</section>
<?php	$this->load->view($this->config->item("tree_template_include")."footer");	?>

</body>
</html>