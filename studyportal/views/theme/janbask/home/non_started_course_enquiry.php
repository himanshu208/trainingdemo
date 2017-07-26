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

<body id="home">
<div class="overlaybg"> </div>
<?php	$this->load->view($this->config->item("tree_template_include")."header");	?>
<section id="tb" class="padding-top-bottom topbanner" style="background:url(<?php	echo site_url('assets/img/lastform.jpg');	?>) no-repeat fixed center top / cover;"  >
  <div class="container">
    <div class="row">
      
      
      <div class="col-md-6 hidden-sm col-lg-6 hidden-xs  wow fadeInLeft slider " align="left" style="">
        
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="inner" style="background:rgba(0,0,0,0.5); padding:40px 20px 30px; border-radius:5px;">
                  <h1 class="inside-banner" style="color:#fff;">Thanks for showing the interest in Our course.</h1>
                  <p style=" color:#fff; line-height:20px;"> Looks like course seats are almost filled

For enrollment, Please submit your details or contact us at 908 652 6151</p>
                  <span id="success_message"></span>
                  <br>
                  <form role="form" enctype="multipart/form-data" method="post" action="javascript:;" id="non_start_enquiry">
                    <div class="content">
                      <div class="form-group">
                        <input class="form-control" placeholder="ENTER YOUR NAME" value="" name="name" id="name" required type="text">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="ENTER YOUR MOBILE No." value="" name="phone"  id="phone" required type="text">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="COURSE INTERESTED IN*" value="" name="course"  id="course" required type="text">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="ENTER YOUR EMAIL ID" value="" name="email"  id="email" required type="email">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="YOUR LOCATION" value="" name="location"   id="location" required type="text">
                      </div>
                      
                      <div class="form-group">
                        
                       
                      </div>
                      <div class="form-group" align="center">
                      <div class="enrolltd" align="center"><span class="input-group-btn">
            <button class="btn btn-store" type="submit" name="submit">Contact Now</button>
            </span></div></div> </div>
                  </form>
                </div>
              </div>
     
    </div>
  </div>
</section>





<?php	$this->load->view($this->config->item("tree_template_include")."footer-home");	?>
		<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery-3.2.0.min.js');	?>"></script>  
		<script type="text/javascript" src="<?php	echo site_url('assets/js/angular.min.js');	?>"></script> 
		<script type="text/javascript" src="<?php	echo site_url('assets/js/bootstrap.min.js');	?>"></script>
		<script type="text/javascript" src="<?php	echo site_url('assets/js/wow.min.js');	?>"></script> 
		
		<script type="text/javascript" src="<?php	echo site_url('assets/js/common_functions.js');	?>"></script>
		<script>
		$("#non_start_enquiry").on("submit",function(evt)
		{
			$("#success_message").html('');
			evt.preventDefault();
			var name=$("#name").val();
			var mobile=$("#phone").val();
			var email=$("#email").val();
			var course=$("#course").val();
			var location=$("#location").val();
			var post_data={"name":name,"email":email,"mobile":mobile,"course":course,"location":location};
			$.ajax({
				url:"<?php echo site_url("submit-non-start-course-enquiry");?>",
				data:post_data,
				type:"POST",
				success:function(response)
				{
					response=JSON.parse(response);
					if(response.status=="1")
					{
						$("#success_message").html("Successfully submitted enuiry.").css("color","green");
						 $("#non_start_enquiry")[0].reset();
						  window.location.href="<?php echo site_url("thanks-you");?>";
					}
				},
				error:function()
				{
					$("#success_message").html("Error Occured,Contact Admin").css("color","red");
					
					
				}
			});			
		});
		</script>

</body>
</html>