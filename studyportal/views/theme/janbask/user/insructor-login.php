<!doctype html>
<html ng-app="storeApp">
<head>
<title>JanBask - Training in Basic & Advanced Technologies</title>
<meta charset="utf-8">
<meta name="description" content="JanBask - Training in Basic & Advanced Technologies">
<meta name="author" content="JanBask - Training in Basic & Advanced Technologies">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/bootstrap.min.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/superslides.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/style5e1f.css?v=2');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/icons.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/animate.min.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/animate.css');	?>">
<link rel="stylesheet" href="<?php	echo site_url('assets/css/switcher.css');	?>">
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
<section id="login-main" class="padding-top-bottom" style="background-color:#F1F1F1;"  >
  <div class="container">
    <div class="row">
      <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:solid 1px #CFCFD3; border-radius:4px; background:#fff;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInLeft" align="center" style="padding-bottom:50px;">
           <a href="index.php"><img src="<?php	echo site_url('assets/img/jbt-logo-color.png');	?>" class="img-responsive" style="padding-top:20px;"></a>
           
          
        </div>
        <div>  
          
          <!--<h1>Account Login</h1>		-->
          
          <div style="margin-bottom:20px;" class="">
            <div class="row">
               <div  class="col-lg-1 col-md-1 hidden-xs hidden-sm"></div>
              <div  class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="inner underline no-margin">
                  <h1 class="inside-banner" style="color:#666;">Become an IT Instructor with JanBask
</h1>
                  <span style="">Start Teaching world Online</span>
                 <span id="enquiry_msg"></span>
                  <br>
                  <form role="form" enctype="multipart/form-data" action="javascript:;" id="instructor_login_form">
                    <div class="content">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR NAME" value="" name="name" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR MOBILE No." value="" name="phone" required>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="ENTER YOUR EMAIL ID" value="" name="email" required>
                      </div>
                      
                      <div class="form-group">
                        <select name="country"  onchange="javascript:select_state()" class="form-control">
						
						  <option value="">Select Country</option>
						  <?php foreach($countries as $counrty){?>
						  <option value="<?php echo $counrty->country_id;?>"><?php echo $counrty->country_name;?></option>
						  <?php } ?>
  
						</select>
                      </div>
                      <div class="form-group">
                        <select  name="state" id="state_selected" class="form-control">
							<option value="">Select State</option>
						</select>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER PIN CODE" value="" name="pincode" required>
                       
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR TECHNICAL EXPERTISE" value="" name="expertise" required>
                       
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER EXPERIENCE" value="" name="experience" required>
                       
                      </div>
                      <div class="form-group">
                        <textarea name="cover_letter" class="form-control" >ADD COVER LETTER (WHY SHOULD I HIRE YOU?)</textarea>
                       
                      </div>
                      <div class="form-group">
                      
                       UPLOAD RESUME: <input type="file" name="resume" required>
                       
                      </div>
                      <div class="form-group">
                        <label style="">
				  <input type="checkbox"> I agree with <a href="<?php	echo site_url("term-condition");	?>">Terms & Conditions
				</a></label>
                       
                      </div>
                      <div class="form-group" align="center">
                      <div class="enrolltd" align="center"><span class="input-group-btn">
            <button class="btn btn-store" type="submit" name="submit">Join Us</button>
            </span></div></div> </div>
                  </form>
                </div>
              </div>
              
              <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="inner no-margin">
                 <h1 class="inside-banner" style="color:#666;" align="left">Why Join JanBask</h1>
                  <span style=" text-align:left !important;">Benefits to Join Us</span> 
                  
                  <div class="content"> 
                    <ul class="ul_left_arrow">
            <li><strong>JanBask provides you the platform to share your expertise.</strong></li>
 <li><strong>Train big Technologies with a great platform support.</strong></li>
 <li><strong>Meet profession people over a period of time.</strong></li>
 <li><strong>Work with very young and talented team.</strong></li>
 <li><strong>Deliver and earn with JanBask.</strong></li>
 <li><strong>Opportunity to earn with growing training company.</strong></li>
</strong></li>
            <br>
            <br>
            <br>
          </ul>
                   
                    
                    
                  </div>
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
<?php	$this->load->view($this->config->item("tree_template_include")."footer-home");	?>
<script>function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
    $('#sticky').addClass('container');
    } else {
        $('#sticky').removeClass('stick');
    $('#sticky').removeClass('container');
    }
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});</script> 
<script>jQuery(document).ready(function($) {

  $(".smoothScroll").click(function(event){     
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top-140}, 800);
  });
  
   $('.head-nav-button').click(function()
    {
    
        $('a').removeClass('active1');
        $('.' + $(this).attr('href').replace('#', '')).addClass('active1');
    });
});
</script>
<link rel="stylesheet" href="css/angelodemo.css">
<script src="js/paccordion.js"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/angular.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/bootstrap.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.singlePageNav.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.superslides.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery.countdown.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/wow.min.js');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/custom3860.js?v=1');	?>"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/app.js');	?>"></script>
<script>
/*	Function for site url	*/
function getRootUrl(url) {
	return url.toString().replace(/^(.*\/\/[^\/?#]*).*$/,"$1")+"/jbclasses/";
}
var site_url = getRootUrl(document.location);

/*	Check Email Syntax	*/
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
$("#instructor_login_form").off();
$("#instructor_login_form").on("submit",function(event)
{
	event.preventDefault();
	

	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Instructor_Login/instructorEnquiry",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.status=='1')
			{
				$("#enquiry_msg").html("Eqquiry submitted successfully.").css('color','green');
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

</script>
</body>
</html>