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
                <div class="panel panel-default " style="">
                    <div class="panel-heading activepolicy " style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title  "> <a href="<?php echo site_url('website-policy');?>" style="font-size:16px; ">Website Use Policy</a> </h4>
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
          <h1 class="inside-banner" style="color:#000 !important;" align="center">Website Use Policy</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
          <p class="mainhd2" style="color:#000 !important;margin-bottom:20px; margin-top:0px !important;" align="justify">ACCESSING THE WEBSITE</p>
          <p  class="para" style=" " align="justify"> You are responsible for making all arrangements necessary for you to have access to the Website. We reserve the right to withdraw or amend the Website, and any service or material that we provide on the Website, in our sole discretion and without notice to you. We will not be liable if, for any reason, all or any part of the Website is unavailable at any time or for any period. </p>
          <p class="mainhd2" style="color:#000 !important; " align="justify">INTELLECTUAL PROPERTY RIGHTS</p>
          <ul class="ul_left_arrow" style="margin:20px 0 0 0; ">
            <li>The Website and their entire contents, features and functionality (including but not limited to all information, software, text, displays, images, video and audio, and the design, selection and arrangement thereof) are owned by the Company, its licensors or other providers of such material, and are protected by United States and international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws. This Policy permits you to use the Website for your non-commercial use only. No right, title or interest in or to the Website or any content on the Website is transferred to you, and all rights not expressly granted, are reserved by the Company.</li>
            <li>You must not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store or transmit any of the material on the Website, except as follows: (i) You may store files that are automatically cached by your Web browser for display enhancement purposes; (ii) if we provide desktop, mobile or other applications for download, you may download a single copy to your computer or mobile device solely for your own personal, non-commercial use, provided you agree to be bound by an applicable end user license agreement for such applications; and (iii) if we provide social media features at any time, you may take such actions as are enabled by such features.</li>
            <li>You may not: (i) use any illustrations, photographs, video or audio sequences or any graphics separately from the accompanying text; or (ii) delete or alter any copyright, trademark or other proprietary rights notices from copies of materials from the Website; or (iii) access or use for any commercial purposes any part of the Website or any services or materials available through the Website.</li>
            <li>The Company name, the Company logo, and all related names, logos, product and service names, designs and slogans, are trademarks of the Company or its affiliates or licensors. You may not use such marks without the prior written permission of the Company. All other names, logos, product and service names, designs and slogans on the Website are the trademarks of their respective owners. </li>
          </ul>
          <p class="mainhd2" style="color:#000 !important;" align="justify">YOUR OBLIGATIONS AND REPRESENTATIONS</p>
          <ul class="ul_left_arrow" style="margin:20px 0 0 0; ">
            <li>You may use the Website only for lawful purposes and in accordance with this Policy. </li>
            <li>You promise that: (i) you are of legal age to form a binding contract with the Company; (ii) you will not use the Website in any way that violates any applicable local or international law or regulation; (iii) you will not send, knowingly receive, upload, download, use or re-use any material which does not comply with the ‘Content Standards’ (defined below); (iv) you will not impersonate or attempt to impersonate the Company, a Company employee, another user or any other person or entity; (v) you will not do anything that could disable, overburden, damage, or impair the Website or interfere with any person’s use of the Website; (vi) you will not use any robot, spider or other automatic device, process or means to access the Website for any unlawful purpose or in violation of this Policy; (vii) you will not introduce any viruses, Trojan horses, worms, logic bombs or other material which is malicious or technologically harmful; and (viii) you will not co-brand or frame the Website or hyper-link to it without the express prior written permission of an authorized representative of the Company. </li>
          </ul>
          <p class="mainhd2" style="color:#000 !important;" align="justify">USER CONTRIBUTIONS</p>
          <ul class="ul_left_arrow" style="margin:20px 0 0 0; ">
            <li>We may from time-to-time provide interactive services such as message boards, chat rooms, forums, ‘share’, and other interactive features (collectively, “Interactive Services”) that allow users to post, submit, publish, display or transmit to other persons (hereinafter, “post”) content or materials (collectively, “User Contributions”) on or through the Website. All User Contributions must comply with the Content Standards set out in this Policy. </li>
            <li>Any User Contribution that you post will be considered non-confidential and non-proprietary, to the extent permitted by law. By providing a User Contribution, you grant the Company and its successors the right to use, reproduce, modify, perform, display, distribute and otherwise disclose to third parties any such material. You promise that you own or control all rights in and to the User Contributions and have the right to grant such license to us. You agree that you will have no claim or other recourse against the Company for infringement of any proprietary right with respect to your User Contributions. You acknowledge and agree that you waive any moral (or similar) rights that you may have in any territory in respect of User Contributions, including but not limited to, the right to be attributed as the author of the User Contributions. </li>
            <li>If you provide a User Contribution to be published or displayed on public areas of the Website, or transmitted to other users of the Website or any third parties, you accept that your User Contributions are posted on and transmitted to others at your own risk. Additionally, we cannot control the actions of other users of the Website or any third parties with whom you may choose to share your User Contributions. Therefore, we cannot and do not guarantee that your User Contributions will not be viewed by unauthorized persons. </li>
            <li>User Contributions must be accurate and comply with all applicable laws in the country from which they are posted. You understand and acknowledge that you are responsible for any User Contributions you submit or contribute, and you, not the Company, have fully responsibility for such content, including its legality, reliability, accuracy and appropriateness. We are not responsible, or liable to any third-party, for the content or accuracy of any User Contributions posted by you or any other user of the Website. </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php	$this->load->view($this->config->item("tree_template_include")."footer");	?>

</body>
</html>