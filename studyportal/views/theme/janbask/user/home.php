<!DOCTYPE html>
<html lang="en">
<head>
<title>JanBask Dashboard</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/bootstrap.min.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/bootstrap-responsive.min.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/matrix-style.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/matrix-media.css');	?>" />
<link href="<?php	echo site_url('assets/student_css_js/font-awesome/css/font-awesome.css');	?>" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?php	$this->load->view($this->config->item("user_template_include")."header");	?>
<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-inbox"></i> Menu</a>
  <ul>
    <li class="active"><a href="<?php	echo site_url("user");	?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li > <a href="<?php	echo site_url("user/orders");	?>"><i class="icon icon-money"></i> <span>Order History</span></a> </li>
    <li > <a href="<?php	echo site_url("user/profile");	?>"><i class="icon icon-pencil"></i> <span>Edit Profile</span></a> </li>

  </ul>
</div>
<!--sidebar-menu--> 
<!--main-container-part-->
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb">
					<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="#" class="current">Dashboard</a>
				</div>
				<h1>Hello <?php	echo ucfirst($this->session->userdata("user_name"));	?> - Welcome Your Account Dashboard</h1>
			</div>
			<div class="container-fluid">
			<hr>
				<div class="row-fluid">
					<div class="span6">
						<div class="widget-box">
							<?php
							
							if(isset($classes) && !empty($classes))
							{
							?>
								
							<?php
								foreach($classes as $class)
								{
							?>
									<div class="widget-title">
										<span class="icon">
											<i class="icon-file"></i>
										</span>
										<h5><?php	echo $class['course_name'];	?></h5>
									</div>
									<?php if(isset($class['course_class_data']) && !empty($class['course_class_data'])){ ?>
									<?php foreach($class['course_class_data'] as $live_class){?>
									<div class="widget-content nopadding">
										<ul class="recent-posts">
											<li>
												<div class="user-thumb">
													<img width="40" height="40" alt="User" src="<?php	echo site_url('assets/sitefiles/images/classes/'.$live_class->image);	?>">
												</div>
												<div class="article-post">
													<div class="fr">
														<?php
															if($live_class->status=="1")
															{
														?>
																<a href="#" class="btn btn-danger btn-mini disabled" >Join Now</a>
																<a href="#" class="btn btn-danger btn-mini disabled">Download Video</a>
														<?php
															}
															if($live_class->status=="2")
															{
														?>
																<a target="_blank" href="<?php	echo $live_class->live_class_url;	?>" class="btn btn-primary btn-mini">Join Now</a>
																<a href="#" class="btn btn-danger btn-mini disabled">Download Video</a>
														<?php
															}
															if($live_class->status=="3")
															{
														?>
																<a href="#" class="btn btn-danger btn-mini disabled ">Complete</a>
																<a target="_blank" href="<?php	echo $live_class->download_video_url;	?>" class="btn btn-primary btn-mini">Download Video</a>
														<?php
															}
														?>
													</div>
													<p><?php	echo $live_class->title;	?><br>
													<?php	echo $live_class->intro;	?></p>
													<span class="user-info"> By: <?php	echo $live_class->trainer_name;	?> / Date: <?php	echo date("d M Y",strtotime($live_class->class_date));	?> / Time:<?php	echo date("h.i",strtotime($live_class->class_time));	?> <?php	echo $live_class->am_pm;	?> </span>
												</div>
											</li>
										</ul>
									</div>
								<?php } } ?>
									<br />
							<?php
								}
							?>
									
							<?php
							}
							else
							{
							?>
								<div class="widget-title">
									<span class="icon">
										<i class="icon-file"></i>
									</span>
									<h5>Your Classes</h5>
								</div>
								<div class="widget-content nopadding">
									<ul class="recent-posts">
										<li>
											No Record Found
										</li>
									</ul>
								</div>
							<?php
							}
							?>
						</div>
						
					</div>
					<div class="span6">
						
        <div class="widget-box">
          <div class="widget-title" style=" background-color:#27A9E3 !important; color:#fff;"> 
            <h5 style="color:#fff;">Quick Information - Frequently Asked Questions Before For Live Class</h5>
          </div>
          <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>How Can I join the online classes ?</h5>
                </a> </div>
            </div>
            <div class="collapse in accordion-body" id="collapseGOne">
              <div class="widget-content" style="text-align:justify;"> You can join the classes by logging into your JanBask Training Account and going to your Dashboard for daily class joining links. The button ‘Join Class’ will become green and clickable just before the class starts. Click on the ‘Join Class’ button after it's enabled, and follow the instructions populated to join the online class. Call us if you face any difficulties. Class link will be also sent to you as email notification 1 Hr before the class starts.  </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGTwo" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>How Can I access the class recordings and the class related documents ?</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGTwo">
              <div class="widget-content" style="text-align:justify;"> After each class completion, the Class Recording Button will be enabled, and you will be able to access the respective class recordings. Class related documents can be accessed after the class completion by accessing ‘Documents’ link. </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseGThree" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>How to contact the Support Team if i face any issues ?
</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseGThree">
              <div class="widget-content" style="text-align:justify;"> You can click on ‘Contact Support Team’ button, enter your questions and submit the case. The support team will be notified with your query, and they will reach out to you at their earliest convenience. You may call the support team if you need immediate assistance. </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseG4" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Can I join classes using my Smart Phone or Tablet ?
</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseG4">
              <div class="widget-content" style="text-align:justify;"> You should be able to join the online classes using your smart mobile devices; however we recommend you to join classes using your Laptop or Desktop for better learning experience. 
 </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseG5" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Can I Ask questions during the live class ?

</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseG5">
              <div class="widget-content" style="text-align:justify;"> Yes, JanBask Trainers are experienced professionals and friendly. You can always ask questions during your live classes to clear your doubts.  
 </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseG6" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Will I be notified for any changes related to Class schedules ?


</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseG6">
              <div class="widget-content" style="text-align:justify;"> Yes, you will always be informed ahead of time for Class timing changes, Trainer’s availability,  or class related updates. This will help you to plan and manage your timings accordingly.   
 </div>
            </div>
          </div>
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title"> <a data-parent="#collapse-group" href="#collapseG7" data-toggle="collapse"> <span class="icon"><i class="icon-ok"></i></span>
                <h5>Do I need to download or install any softwares for my classes ?

</h5>
                </a> </div>
            </div>
            <div class="collapse accordion-body" id="collapseG7">
              <div class="widget-content" style="text-align:justify;"> You will be informed by your Instructor or JanBask Training Team in your first class for any such activities.  They will guide you if you need to download or install any tools or softwares. 
 
 </div>
            </div>
          </div>
        </div>
        </div>
        <div class="widget-box">
           <div class="widget-title" style=" background-color:#27A9E3 !important; color:#fff;"> 
            <h5 style="color:#fff;">Quick Downloads For Online Classes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Downloads For Mac</th>
                  <th>Downloads For Windows</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="taskStatus" align="center"><button class="btn btn-success">WebEx Player</button></td>
                  <td class="taskStatus" align="center"><button class="btn btn-success">WebEx Player</button></td>
                 
                </tr>
               <tr>
                  <td class="taskStatus" align="center"><button class="btn btn-success">WebEx Meeting Application</button></td>
                  <td class="taskStatus" align="center"><button class="btn btn-success">WebEx Meeting Application</button></td>
                 
                </tr>
               
              </tbody>
            </table>
          </div>
        </div>
        
        
      </div>
    </div>
    <hr>
    
  </div>
</div>
<!--end-main-container-part--> 
<?php	$this->load->view($this->config->item("user_template_include")."footer");	?>
<script src="<?php	echo site_url('assets/student_css_js/js/jquery.min.js');	?>"></script> 
<script src="<?php	echo site_url('assets/student_css_js/js/bootstrap.min.js');	?>"></script> 
<script src="<?php	echo site_url('assets/student_css_js/js/jquery.ui.custom.js');	?>"></script> 
<script src="<?php	echo site_url('assets/student_css_js/js/matrix.js');	?>"></script>
</body>
</html>