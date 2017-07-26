<?php

/**

 * The header for our theme

 *

 * This is the template that displays all of the <head> section and everything up until <div id="content">

 *

 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

 */



?><!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js no-svg">

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style5e1f.css?v=2">

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/icons.css">

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

<script src="<?php echo get_template_directory_uri();?>/assets/js/paccordion.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/app.js"></script>

<style>

#yourElement {

	-vendor-animation-duration: 3s;

	-vendor-animation-delay: 2s;

	-vendor-animation-iteration-count: infinite;

}

.panel-heading{ text-align:left !important;}

</style>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/menu/css/reset.css">

<!-- CSS reset -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/menu/css/style.css">

<!-- Resource style -->

<script src="<?php echo get_template_directory_uri();?>/assets/menu/js/modernizr.js"></script>

<script src="<?php echo get_template_directory_uri();?>/assets/menu/js/jquery-2.1.1.js"></script>

<script src="<?php echo get_template_directory_uri();?>/assets/menu/js/jquery.menu-aim.js"></script><!-- menu aim -->

<script src="<?php echo get_template_directory_uri();?>/assets/menu/js/main.js"></script>

<!--[if lt IE 9]>

			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

		<![endif]-->

</head>

<script>$(document).ready(function(e){

    $('.search-panel .dropdown-menu').find('a').click(function(e) {

		e.preventDefault();

		var param = $(this).attr("href").replace("#","");

		var concept = $(this).text();

		$('.search-panel span#search_concept').text(concept);

		$('.input-group #search_param').val(param);

	});

});</script>

<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>

<div class="overlaybg"> </div>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--<div class="navbar-header navbar-fixed-top" align="center" style="background-color:#2980B9 !important;"> 

<p class="topoffer" style="color:#fff !important; padding:7px; font-size:13px;">Hurry! Promotional Offer - Use Coupon Code <strong>AP1712JB10</strong> and Get 10% Discount	</p>

     

      

    </div>-->

<div class="navbar navbar-inverse navbar-fixed-top primarynav" role="navigation" style=" margin-top:0px;">



			<div class="container">

				<div class="navbar-header" style="float:none !important;">

				

                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">	

					<a class="navbar-brand" href="<?php echo home_url();?>" style="padding:10px 0 5px 0px;">

						<img id="navlogo" src="<?php echo get_template_directory_uri();?>/assets/img/logo-new.jpg" alt="Janbask">

					</a></div>

                    <div class="col-md-2 col-lg-2 col-sm-6 col-xs-6">

		<div class="cd-dropdown-wrapper">

			<a class="cd-dropdown-trigger" href="#0">Courses</a>

			<nav class="cd-dropdown">

				<h2>Title</h2>

				<a href="#0" class="cd-close">Close</a>

				<ul class="cd-dropdown-content">

					<!--<li>

						<form class="cd-search">

							<input type="search" placeholder="Search...">

						</form>

					</li>-->

                    

                    <li class="has-children">

						<a href="#">Programming Languages</a>

						<ul class="cd-dropdown-icons is-hidden">

							<li class="go-back"><a href="#0">Programming Languages</a></li>

							

							<li>

								<a class="cd-dropdown-item item-1" href="https://www.janbasktraining.com/online-java-training" target="_blank">

									<h3>Java</h3>

									<p>Learn Java Today</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-2" href="https://www.janbasktraining.com/dotnet-training" target="_blank">

									<h3>DotNet</h3>

									<p>Learn Dotnet Today</p>

								</a>

							</li>



							



							



						</ul> <!-- .cd-dropdown-icons -->

					</li>

                    <li class="has-children">

						<a href="#">Project Management</a>

						<ul class="cd-dropdown-icons is-hidden">

							<li class="go-back"><a href="#0">Project Management Courses</a></li>

							

							<li>

								<a class="cd-dropdown-item item-1" href="https://www.janbasktraining.com/business-analyst-training" target="_blank">

									<h3>BA</h3>

									<p>Become BA Developer</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-2" href="https://www.janbasktraining.com/online-qa-training"  target="_blank">

									<h3>QA</h3>

									<p>Become QA Developer</p>

								</a>

							</li>

<li>

								<a class="cd-dropdown-item item-1" href="https://www.janbasktraining.com/pmp-course" target="_blank">

									<h3>PMP</h3>

									<p>Become PMP Certified</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-2" href="https://www.janbasktraining.com/hadoop-big-data-analytics"  target="_blank">

									<h3>Hadoop</h3>

									<p>Become Hadoop Developer</p>

								</a>

							</li>

							



							



						</ul> <!-- .cd-dropdown-icons -->

					</li>

					

                    <li class="has-children">

						<a href="#">Cloud Training</a>

						<ul class="cd-dropdown-icons is-hidden">

							<li class="go-back"><a href="#0">Cloud Courses</a></li>

							

							<li>

								<a class="cd-dropdown-item item-1" href="https://www.janbasktraining.com/online-salesforce-training/"  target="_blank">

									<h3>Salesforce</h3>

									<p>Become Salesforce Developer</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-2" href="https://www.janbasktraining.com/courses/aws" target="_blank">

									<h3>AWS</h3>

									<p>Become AWS Developer</p>

								</a>

							</li>



							



							



						</ul> <!-- .cd-dropdown-icons -->

					</li>

                    <li class="has-children">

						<a href="#">Mobile Apps Training</a>

						<ul class="cd-dropdown-icons is-hidden">

							<li class="go-back"><a href="#0">Mobile Apps Courses</a></li>

							

							<li>

								<a class="cd-dropdown-item item-1" href="https://www.janbasktraining.com/courses/android" target="_blank">

									<h3>Android</h3>

									<p>Become Android Developer</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-2" href="https://www.janbasktraining.com/iphone-application-training"  target="_blank">

									<h3>iOS</h3>

									<p>Become iOS Developer</p>

								</a>

							</li>



							



							



						</ul> <!-- .cd-dropdown-icons -->

					</li>

                    <li class="">

						<a href="https://www.janbasktraining.com/courses/digital-marketing"  target="_blank">Digital Marketing</a>

						

					</li>

                    

                    

<li class="has-children">

						<a href="#">Database</a>

						<ul class="cd-dropdown-icons is-hidden">

							<li class="go-back"><a href="#0">DataBase Courses</a></li>

							

							<li>

								<a class="cd-dropdown-item item-1" href="https://www.janbasktraining.com/oracle-dba-training"  target="_blank">

									<h3>Oracle DBA</h3>

									<p>Learn DBA</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-2" href="https://www.janbasktraining.com/online-sql-server-training"  target="_blank">

									<h3>SQL</h3>

									<p>Learn SQL</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-3" href="https://www.janbasktraining.com/data-science"  target="_blank">

									<h3>Data Science</h3>

									<p>Learn Data Science</p>

								</a>

							</li>

<li>

								<a class="cd-dropdown-item item-3" href="https://www.janbasktraining.com/data-science"  target="_blank">

									<h3>MySQL</h3>

									<p>Learn MySql</p>

								</a>

							</li>

							



							



						</ul> <!-- .cd-dropdown-icons -->

					</li>

                   <li class="has-children">

						<a href="#">Other Courses</a>

						<ul class="cd-dropdown-icons is-hidden">

							<li class="go-back"><a href="#0">Other Courses</a></li>

							

							<li>

								<a class="cd-dropdown-item item-1" href="https://www.janbasktraining.com/courses/vmware"  target="_blank">

									<h3>VMWare</h3>

									<p>Learn VMWare</p>

								</a>

							</li>



							<li>

								<a class="cd-dropdown-item item-2" href="https://www.janbasktraining.com/devops-certification-training"  target="_blank">

									<h3>Devops</h3>

									<p>Learn Devops</p>

								</a>

							</li>



							

							



							



						</ul> <!-- .cd-dropdown-icons -->

					</li> 

                    

					 <!-- .has-children -->



					 <!-- .has-children -->



					

				</ul> <!-- .cd-dropdown-content -->

			</nav> <!-- .cd-dropdown -->

		</div>

		</div>

        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" align="right" style="float: right !important;">	<div id="nav-trigger">

            <span><i class="fa fa-user" style="font-size:20px; color:#fff;"></i></span>

        </div>

        <nav id="nav-main" style="">

            <ul style="float:right;">

               <li><a href="http://www.janbasktraining.com/insructor-login" target="_blank">Login as a Trainer </a></li>

						<li><a href="http://www.janbasktraining.com/login"  target="_blank">Sign In</a></li>

						<li><a href="http://www.janbasktraining.com/register"  target="_blank">Register</a></li>

                

                        

     

               </ul>

        </nav>

        <nav id="nav-mobile"></nav></div>

				</div>

                <script>

    $(document).ready(function(){

        $("#nav-mobile").html($("#nav-main").html());

        $("#nav-trigger span").hover(function(){

            if ($("nav#nav-mobile ul").hasClass("expanded")) {

                $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);

                $(this).removeClass("open");

            } else {

                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);

                $(this).addClass("open");

            }

        });

    });

</script>

<style>

nav#nav-main a {

    background-color: #fff;

	border: solid 2px #4d4d4d;

    color: #4d4d4d !important; font-size:14px;

}

#nav-trigger {

  display: none;

  text-align: right; }

  #nav-trigger span {

    display: inline-block;

    padding: 10px 20px;

    background-color: #B02928;

    color: white;

    cursor: pointer;

    text-transform: none;

	border-radius:5px;}

    #nav-trigger span:after {

      display: inline-block;

      margin-left: 10px;

      width: 20px;

      height: 10px;

      content: "";

      border-left: solid 10px transparent;

      border-top: solid 10px #fff;

      border-right: solid 10px transparent; }

    #nav-trigger span:hover {

       }

    #nav-trigger span.open:after {

      border-left: solid 10px transparent;

      border-top: none;

      border-bottom: solid 10px #fff;

      border-right: solid 10px transparent; }



nav {

  margin-bottom: 10px; }



nav#nav-main {

  

  padding: 18px 0; }

  nav#nav-main ul {

    list-style-type: none;

  

    padding: 0;

	right:0px;

    text-align: center; }

  nav#nav-main li {

    display: inline-block;

	

    

    padding: 0 5px; }

    nav#nav-main li:last-child {

      border-right: none; }

  nav#nav-main a {

    display: block;

    color: white;

    padding: 5px 5px; }

    nav#nav-main a:hover {

      background-color: #4d4d4d; color:#fff !important;

      }



nav#nav-mobile {

  position: relative;

  display: none; }

  nav#nav-mobile ul {

    display: none;

    list-style-type: none;

    position: absolute;

    left: 0;

    right: 0;

    margin-left: auto;

    margin-right: auto;

    text-align: center;

    background-color: #B02928; }

  nav#nav-mobile li {

    display: block;

    padding: 5px 0;

    margin: 0 5px;

    border-bottom: solid 1px #fff; }

    nav#nav-mobile li:last-child {

      border-bottom: none; }

  nav#nav-mobile a {

    display: block;

    color: white;

    padding: 10px 30px; }

    nav#nav-mobile a:hover {

      background-color: #B02928;

      color: #fff; }



/* =Media Queries

-------------------------------------------------------------- */

@media all and (max-width: 900px) {

  #nav-trigger {

    display: block; }



  nav#nav-main {

    display: none; }



  nav#nav-mobile {

    display: block; }

} </style>

                 

        

				



			</div>

		</div>

        

        <script>$(window).scroll(function() {    

    var scroll = $(window).scrollTop();



     //>=, not <=

    if (scroll >= 300) {

        //clearHeader, not clearheader - caps H

        $(".navbar-fixed-top").addClass("darkHeader");

    }

	else

	{

        //clearHeader, not clearheader - caps H

        $(".navbar-fixed-top").removeClass("darkHeader");

    }

});</script>



<div id="feedback" style="z-index:999999 !important; display:none;">

		<div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">

			<form method="POST" action="feedback" class="form panel-body" role="form">

            <div class="form-group">

			  <input class="form-control" id="name_cside" name="name_cside" autofocus placeholder="Your Name" type="text" />

			  <span id="name_error"></span>

			  </div>

                <div class="form-group">

				  <input class="form-control" id="phone_cside" name="phone_cside" autofocus placeholder="Your Contact no" type="text" />

				  <span id="phone_error"></span>

				</div>

				<div class="form-group">

					<input class="form-control" id="email_cside" name="email_cside" autofocus placeholder="Your e-mail" type="text" />

					<span id="email_error"></span>

				</div>

                <div class="form-group">

					<input class="form-control" id="subject_cside" name="subject_cside" autofocus placeholder="Your Subject" type="text" />

					<span id="subject_error"></span>

				</div>

				<div class="form-group">

					<textarea class="form-control" id="body_cside" name="body_cside" placeholder="Please write your Message here..." rows="5"></textarea>

					<span id="body_error"></span>

				</div>

				<button class="btn btn-primary pull-right" type="submit">Send</button>

			</form>

		</div>

		<div id="feedback-tab">

Contact Us</div>

	</div>

<style>

#feedback {

  position: fixed;

  right: 0;

  top: 30%;

  height: auto;

  margin-left: -3px;

  margin-bottom: 20px;

}



#feedback-form {

  float: right;

  width: 300px;

  height: 100%;

  z-index: 1000;

  padding-top:20px;

  padding-left: 5px;

  padding-right: 10px;

  background-clip: 'padding-box';

  border: 1px solid rgba(0,0,0,.2);

  -moz-border-radius: 0px;

  -webkit-border-radius: 0px;

  border-radius: 0px;

  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);

  -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);

  box-shadow: 0 5px 10px rgba(0,0,0,.2);

}



#feedback-tab {

  float: right;

  color: #fff;

  font-size: 20px;

  cursor: pointer;

  text-align: center;

  width: 120px;

  height: 42px;

  background-color: rgba(0,0,0,0.5);

  margin-top: 60px;

  margin-right: -42px;

  padding-top: 11px;

  -moz-border-radius: 3px;

  -webkit-border-radius: 3px;

  border-radius: 3px;

  -webkit-transform: rotate(90deg);

  -moz-transform: rotate(90deg);

  -ms-transform: rotate(90deg);

  -o-transform: rotate(90deg);

  transform: rotate(90deg);

}



#feedback-tab:hover { background-color: rgba(0,0,0,0.4); }



#feedback-form textarea { resize: none; }

</style>

<script>$(function() {

	$("#feedback-tab").click(function() {

		$("#feedback-form").toggle("slide");

	});



	$("#feedback-form form").on('submit', function(event) {

		var $form = $(this);

		$.ajax({

			type: $form.attr('method'),

			url: $form.attr('action'),

			data: $form.serialize(),

			success: function() {

				$("#feedback-form").toggle("slide").find("textarea").val('');

			}

		});

		event.preventDefault();

	});

	

	$("#feedback").off();

	$("#feedback").on("submit",function(e){

		$("#name_error").html("");

		$("#phone_error").html("");

		$("#email_error").html("");

		$("#subject_error").html("");

		$("#body_error").html("");



		e.preventDefault();

		var name_cside  = $("#name_cside").val();

		var phone_cside  = $("#phone_cside").val();

		var email_cside  = $("#email_cside").val();

		var subject_cside  = $("#subject_cside").val();

		var body_cside  = $("#body_cside").val();



		

		if(name_cside==""){

			$("#name_error").html("Please enter name").css({'color':'red',"font-size":"12px","font-weight":"bold"});

			return false;

		}

		

		if(phone_cside==""){

			$("#phone_error").html("Please enter phone").css({'color':'red',"font-size":"12px","font-weight":"bold"});

			return false;

		}

		

		if(email_cside==""){

			$("#email_error").html("Please enter email").css({'color':'red',"font-size":"12px","font-weight":"bold"});

			return false;

		}

		

		if(!IsEmail(email_cside))

		{

			$("#email_error").html("Please enter valid email").css({'color':'red',"font-size":"12px","font-weight":"bold"});

			return false;

		}

		

		if(subject_cside==""){

			$("#subject_error").html("Please enter subject").css({'color':'red',"font-size":"12px","font-weight":"bold"});

			return false;

		}

		

		if(body_cside==""){

			$("#body_error").html("Please enter message").css({'color':'red',"font-size":"12px","font-weight":"bold"});

			return false;

		}

	});

	

	$("#phone_cside").on("keypress",function(evt){

		$("#phone_error").html("").css({"display":"block"});

		var charCode = (evt.which) ? evt.which : evt.keyCode;

		if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){

			$("#phone_error").html("Please enter number only").css({'color':'red',"font-size":"12px","font-weight":"bold"}).fadeOut(1000);

			return false;

		}

		return true;	

	});

	

			

	function IsEmail(email) {

		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		return regex.test(email);

	}

});



</script>