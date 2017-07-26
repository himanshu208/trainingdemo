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
</head>
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
                  <div class="panel panel-default " style="">
                    <div class="panel-heading  activepolicy" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title "> <a href="<?php echo site_url('term-of-use');?>" style="font-size:16px; color:#fff;">Terms of Use</a> </h4>
                    </div>
                    
                  </div>
                   <div class="panel panel-default inactive1" style="">
                    <div class="panel-heading" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('term-condition');?>" style="font-size:16px; color:#fff;">Terms & Condition</a> </h4>
                    </div>
                    
                  </div>
                   <div class="panel panel-default inactive1" style="">
                    <div class="panel-heading" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('refund-policy');?>" style="font-size:16px; color:#fff;">Refund Policy</a> </h4>
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
          <h1 class="inside-banner" style="color:#000 !important;" align="center">Terms of Use</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
          <p class="mainhd2" style="color:#000 !important;margin-bottom:20px; margin-top:0px !important;" align="justify">Thank you for Choosing JanBask Training!
</p>
          <p  class="para" style=" " align="justify"> JanBask Training's products and services Terms of Use ("Terms") oversee your use of JanBask Training's website, training website, and other products and services ("Services"). As some of our Services may be training material that is downloaded to your computer, phone, tablet, or other device, you come to an agreement that you may routinely update this software, and that these Terms will apply to such updates. We request you to read these Terms carefully, and contact us if you have any questions. By using our Services, you approve to be bound by these Terms, as well as the policies referenced in these Terms (such as our Privacy Policy). </p>
          <p class="mainhd2" style="color:#000 !important; " align="justify"><u>Using JanBask Training</u></p>
          <p class="mainhd2" style="color:#000 !important; " align="justify">Who May Use our Services?</p>
          <p  class="para" style=" " align="justify"> You may use our Services only if you can form a compulsory contract with JanBask Training, and only in obedience with these Terms and all applicable laws. When you create your JanBask Training account, and later when you use certain features, you must offer us with accurate and ample information, and you agree to update your information to keep it correct and complete. Any use or access by anyone under the age of 13 is forbidden, and certain courses may have additional necessities and/or restrictions. <br>
'You' refers to a user or a paying customer. If you are a company or another person who gives access to company products, you agree to take responsibility in full in case of damages or indemnification that could properly lie against the customer.</p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Our License to You</p>
          <p  class="para" style=" " align="justify"> Subject to these Terms and our policies (plus the Acceptable Use Policy, Integrity Code, and course-specific admissibility requirements and other terms), we allow you a limited, personal, non-exclusive, revocable and non-transferable license to use our Services. You may download content from our Services only for your personal, non-commercial use, except you obtain JanBask Training's written approval to otherwise use the content. You also come to an agreement that you will create, access, and/or use only one user account, and you will not share with any third-party access to or access information for your account. Using our Services does not give you possession of any knowledgeable property rights in our Services or the content you access.
 </p>
 <p class="mainhd2" style="color:#000 !important; " align="justify"><u>Our Courses</u></p>
          <p class="mainhd2" style="color:#000 !important; " align="justify">Course Modifications</p>
          <p  class="para" style=" " align="justify"> While we take self-importance in our world-class courses, unforeseen events do occur. JanBask Training reserves the right to withdraw, interrupt, or postpone any course or to modify any course content or the point rate or weight of any assignment, quiz, or other assessment. Courses presented are subject to the Disclaimers and Limitation of Accountability sections below.
 </p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Subscription Services</p>
          <p  class="para" style=" " align="justify"> You will be permitted to subscribe to a specific course or collection of courses ("Subscription Services") and will be charged automatically, depending on payment method chosen by you, such as monthly/quarterly/yearly, as may be related. You will be allowed to freeze or schedule the restriction of the Subscription Services at any time and JanBask Training shall not charge you for any such opted Subscription Services according to the payment cycle. Additionally, the Subscription Services, access will be cancelled if the user opts to freeze the subscription. You will have the choice to re-subscribe to the particular Subscription Services yet again and the payment cycle will start therefore.<br>

Please note that Subscription Services deductions and any Subscription Services are only a limited time special subscription promotions in result apply only to eligible items exhibiting the offer message on the Subscription Services item data pages, and then only if you choose the Subscription Services. Subscription Services are will last only till a specific period of time, as may be detailed on the relevant page. Special limited time subscription promotions only apply during their operative dates. JanBask Training recollects the rights to modify the Subscription Service from time to time, as well as by adding or deleting features and functions, in an effort to expand your experience. But we will not make deviations to the Subscription Service that materially lessens the functionality of the Subscription Service provided to you during the Subscription Term. We might deliver some or all elements of the Subscription Service through third party service providers.

 </p>
 <p class="mainhd2" style="color:#000 !important;" align="justify">Modifying and Terminating our Services</p>
          <p  class="para" style=" " align="justify"> We are continuously changing and improving our Services. We may add or remove functions, features, or necessities, and we may append or stop a Service altogether. Consequently, JanBask Training may dismiss your use of any Service for any reason. If your use of a paid Service is ended, a refund may be available under our Refund Policy. None of JanBask Training, its participating instructors, its suppliers, sponsors, and other business partners, and their employees, contractors, and other agents (the " JanBask Training Parties") shall have any accountability to you for any such action. You can stopover using our Services at any time, even though we'll be sorry to see you go.


 </p>
         
 <p class="mainhd2" style="color:#000 !important; " align="justify"><u>General Terms
</u></p>
          <p class="mainhd2" style="color:#000 !important; " align="justify">Revisions to the Terms</p>
          <p  class="para" style=" " align="justify"> We stand by the right to revise the Terms at our solitary discretion at any time. Any amendments to the Terms will be effective instantly upon posting by us. For any material changes to the Terms, we will take realistic steps to notify you of such changes. In all cases, your continuous use of the Services after publication of such changes, with or without notification, constitutes compulsory acceptance of the revised Terms.
 </p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Severability; Waiver
</p>
          <p  class="para" style=" " align="justify"> If it goes out that a particular provision of these Terms is not enforceable, this will not affect any other terms. If you do not obey with these Terms, and we do not take instant action, this does not indicate that we surrender any rights that we may have (such as taking action in the future).

 </p>        
  <p class="mainhd2" style="color:#000 !important; " align="justify"><u>Disclaimer
</u></p>
          <p class="mainhd2" style="color:#000 !important; " align="justify">Pricing Disclaimer</p>
          <p  class="para" style=" " align="justify">All prices, products, and proposals of JanBask Training website are subject to change without notice. While we make certain to offer most accurate and up-to-date information, in some cases one or more items on our website may be priced imperfectly. This might happen due to human errors, digital pictures, technical errors, or a disparity in pricing information received from our suppliers. JanBask Training funds the right to change prices for all our products, offers, or deals. These changes are done due to marketplace conditions, course termination, workers, price changes, errors in announcements, and other mitigating conditions. However, the price you paid at the time of buying still holds for you.
 </p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Indemnity
</p>
          <p  class="para" style=" " align="justify"> You approve to indemnify and hold the Company and our affiliates, associates, officers, directors, managers, and employees, harmless from any claim or request (including legal expenses and the expenses of other professionals) made by a third party due to or ascending out of your breach of this Terms of Use or the documents it includes by reference, or your violation of any law or the rights of a third party.

 </p>           
        </div>
      </div>
    </div>
  </div>
</section>
<?php	$this->load->view($this->config->item("tree_template_include")."footer");	?>

</body>
</html>