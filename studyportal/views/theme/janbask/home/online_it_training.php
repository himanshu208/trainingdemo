<!doctype html>
<html ng-app="storeApp">
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

<script type="text/javascript" src="<?php	echo site_url('assets/js/bootstrap.min.js');	?>"></script>

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
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1863665380325677'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1863665380325677&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code --></head>

<body id="home">
<div class="overlaybg"> </div>
<?php	$this->load->view($this->config->item("tree_template_include")."header");	?>
<section id="tb" class="padding-top-bottom topbanner" style="background:url(<?php	echo site_url('assets/img/courses.jpg');	?>) ;background-size: cover; background-position: 50% 50%; background-repeat: no-repeat; position:relative; min-height:100%;" >
  <div class="container">
    <div class="row">
      
      
      
      <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12  wow fadeInLeft " align="left" style=" padding-top:50px;">
        <p  class="mainhd" style="" >Begin your enterprise IT career with JanBask</p>
        <br>
        
        <div style=" margin-bottom:20px !important;">
          <p class="mainhd2" style="" >Our online IT courses designed to make you an IT expert.</p>
          
          
          <ul class="ul_left_arrow" style="margin-top:20px; color:#fff;">
      <li>Free Demo Classes to get good  understanding on course offerings &amp; Teaching Style</li>
      
      <li>Receive Step by Step Guidance To Complete the entire course with confidence</li>
    </ul>
         
        </div>
      </div>
     
      
      
      <div  class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style=" background:rgba(0,0,0,0.7);padding-top:50px;">
                <div class="inner underline no-margin">
                  <h2 class="mainhd2" style="color:#fff; padding-top:20px;">Contact Us for a Free Counselling</h2>
					<span id="enquiry_msg"></span>
                 
                 
                  <form   action="javascript:;" id="course_form">
                    <div class="content">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR NAME"  id="name" name="name" >
						<span id="c_name_error"></span>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR MOBILE No." id="mobile" name="mobile" >
						<span id="c_mobile_error"></span>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR EMAIL ID" id="email" name="email" >
						<span id="c_email_error"></span>
                      </div>
                      
                      
                      
                      <div class="form-group" align="center">
                      <div class="enrolltd" align="center"><span class="input-group-btn">
            <button class="btn btn-store" type="submit" name="submit">Start Free Demo</button>
            </span></div></div> </div>
                  </form>
                </div>
				<div id="show_loader" class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background:#EBEBEB;height:100%;width: 100%;top: 0;left: 0;opacity: 1;display:none;">
											<!--<p class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style='text-align:center;height:100%;width:100%;top:40%'>This is the overlay!</p>-->
											<img src="<?php	echo site_url('assets/img/loading.gif');	?>" alt="">
										</div>
              </div>
    </div>
  </div>
  
</section>


<section id="testimonial" class="padding-top-bottom" style="background:#fff;">
  <div class="container-fluid">
    <div class="testimonial">
      <div id="carousel-example-generic" class="carousel slide bs-docs-carousel-example" data-interval="10000">
        <h2 class="inside-banner" style="color:#2980B9 !important;" align="center">Thirst to Learn?</h2>
        <p class="mainhd2" style="color:#000 !important; margin-bottom:20px;" align="center">Explore From Our Course Library & Let's Begin Your Classes!</p>
        
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft" align="left" style="margin-top:20px;">
         <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/1.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("online-java-training");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">Java Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">499 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
               <a href="<?php	echo site_url("online-java-training");	?>"class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/2.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("courses/salesforce");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">Salesforce</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">599 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("courses/salesforce");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/3.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("business-analyst-training");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">BA Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">449 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("courses/ba");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/4.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("online-qa-training");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">QA Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">449 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
               <a href="<?php	echo site_url("online-qa-training");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/5.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("pmp-course");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">PMP Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">699 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("pmp-course");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/6.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("hadoop-big-data-analytics");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">Hadoop</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">699 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
               <a href="<?php	echo site_url("hadoop-big-data-analytics");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft" align="left" style="margin-top:20px;">
         <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/7.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("iphone-application-training");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">IOS Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">499 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
               <a href="<?php	echo site_url("iphone-application-training");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/8.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("courses/android");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">Android Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">499 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("courses/android");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/9.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("dotnet-training");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">.NET Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">499 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("dotnet-training");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/10.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("courses/vmware");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">VMWare Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">449 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("courses/vmware");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/course-thumbs/11.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("oracle-dba-training");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">Oracle DBA</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">449 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("oracle-dba-training");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-lg-2 col-xs-12 wow fadeInLeft" align="left">
            <div class="coursehome"><div align="center"><img src="<?php	echo site_url('assets/img/hdbanners/3.jpg');	?>" style="width:auto;"></div>
            <div class="" style="background-color:#f1f1f1;"><a href="<?php	echo site_url("online-sql-server-training");	?>">
              <h4 class="inside-banner" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important;" align="center">SQl Server Training</h4>
              </a>
              <hr class="style10">
              <div align="center"><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starcolor"></i><i class="fa fa-star starlight"></i></div>
              <div class="col-md-12 homecoursefoot" align="center">
                  <div class="col-md-12 spancourse"><i class="fa fa-calendar"></i>&nbsp;<span class="">6 Weeks</span></div>
                  
                  <div class="col-md-12 spancourse"><i class="fa fa-money"></i>&nbsp;<span class="">549 USD</span></div>
                </div>
              
              <div class="enrolltd" align="center"><span class="input-group-btn">
                <a href="<?php	echo site_url("online-sql-server-training");	?>" class="btn btn-store1 btn-store" type="submit" name="submit">Enroll Now</a>
                </span></div></div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
<section id="fg1" class="">
			 <div class="container-fluid webdesign3" style=" padding-top:150px; background:<?php	echo site_url('assets/img/hdbanners/3.jpg');	?>">
    <div class="container"> 
     
      <!--Heading -->
      
      <div class="row">
      <div class="col text-left col-xs-12 col-sm-12 col-md-2 col-lg-2"> </div>
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
        <div class="col-md-8 col-sm-12 col-lg-8 col-xs-12 wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
          <div class="heading animated fadeInDown visible" data-animation="fadeInDown" data-animation-delay="0.1s" style="margin:0px !important;">
            <h2 style="font-size: 27px !important;font-style: normal;line-height: 30px;text-transform: none !important; color:#fff;" class="text-medium redcolor" align="left">Let’s Get In Touch and address your questions before you start your IT Courses!

</h2><br><br>
            <p class="lead" style=" text-align:justify !important; font-size:18px; color:#fff;">


We have helped hundreds of students every month helping them start their career in IT. JanBask Training Experts have provided them the in-depth knowledge with the hands on practical examples to improve their programming knowledge.

Let’s speak and clear your doubts; we will be happy to help you too!
Call Now +1 908 652 6151 <br>
<br>


Let’s speak and clear your doubts; we will be happy to help you too! <br>
Call Now +1 908 652 6151 <br></p>
<br>
<button type="button" class="btn btn-default dropdown-toggle" style="background-color:#322f30 !important;">
      Get Call Back
     
    </button><br><br></div>
          
          <div> </div></div>
        </div>
      </div>
    </div>
  </div>
			</section>
<style>.webdesign3 {
   
    background-repeat: no-repeat !important;
}</style>








<?php	$this->load->view($this->config->item("tree_template_include")."footer-home");	?>


 <script>
/*	Function for site url	*/
function getRootUrl(url) {
	return url.toString().replace(/^(.*\/\/[^\/?#]*).*$/,"$1")+"/";
}
var site_url = getRootUrl(document.location);

/*	Check Email Syntax	*/
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
$("#course_form").off();
$("#course_form").on("submit",function(event)
{
	event.preventDefault();

	$("#c_name_error").html("");
	$("#c_mobile_error").html("");
	$("#c_email_error").html("");
	
	var name = $("#name").val();
	var mobile = $("#mobile").val();
	var email = $("#email").val();

	if(name=="")
	{
		$("#c_name_error").html("Name Can't be empty").css("color","red");
		$("#name").focus();
		return false;
	}
	if(mobile=="")
	{
		$("#c_mobile_error").html("Number Can't be empty").css("color","red");
		$("#mobile").focus();
		return false;
	}
	if(email=="")
	{
		$("#c_email_error").html("Email Can't be empty").css("color","red");
		$("#email").focus();
		return false;
	}	
	if(!IsEmail(email))
	{
		$("#c_email_error").html("Enter Valid Email").css("color","red");
		$("#email").focus();
		return false;
	}	

	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Courses/courseEnquiry",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.status=='1')
			{
				$('#course_form')[0].reset(); 
				$("#enquiry_msg").html("Enquiry submitted successfully.").css('color','green');
			}
			else 
			{
				
				$("#enquiry_msg").html("There is some problem, try again later").css('color','red');
			}
			$("#show_loader").css({display:"none"});
			
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			
		}
	});
	
	
});

	/********************************
			Validation for Registration Form
	*********************************/
$("#mobile").on("keypress",function(evt){
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){
		$("#mobile_error").html("Enter Numbers Only");
		return false;			
	}
	return true;
});

</script>





	
</body>
</html>