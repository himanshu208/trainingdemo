<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-59047824-2', 'auto');
ga('send', 'pageview');

</script>

<div class="container-fluid" style="padding:0px; position:fixed; z-index:999 !important; width:100%;">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <div id="flipkart-navbar">
    <div class="container">
      <div class="row row1"> </div>
      <div class="row row2">
        <div class="col-sm-4 col-xs-4 hidden-md hidden-lg">
          <p class=" " style="margin:0px; color:#000;padding:10px 0px;"><span class="smallnav menu" onclick="openNav()">☰ Courses </span></p>
        </div>
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
          <span class="largenav"><a href="https://www.janbasktraining.com" style=" color:#000;  "><img src="https://www.janbasktraining.com/assets/img/logo-new.jpg" /></a></span>
        </div>
        <div class="flipkart-navbar-search  col-sm-4 col-xs-4 hidden-lg hidden-md"><a href="https://www.janbasktraining.com" style=" color:#000;  "> <img src="https://www.janbasktraining.com/assets/img/logo-new.jpg" /></a> </div>
        <div class="flipkart-navbar-search  col-sm-4 col-xs-4 hidden-lg hidden-md" align="right">
          <div class="row">
            <?php
					if($this->session->userdata('user_id'))
					{
				?>
            <h2 style="margin:0px;padding:0px 15px 0px 0px;"><a href="javascript:;">
              <span style="color:#000; font-size:12px;">Welcome,<br />
</span><?php  echo $this->session->userdata('user_name');?>
              </a> <br />
<a href="<?php	echo site_url("user/logout");	?>"><span style="color:#000; font-size:12px;">( Logout )</span></a></h2>
            
            <?php
				
					}
					else
					{
						
				?>
            <p style="margin:0px;padding:10px 15px 10px 0px;"><a href="<?php	echo site_url("contact-us");	?>" style=" color:#000;  "><i class="fa fa-phone"></i>&nbsp;Let's Talk</a></p>
            <?php
					}
			   ?>
          </div>
        </div>
        <ul class="largenav pull-right col-sm-7">
          <li class="dropdown upper-links"> <a href="#" class="dropdown-toggle links" data-toggle="dropdown" style="background-color:#fff !important; padding:10px 0px;">All Courses <b class="caret"></b></a>
            <ul class="dropdown-menu mega-menu">
              <li class="mega-menu-column">
                <ul>
                  <li><a href="<?php	echo site_url("online-java-training");	?>">Java</a></li>
                  <li><a href="<?php	echo site_url("dotnet-training");	?>">.NET</a></li>
                  <li><a href="<?php	echo site_url("online-salesforce-training/");	?>">Salesforce</a></li>
                  <li><a href="<?php	echo site_url("online-sql-server-training");	?>">SQL Server</a></li>
                  <li><a href="<?php	echo site_url("online-qa-training");	?>">QA Testing</a></li>
                  <li><a href="<?php	echo site_url("business-analyst-training");	?>">Business Analyst</a></li>
                  <li><a href="<?php	echo site_url("oracle-dba-training");	?>">Oracle DBA</a></li>
                  <li><a href="<?php	echo site_url("data-science");	?>">Data Science</a></li>
                </ul>
              </li>
              <li class="mega-menu-column">
                <ul>
                  <li><a href="<?php	echo site_url("hadoop-big-data-analytics");	?>">Hadoop</a></li>
                  <li><a href="<?php	echo site_url("iphone-application-training");	?>">iOS Developer</a></li>
                  <li><a href="<?php	echo site_url("courses/android");	?>">Android Developer</a></li>
                  <li><a href="<?php	echo site_url("courses/vmware");	?>">VMWare</a></li>
                  <li><a href="<?php	echo site_url("courses/digital-marketing");	?>">Digital Marketing</a></li>
                  <li><a href="<?php	echo site_url("pmp-course");	?>">PMP</a></li>
                  <li><a href="<?php	echo site_url("courses/aws");	?>">AWS</a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          <!--<li class="upper-links"><a class="links" href="https://www.janbasktraining.com/corporate-training">Corporate Training</a></li>-->
          <li class="upper-links"><a class="links" href="https://www.janbasktraining.com/contact-us">Expert's Advice</a></li>
          <?php
					if($this->session->userdata('user_id'))
					{
				?>
          <li  class="upper-links dropdown"><span style="color:#000; font-size:15px;">Welcome</span>&nbsp;<a href="javascript:;">
            <?php  echo $this->session->userdata('user_name');?>
            </a>&nbsp;<i class="fa fa-angle-double-down" style="color:#000;"></i>
            <ul class="dropdown-menu">
              <li class="profile-li"><a class="profile-links" href="<?php	echo site_url("user");	?>" target="_blank">Dashboard</a></li>
              <li class="profile-li"><a class="profile-links" href="<?php	echo site_url("user/logout");	?>">Logout</a></li>
            </ul>
          </li>
          <?php
				
					}
					else
					{
						
				?>
          <li class="upper-links"><a class="links" href="<?php	echo site_url("register");	?>" style="background-color:#0077BB; color:#fff; padding:3px 10px"><i class="fa fa-user"></i>&nbsp;SignUp</a></li>
          <li class="upper-links"><a class="links" href="<?php	echo site_url("login");	?>" style="background-color:#0077BB; color:#fff; padding:3px 10px"><i class="fa fa-user"></i>&nbsp;Login</a></li>
          
          <?php
					}
			   ?>
          <li class="upper-links"><a class="links" href="tel:+19086526151" style="color:#0077BB; "><i class="fa fa-phone"></i>&nbsp;+1 908 652 6151</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="mySidenav" class="sidenav">
    <div class="container" style="background-color: #666; padding:10px;"> <span class="sidenav-heading">Our Courses</span> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> </div>
    <a href="<?php	echo site_url("online-java-training");	?>">Java</a> <a href="<?php	echo site_url("dotnet-training");	?>">.NET</a> <a href="<?php	echo site_url("online-salesforce-training/");	?>">Salesforce</a> <a href="<?php	echo site_url("online-sql-server-training");	?>">SQL Server</a> <a href="<?php	echo site_url("business-analyst-training");	?>">Business Analyst</a> <a href="<?php	echo site_url("online-qa-training");	?>">QA Testing</a> <a href="<?php	echo site_url("courses/digital-marketing");	?>">Digital Marketing</a> <a href="<?php	echo site_url("pmp-course");	?>">PMP</a> <a href="<?php	echo site_url("courses/aws");	?>">AWS</a> <a href="<?php	echo site_url("iphone-application-training");	?>">iOS Developer</a> <a href="<?php	echo site_url("courses/android");	?>">Android Developer</a> <a href="<?php	echo site_url("courses/vmware");	?>">VMWare</a> <a href="<?php	echo site_url("hadoop-big-data-analytics");	?>">Hadoop</a> <a href="<?php	echo site_url("oracle-dba-training");	?>">Oracle DBA</a> <a href="<?php	echo site_url("data-science");	?>">Data Science</a> </div>
</div>
<script>
		function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    // document.getElementById("flipkart-navbar").style.width = "50%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.backgroundColor = "rgba(0,0,0,0)";
}</script>
<style>
.mega-menu {
	padding: 10px 0px ! important;
	width: 400px;
  border-radius: 0;
  margin-top: 0px;
	}

	.mega-menu li {
		display: inline-block;
		float: left;width: 156px;
		font-size: 0.94rem;
		padding: 3px 0px;
		}
		.mega-menu-column ul li a { padding:0px 10px;}
		.mega-menu-column ul li:hover { color:#000; background-color:#f1f1f1;}

		.mega-menu li.mega-menu-column {
			margin-right: 10px; margin-left:20px;
			width: 156px;
			}
			.mega-menu-column li{border-bottom: 1px solid #ddd;}
.mega-menu-column a{ color:#000;}
			.mega-menu .nav-header {
			padding: 0 !important;
			margin-bottom: 10px;
			display: inline-block;
			width: 100%;
			border-bottom: 1px solid #ddd;
			}
      .mega-menu img { padding-bottom: 10px;}




#flipkart-navbar {
    background-color: #fff;
    color: #FFFFFF;
}

.row1{
    padding-top: 10px;
}
.largenav a{ font-size:16px;}
.row2 {
    padding-bottom: 10px;
}

.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
}
.profile-li > a {
    color: #000 !important;
    font-weight: 300;
}
.profile-li:hover > a {
    color: #fff !important;
    font-weight: 300;
}
.flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 10px 0;
    height: 43px;
    cursor: pointer;
}

.cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .23), inset 1px 1px 0 0 hsla(0, 0%, 100%, .2);
    padding: 10px 0;
    text-align: center;
    height: 41px;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
}

.cart-button:hover{
    text-decoration: none;
    color: #fff;
    cursor: pointer;
}

.cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;
}

.item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
}

.upper-links {
    display: inline-block;
    padding: 10px 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 12px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
}

.dropdown:hover {
    background-color: #fff; transition: 0.3s;
}

.dropdown:hover .links {
    color: #000;
}

.dropdown:hover .dropdown-menu {
    display: block; transition: 0.3s;
}

.dropdown .dropdown-menu {
    position: absolute; transition: 0.3s;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
}

.links {
    color: #000;
    text-decoration: none;
}

.links:hover {
    color: #000;
    text-decoration: none;
}

.profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    box-sizing: border-box;
    display: block;
    padding: 0 11px;
    line-height: 23px;
}

.profile-li{
    padding-top: 2px;
}

.largenav {
    display: none;
}

.smallnav{
    display: block;
}

.smallsearch{
    margin-left: 15px;
    margin-top: 15px;
}

.menu{
    cursor: pointer;
}

@media screen and (min-width: 768px) {
    .largenav {
        display: block;
    }
    .smallnav{
        display: none;
    }
    .smallsearch{
        margin: 0px;
    }
}

/*Sidenav*/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 0 4px 8px -3px #555454;
    padding-top: 0px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    transition: 0.3s;
	border-bottom: 1px solid #f1f1f1 !important;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 26px;
    margin-left: 50px;
    color: #fff;        
}

@media screen and (max-height: 450px) {
  .sidenav a {font-size: 18px; border-bottom: 1px solid #f1f1f1 !important;}
}

.sidenav-heading{
    font-size: 18px; padding:10px 0;
    color: #fff;
}
</style>
