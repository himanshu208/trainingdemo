<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">  
<style type="text/css">


.footer-social-icons {
    width: 350px;
    display:block;
    margin: 0 auto;
}
.social-icon {
    color: #fff;
}
ul.social-icons {
    margin-top: 10px;
}
.social-icons li {
    vertical-align: top;
    display: inline;
    height: 100px;
}
.social-icons a {
    color: #fff;
    text-decoration: none;
}
.fa-facebook {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-facebook:hover {
    background-color: #3d5b99;
}
.fa-twitter {
    padding:10px 12px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-twitter:hover {
    background-color: #00aced;
}
.fa-rss {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-rss:hover {
    background-color: #eb8231;
}
.fa-youtube {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-youtube:hover {
    background-color: #e64a41;
}
.fa-linkedin {
    padding:10px 14px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-linkedin:hover {
    background-color: #0073a4;
}
.fa-google-plus {
    padding:10px 9px;
    -o-transition:.5s;
    -ms-transition:.5s;
    -moz-transition:.5s;
    -webkit-transition:.5s;
    transition: .5s;
    background-color: #322f30;
}
.fa-google-plus:hover {
    background-color: #e25714;
}

body {
	font-family: 'Didact Gothic', sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}

a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ This fixed width container surrounds all other divs ~~ */
.container {
	width: 630px;
	background-color: #FFFFFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ The header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo. ~~ */
.header {
	background-color: #fff;
}


.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {

	
	width: 100%;
	float: left;
}
.sidebar2 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding: 10px 0;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the anchor block properties so it fills out the whole LI that contains it so that the entire area reacts to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ The footer styles ~~ */
.footer {
	padding: 0px 0;
	background-color: #0668CB;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
}

/* ~~ Miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the .container) if the .footer is removed or taken out of the .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.tablehead{
	color:#0668CB !important; /* this creates the button separation */
}
.tablecontent a{
	color:#000 !important; text-decoration:none; /* this creates the button separation */
}
-->
</style></head>

<body>

<div class="container" style="border:1px solid #f1f1f1;">
  <div class="header" style="padding:10px; background:#F1F1F1;  " align="center"><a href="#"><img src="http://janbaskdemo.com/jbworkdesign/img/jbt-logo-color.png" alt="JanBask Training" name="Janbask Training"  id="Janbask Training" style="" /></a> 
    <!-- end .header --></div>
 
  <div class="content" align="center" style=" margin-bottom:10px; ">
  <h1 style="font-size:18px; padding-left:20px;" align="left">Thank You <?php	echo $name;	?>,</h1> 



 </h1>
  <p align="justify" style="padding:0 20px;">Your message has been sent to our Training Team. You should receive a reply soon from our team at xyz@gmail.com. We may also contact you at 9999999999 depending upon your availability.<br>
<br>


Thank you again for contacting us.<br>
 
Looking forward to speaking with you!
<br><br>
    </p>
  <div align="left"><img src="images/unnamed.jpg" style="width:100%;"></div>
  <div style=" background-color:rgba(0,0,0,.5);padding:10px; margin-top:-250px; margin-left:0px; border-radius:15px; position:absolute">
    
    
<p align="center" style="font-size:25px; color:#fff;">Explore Our Course Library <br><br>

    <a href="http://janbaskdemo.com/jbworkdesign/login.php" style="padding:5px 10px; border-radius:5px; background:#000; color:#fff; text-decoration:none; font-size:20px;">Start Exploring</a>
    </p>


</div>
</div>
  
  
   
  
  <div align="center">  <ul class="social-icons">
        <li><a href="https://www.facebook.com/JanBasktraining/" class="social-icon" target="_blank"> <img src="http://www.janbasktraining.com/assets/img/social/fb.jpg" width="30px"></a></li>
        <li><a href="https://twitter.com/janbasktraining" class="social-icon" target="_blank"> <img src="http://www.janbasktraining.com/assets/img/social/twtr.jpg" width="30px"></a></li>
        <li><a href="http://www.janbasktraining.com/blog/" class="social-icon" target="_blank"> <img src="http://www.janbasktraining.com/assets/img/social/blogger.jpg" width="30px"></a></li>
        <li><a href="#" class="social-icon" target="_blank"> <img src="http://www.janbasktraining.com/assets/img/social/yt.jpg" width="30px"></a></li>
        <li><a href="#" class="social-icon" target="_blank"> <img src="http://www.janbasktraining.com/assets/img/social/in.jpg" width="30px"></a></li>
        <li><a href="https://plus.google.com/+JanbaskNet-IT-Training-Technology-Courses/posts" class="social-icon" target="_blank"> <img src="http://www.janbasktraining.com/assets/img/social/gplus.jpg" width="30px"></a></li>
    </ul></div>
  
  <div class="footer" style="color:#FFFFFF; font-size:18px;" align="center">
    <p align="center" style="font-size:12px;">&copy; JanBask 2017. All Right Reserved</p></div>
  <!-- end .container --></div>
</body>
</html>
