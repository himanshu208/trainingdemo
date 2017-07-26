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
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('website-policy');?>" style="font-size:16px; ">Website Use Policy</a> </h4>
                    </div>
                  </div>
                  <div class="panel panel-default inactive1" style="">
                    <div class="panel-heading" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title inactive"> <a href="<?php echo site_url('term-of-use');?>" style="font-size:16px; color:#fff;">Terms of Use</a> </h4>
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
                  <div class="panel panel-default " style="">
                    <div class="panel-heading activepolicy" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title "> <a href="<?php echo site_url('privacy-policy');?>" style="font-size:16px; color:#fff;">Privacy Policy</a> </h4>
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
          <h1 class="inside-banner" style="color:#000 !important;" align="center">Privacy Policy</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
          <p  class="para" style=" " align="justify"> This web site is owned and functioned by JanBask Training ("we", "our", or "us" or the "Company"). We appreciate and value your privacy. We want to make your involvement online filling and safe. <br>
            This privacy policy (the "Policy") rules information you offer to us or we learn from your use of this web site (the "Site") and establishes a legal agreement between you, as the operator of the Site, and the Company, as the proprietor of the Site. The Policy will also tell you how we may gather, use, and in some instances, share this information. Our policies do not apply to third-party websites that are linked via links to our Site and may vary from other service offerings and you should carefully review the terms of service and this privacy notice formerly using these services. </p>
          <p class="mainhd2" style="color:#000 !important; " align="justify">General Information</p>
          <p  class="para" style=" " align="justify"> In general, you can visit the Site deprived of telling us who you are or revealing any personally recognizable information about yourself. By providing your Personal Information to us, you clearly agree to our collection and use of such info as described in this Policy. If you select to register, and are 13 years of age or older, we will gather and process such information from you, counting but not limited to the below mentioned: </p>
          <ul class="ul_left_arrow" style="margin:20px 0 0 0; ">
            <li>Data that you provide to us by filling in forms. This comprises contact information such as name, email address, emailing address, phone number, financial information, if any, exclusive identifiers such as preferences information such as preference lists, transaction history.</li>
            <li>Information that you deliver when you write straight to us (including by e-mail).</li>
            <li>Information that you offer to us by writing on our blogs</li>
            <li>Information involving to logs is robotically reported by your browser every time you access our Site. When you use the Site, our servers inevitably record certain information that your web browser sends every time you click on any website. These server logs may comprise information such as your web application, Internet Protocol (IP) address, browser type, stating/ exit pages and URLs, quantity of clicks, domain tags, landing pages, pages seen, and other such information. We use this information, which does not identify users, to examine trends and to collect demographic information about the user base as a whole. We do not link this automatically-collected data to personally recognizable information.</li>
            <li>We may gather information about your over-all internet usage by using a cookie file which is kept on the hard drive of your computer. Cookies help us advance our Site and distribute a better and personalized service. </li>
            <li>JanBask might use your information to contact and Co-ordinate with you via email or telephone, to inform you about new products and services and also to help you regarding your issues and sometimes to get feedback too. </li>
          </ul>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Children's Privacy </p>
          <p  class="para" style=" " align="justify"> We are dedicated to protecting children's privacy online. This Site is envisioned for users above the age of 13. We do not meaningfully collect payment linked information from children. </p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Billing(Billing & Payment Information) </p>
          <p  class="para" style=" " align="justify">If you use or deliver services on the Site for which we apply a billing system for you, we will gather extra information (extra information would be required) from you so that we can process and gather billing information (gather Billing information and process it). For example, we may gather your mailing address to send(exchange) payments.</p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Payment </p>
          <p  class="para" style=" " align="justify">When you purchase our online products/services or enroll for a classroom training, you need to make the payment as per the instructions shared with you, if you make a payment via your card (Debit/Credit) thus you will be required to share your personal information such as name, e-mail address, telephone number, address(s), credit card number, expiration, and CVV number.<br>
Your credit card information is never stored in our system as it is processed by our payment gateway which uses Secure Encryption Technology.</p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Cookies </p>
          <p  class="para" style=" " align="justify"> 
The Site uses software labels called "Cookies" to classify customers when they visit our Site. Cookies are used to recall user favorites and make the most of performance of our services. The information we collect with cookies is not traded, lent, or shared with any outside parties. Users who incapacitate their Web browser's skill to accept cookies will be able to browse our Site but may not be able to effectively use our Service.<br>

We use together session ID cookies and insistent cookies. A session ID cookie expires when you close your browser. A persistent cookie remains on your hard drive for a prolonged period of time. You can remove persistent cookies by following directions provided in your Internet browser's "help" file. Persistent cookies permit us to track and target the interests of our users to improve the experience on our Site. This privacy policy covers the use of cookies by our Site only and does not cover the use of cookies by any publicists. </p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Cookies from Third Party </p>
          <p  class="para" style=" " align="justify"> We may from time to time involve third parties to track and examine non-personally recognizable usage and volume statistical information from visitors to our Site to benefit us administer our Site and expand its quality. Such third parties may use cookies to help track visitor behavior. Such cookies will not be used to associate separate Site visitors to any Personal Information. All data collected by such third parties on our behalf is used only to deliver us with information on Site usage and is not shared with any other third parties.</p>
          
           <p class="mainhd2" style="color:#000 !important;" align="justify">Amendment in Personal Information</p>
<p  class="para" style=" " align="justify">Please reach out to us if you notice that the information we are holding is incorrect, incomplete or required to be changed due to some valid reason.</p>


 <p class="mainhd2" style="color:#000 !important;" align="justify">Copyright information</p>
<p  class="para" style=" " align="justify">You can electronically copy or take print outs of the website pages, only for personal use. JanBask holds the copyright to all the material on this website, unless otherwise indicated. A written permission from the copyright holder must be obtained for any use of this material other than for purposes permitted by law.</p>

        </div>
      </div>
    </div>
  </div>
</section>
<?php	$this->load->view($this->config->item("tree_template_include")."footer");	?>

</body>
</html>