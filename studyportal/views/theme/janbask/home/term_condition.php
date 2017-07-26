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
                   <div class="panel panel-default " style="">
                    <div class="panel-heading activepolicy" style=" border-radius:0px !important;" align="left">
                      <h4 class="panel-title "> <a href="<?php echo site_url('term-condition');?>" style="font-size:16px; color:#fff;">Terms & Condition</a> </h4>
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
          <h1 class="inside-banner" style="color:#000 !important;" align="center">Terms & Conditions</h1>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;" align="left">
          <p class="mainhd2" style="color:#000 !important;margin-bottom:20px; margin-top:0px !important;" align="justify">Acceptance of this Agreement

</p>
          <p  class="para" style=" " align="justify"> JanBask Training's products and services Terms of Use ("Terms") oversee your use of JanBask Training's website,(which includes) training website, and other products and services ("Services"). As some of our Services may be training material that is downloaded to your computer, phone, tablet, or other device, you come to an agreement that you may routinely update this software, and that these Terms will apply to such updates. We request you to read these Terms carefully, and contact us if you have any questions. By using our Services, you approve to be bound by these Terms, as well as the policies referenced in these Terms (such as our Privacy Policy). </p>
          
          <p class="mainhd2" style="color:#000 !important; " align="justify">User ID and Password</p>
          <p  class="para" style=" " align="justify"> By entering into this Agreement, you acknowledge and agree that Your user ID and password ("Participant Account") is for Your exclusive use only. Use or sharing of Your Participant Account with another user is not permitted and is cause for immediate blocking of Your access to the Website, the Services and the Content, the Courseware, and termination of this Agreement.<br>


You agree that You are solely responsible for maintaining the confidentiality of Your Participant Account and for all activities that occur under it. You agree to immediately notify our Customer Support if You become aware of or have reason to believe that there is any unauthorized use of Your Participant Account. You also agree to take all reasonable steps to stop such unauthorized use and to cooperate with Us in any investigation of such unauthorized uses. We shall not under any circumstances be held liable for any claims related to the use or misuse of Your Participant Account due to the activities of any third party outside of our control or due to Your failure to maintain the confidentiality and security of Your Participant Account.</p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Content and Courseware
</p>
          <p  class="para" style=" " align="justify"> As a part of our Services offered through our Website, we shall grant you access to our content, courseware, practice tests, and other information, documents, and data which may be in audio, video, written, graphic, recorded, photographic, or any machine-readable format in relation to the specific certification training course You have registered for ("Content and Courseware").<br>


We reserve the right to amend, revise or update the Content and Courseware offered to You. In the event, such an amendment, revision or updating occurs, We may require you pay an additional fee to access such amended, revised, or updated Content and Courseware.
 </p>
 
          <p class="mainhd2" style="color:#000 !important; " align="justify">Usage of the Website and Services</p>
          <p  class="para" style=" " align="justify"> We grant you a personal, restricted, non-transferable, non-exclusive, and revocable license to use the Website, the Services, and the Content and Courseware offered through the Website till the time the completion of the certification training course that You have enrolled for or the termination of this Agreement according to the Terms and Conditions set forth herein, whichever is earlier. The Services and the Content and Courseware are provided solely for Your personal and non-commercial use to assist you in completing the certification training course You have registered for ("Restricted Purpose").<br>

You are permitted online access to the Website, the Services, and the Content and Courseware and may download, save, or print the Content and Courseware solely for the Restricted Purpose.<br>

You are not permitted to reproduce, transmit, distribute, sub-license, broadcast, disseminate, or prepare derivative works of the Content and Courseware, or any part thereof, in any manner or through any communication channels or means, for any purpose other than the Restricted Purpose, without Our prior written consent.
 </p>
          <p class="mainhd2" style="color:#000 !important;" align="justify">Intellectual Property Rights</p>
          <p  class="para" style=" " align="justify"> While You are granted a limited and non-exclusive right to use the Website, the Services, and the Content and Courseware for the Restricted Purpose as set forth in this Agreement, you acknowledge and agree that We are the sole and exclusive owner of the Website, the Services and the Content and Courseware and as such are vested with all Intellectual Property Rights and other proprietary rights in the Website, the Services, and the Content and Courseware.<br>

You acknowledge and agree that this Agreement other than permitting You to use the Website, the Services, and the Content and Courseware for the Restricted Purpose does not convey to You in any manner or form any right, title or interest of a proprietary, or any other nature in the Website, the Services, and the Content and Courseware.

 </p>
 <p class="mainhd2" style="color:#000 !important;" align="justify">Usage of Personal Information of Participants</p>
          <p  class="para" style=" " align="justify"> We reserve the right to feature Your picture in any photos, videos, or other promotional material used by Us. Further, we may use Your personal information to inform You about other certification training courses offered by Us. However, we shall not distribute or share Your personal information with any third-party marketing database or disclose Your personal information to any third party except on a case-to-case basis after proper verification of such third party or if required under any applicable law.



 </p>
         
 
          <p class="mainhd2" style="color:#000 !important; " align="justify">Limitation of Liability</p>
          <p  class="para" style=" " align="justify"> You expressly agree that use of the Website, the Services, and the Content and Courseware are at Your sole risk. We do not warrant that the Website or the Services or access to the Content and Courseware will be uninterrupted or error free; nor is there any warranty as to the results that may be obtained from the use of the Website, the Services or the Content and Courseware or as to the accuracy or reliability of any information provided through the Website, the Services, or the Content and Courseware. In no event, will We or any person or entity involved in creating, producing, or distributing the Website, the Services, or the Content and Courseware be liable for any direct, indirect, incidental, special, or consequential damages arising out of the use of or inability to use the Website, the Services, or the Content and Courseware.<br>


The disclaimer of liability contained in this clause applies to any and all damages or injury caused by any failure of performance, error, omission, interruption, deletion, defect, delay in operation or transmission, computer virus, communication line failure, theft or destruction or unauthorized access to, alteration of, or use of records or any other material, whether for breach of contract, negligence, or under any other cause of action.<br>


You hereby specifically acknowledge that We are not liable for any defamatory, offensive, wrongful, or illegal conduct of third parties, or other users of the Website, the Services or the Content and Courseware and that the risk of damage or injury from the foregoing rests entirely with each user.<br>


You agree that Our liability or the liability of Our affiliates, directors, officers, employees, agents, and licensors, if any, arising out of any kind of legal claim (whether in contract, tort or otherwise) in any way connected with the Services or the Content and Courseware shall not exceed the fee you paid to Us for the particular certification training course.
 </p>
         
          <p class="mainhd2" style="color:#000 !important; " align="justify">This Agreement will become effective upon Your acceptance of the terms of this Agreement by Your clicking on the "I ACCEPT" button and, subject to the terms and conditions of this Agreement, will remain in effect till You maintain a current, fully paid up online Participant Account, or until terminated by Us, whichever is earlier.<br>
<br>
We reserve the right to amend, revise or update the Content and Courseware offered to You. In the event such an amendment, revision or updation occurs, We may require you pay an additional fee to access such amended, revised, or updated Content and Courseware.</p>
          
        </div>
      </div>
    </div>
  </div>
</section>
<?php	$this->load->view($this->config->item("tree_template_include")."footer");	?>

</body>
</html>