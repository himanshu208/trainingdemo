<!doctype html>
<html ng-app="storeApp">
<head>
<title>Instructor Login</title>
<meta charset="utf-8">
<meta name="description" content="Instructor Login">
 <link rel="shortcut icon" href="<?php	echo site_url('assets/img/tech-logos/homelogo/favicon.png');	?>">
<meta name="author" content="JanBask Training">
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
           <a href="<?php echo site_url();?>"><img src="<?php	echo site_url('assets/img/jbt-logo-color.png');	?>" class="img-responsive" style="padding-top:20px;"></a>
           
          
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
				  <br>
                 <span id="enquiry_msg"></span>
                  <br>
                  <form role="form" enctype="multipart/form-data" action="javascript:;" id="instructor_login_form">
                    <div class="content">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR NAME" value="" name="name" id="name">
						<span id="name_error"></span>
                      </div>
                      <div class="form-group">
							<select class="form-control"  id="country_code" name="country_code">
								<option value="">Country Code</option>
									<option data-countryCode="CA" value="1">Canada (+1)</option>
									<option data-countryCode="IN" value="91">India (+91)</option>
								<option data-countryCode="US" value="1" selected>USA (+1)</option>
							<option data-countryCode="GB" value="44" >UK (+44)</option>	
								<optgroup label="Other countries">
									<option data-countryCode="DZ" value="213">Algeria (+213)</option>
									<option data-countryCode="AD" value="376">Andorra (+376)</option>
									<option data-countryCode="AO" value="244">Angola (+244)</option>
									<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
									<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
									<option data-countryCode="AR" value="54">Argentina (+54)</option>
									<option data-countryCode="AM" value="374">Armenia (+374)</option>
									<option data-countryCode="AW" value="297">Aruba (+297)</option>
									<option data-countryCode="AU" value="61">Australia (+61)</option>
									<option data-countryCode="AT" value="43">Austria (+43)</option>
									<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
									<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
									<option data-countryCode="BH" value="973">Bahrain (+973)</option>
									<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
									<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
									<option data-countryCode="BY" value="375">Belarus (+375)</option>
									<option data-countryCode="BE" value="32">Belgium (+32)</option>
									<option data-countryCode="BZ" value="501">Belize (+501)</option>
									<option data-countryCode="BJ" value="229">Benin (+229)</option>
									<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
									<option data-countryCode="BT" value="975">Bhutan (+975)</option>
									<option data-countryCode="BO" value="591">Bolivia (+591)</option>
									<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
									<option data-countryCode="BW" value="267">Botswana (+267)</option>
									<option data-countryCode="BR" value="55">Brazil (+55)</option>
									<option data-countryCode="BN" value="673">Brunei (+673)</option>
									<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
									<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
									<option data-countryCode="BI" value="257">Burundi (+257)</option>
									<option data-countryCode="KH" value="855">Cambodia (+855)</option>
									<option data-countryCode="CM" value="237">Cameroon (+237)</option>
									<option data-countryCode="CA" value="1">Canada (+1)</option>
									<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
									<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
									<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
									<option data-countryCode="CL" value="56">Chile (+56)</option>
									<option data-countryCode="CN" value="86">China (+86)</option>
									<option data-countryCode="CO" value="57">Colombia (+57)</option>
									<option data-countryCode="KM" value="269">Comoros (+269)</option>
									<option data-countryCode="CG" value="242">Congo (+242)</option>
									<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
									<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
									<option data-countryCode="HR" value="385">Croatia (+385)</option>
									<option data-countryCode="CU" value="53">Cuba (+53)</option>
									<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
									<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
									<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
									<option data-countryCode="DK" value="45">Denmark (+45)</option>
									<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
									<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
									<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
									<option data-countryCode="EC" value="593">Ecuador (+593)</option>
									<option data-countryCode="EG" value="20">Egypt (+20)</option>
									<option data-countryCode="SV" value="503">El Salvador (+503)</option>
									<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
									<option data-countryCode="ER" value="291">Eritrea (+291)</option>
									<option data-countryCode="EE" value="372">Estonia (+372)</option>
									<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
									<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
									<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
									<option data-countryCode="FJ" value="679">Fiji (+679)</option>
									<option data-countryCode="FI" value="358">Finland (+358)</option>
									<option data-countryCode="FR" value="33">France (+33)</option>
									<option data-countryCode="GF" value="594">French Guiana (+594)</option>
									<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
									<option data-countryCode="GA" value="241">Gabon (+241)</option>
									<option data-countryCode="GM" value="220">Gambia (+220)</option>
									<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
									<option data-countryCode="DE" value="49">Germany (+49)</option>
									<option data-countryCode="GH" value="233">Ghana (+233)</option>
									<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
									<option data-countryCode="GR" value="30">Greece (+30)</option>
									<option data-countryCode="GL" value="299">Greenland (+299)</option>
									<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
									<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
									<option data-countryCode="GU" value="671">Guam (+671)</option>
									<option data-countryCode="GT" value="502">Guatemala (+502)</option>
									<option data-countryCode="GN" value="224">Guinea (+224)</option>
									<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
									<option data-countryCode="GY" value="592">Guyana (+592)</option>
									<option data-countryCode="HT" value="509">Haiti (+509)</option>
									<option data-countryCode="HN" value="504">Honduras (+504)</option>
									<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
									<option data-countryCode="HU" value="36">Hungary (+36)</option>
									<option data-countryCode="IS" value="354">Iceland (+354)</option>
									<option data-countryCode="IN" value="91">India (+91)</option>
									<option data-countryCode="ID" value="62">Indonesia (+62)</option>
									<option data-countryCode="IR" value="98">Iran (+98)</option>
									<option data-countryCode="IQ" value="964">Iraq (+964)</option>
									<option data-countryCode="IE" value="353">Ireland (+353)</option>
									<option data-countryCode="IL" value="972">Israel (+972)</option>
									<option data-countryCode="IT" value="39">Italy (+39)</option>
									<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
									<option data-countryCode="JP" value="81">Japan (+81)</option>
									<option data-countryCode="JO" value="962">Jordan (+962)</option>
									<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
									<option data-countryCode="KE" value="254">Kenya (+254)</option>
									<option data-countryCode="KI" value="686">Kiribati (+686)</option>
									<option data-countryCode="KP" value="850">Korea North (+850)</option>
									<option data-countryCode="KR" value="82">Korea South (+82)</option>
									<option data-countryCode="KW" value="965">Kuwait (+965)</option>
									<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
									<option data-countryCode="LA" value="856">Laos (+856)</option>
									<option data-countryCode="LV" value="371">Latvia (+371)</option>
									<option data-countryCode="LB" value="961">Lebanon (+961)</option>
									<option data-countryCode="LS" value="266">Lesotho (+266)</option>
									<option data-countryCode="LR" value="231">Liberia (+231)</option>
									<option data-countryCode="LY" value="218">Libya (+218)</option>
									<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
									<option data-countryCode="LT" value="370">Lithuania (+370)</option>
									<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
									<option data-countryCode="MO" value="853">Macao (+853)</option>
									<option data-countryCode="MK" value="389">Macedonia (+389)</option>
									<option data-countryCode="MG" value="261">Madagascar (+261)</option>
									<option data-countryCode="MW" value="265">Malawi (+265)</option>
									<option data-countryCode="MY" value="60">Malaysia (+60)</option>
									<option data-countryCode="MV" value="960">Maldives (+960)</option>
									<option data-countryCode="ML" value="223">Mali (+223)</option>
									<option data-countryCode="MT" value="356">Malta (+356)</option>
									<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
									<option data-countryCode="MQ" value="596">Martinique (+596)</option>
									<option data-countryCode="MR" value="222">Mauritania (+222)</option>
									<option data-countryCode="YT" value="269">Mayotte (+269)</option>
									<option data-countryCode="MX" value="52">Mexico (+52)</option>
									<option data-countryCode="FM" value="691">Micronesia (+691)</option>
									<option data-countryCode="MD" value="373">Moldova (+373)</option>
									<option data-countryCode="MC" value="377">Monaco (+377)</option>
									<option data-countryCode="MN" value="976">Mongolia (+976)</option>
									<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
									<option data-countryCode="MA" value="212">Morocco (+212)</option>
									<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
									<option data-countryCode="MN" value="95">Myanmar (+95)</option>
									<option data-countryCode="NA" value="264">Namibia (+264)</option>
									<option data-countryCode="NR" value="674">Nauru (+674)</option>
									<option data-countryCode="NP" value="977">Nepal (+977)</option>
									<option data-countryCode="NL" value="31">Netherlands (+31)</option>
									<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
									<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
									<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
									<option data-countryCode="NE" value="227">Niger (+227)</option>
									<option data-countryCode="NG" value="234">Nigeria (+234)</option>
									<option data-countryCode="NU" value="683">Niue (+683)</option>
									<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
									<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
									<option data-countryCode="NO" value="47">Norway (+47)</option>
									<option data-countryCode="OM" value="968">Oman (+968)</option>
									<option data-countryCode="PW" value="680">Palau (+680)</option>
									<option data-countryCode="PA" value="507">Panama (+507)</option>
									<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
									<option data-countryCode="PY" value="595">Paraguay (+595)</option>
									<option data-countryCode="PE" value="51">Peru (+51)</option>
									<option data-countryCode="PH" value="63">Philippines (+63)</option>
									<option data-countryCode="PL" value="48">Poland (+48)</option>
									<option data-countryCode="PT" value="351">Portugal (+351)</option>
									<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
									<option data-countryCode="QA" value="974">Qatar (+974)</option>
									<option data-countryCode="RE" value="262">Reunion (+262)</option>
									<option data-countryCode="RO" value="40">Romania (+40)</option>
									<option data-countryCode="RU" value="7">Russia (+7)</option>
									<option data-countryCode="RW" value="250">Rwanda (+250)</option>
									<option data-countryCode="SM" value="378">San Marino (+378)</option>
									<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
									<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
									<option data-countryCode="SN" value="221">Senegal (+221)</option>
									<option data-countryCode="CS" value="381">Serbia (+381)</option>
									<option data-countryCode="SC" value="248">Seychelles (+248)</option>
									<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
									<option data-countryCode="SG" value="65">Singapore (+65)</option>
									<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
									<option data-countryCode="SI" value="386">Slovenia (+386)</option>
									<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
									<option data-countryCode="SO" value="252">Somalia (+252)</option>
									<option data-countryCode="ZA" value="27">South Africa (+27)</option>
									<option data-countryCode="ES" value="34">Spain (+34)</option>
									<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
									<option data-countryCode="SH" value="290">St. Helena (+290)</option>
									<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
									<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
									<option data-countryCode="SD" value="249">Sudan (+249)</option>
									<option data-countryCode="SR" value="597">Suriname (+597)</option>
									<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
									<option data-countryCode="SE" value="46">Sweden (+46)</option>
									<option data-countryCode="CH" value="41">Switzerland (+41)</option>
									<option data-countryCode="SI" value="963">Syria (+963)</option>
									<option data-countryCode="TW" value="886">Taiwan (+886)</option>
									<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
									<option data-countryCode="TH" value="66">Thailand (+66)</option>
									<option data-countryCode="TG" value="228">Togo (+228)</option>
									<option data-countryCode="TO" value="676">Tonga (+676)</option>
									<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
									<option data-countryCode="TN" value="216">Tunisia (+216)</option>
									<option data-countryCode="TR" value="90">Turkey (+90)</option>
									<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
									<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
									<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
									<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
									<option data-countryCode="UG" value="256">Uganda (+256)</option>
									<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
									<option data-countryCode="UA" value="380">Ukraine (+380)</option>
									<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
									<option data-countryCode="UY" value="598">Uruguay (+598)</option>
									<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
									<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
									<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
									<option data-countryCode="VA" value="379">Vatican City (+379)</option>
									<option data-countryCode="VE" value="58">Venezuela (+58)</option>
									<option data-countryCode="VN" value="84">Vietnam (+84)</option>
									<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
									<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
									<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
									<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
									<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
									<option data-countryCode="ZM" value="260">Zambia (+260)</option>
									<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
							</select>
						<span id="country_code_error"></span>
                      </div>					  
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR MOBILE No." id="mobile" value="" name="phone" >
						<span id="mobile_error"></span>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER YOUR EMAIL ID" value="" id="email" name="email" >
						<span id="email_error"></span>
                      </div>
                      
                      <div class="form-group">
                        <select name="country" id="country_selected"  onchange="javascript:select_state()" class="form-control">
						
						  <option value="">Select Country</option>
						  <?php foreach($countries as $counrty){?>
						  <option value="<?php echo $counrty->country_id;?>"><?php echo $counrty->country_name;?></option>
						  <?php } ?>
  
						</select>
						<span id="country_selected_error"></span>
                      </div>
                      <div class="form-group">
                        <select  name="state" id="state_selected"  class="form-control">
							<option value="">Select State</option>
						</select>
						<span id="state_selected_error"></span>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER PIN CODE" value="" id="pincode" name="pincode" >
						<span id="pincode_error"></span>
                       
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="expertise" placeholder="ENTER YOUR TECHNICAL EXPERTISE" value="" name="expertise" >
						<span id="expertise_error"></span>
                       
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="ENTER EXPERIENCE"  id="experience" value="" name="experience" >
                       <span id="experience_error"></span>
                      </div>
                      <div class="form-group">
                        <textarea name="cover_letter" id="cover_letter" class="form-control" >ADD COVER LETTER (WHY SHOULD I HIRE YOU?)</textarea>
                       <span id="cover_letter_error"></span>
                      </div>
                      <div class="form-group">
                      
                       UPLOAD RESUME: <input type="file" name="resume" id="resume" >
					   <span id="resume_error"></span>
                       
                      </div>
                      <div class="form-group">
                        <label style="">
				  <input type="checkbox" id="agree_term"> I agree with <a href="<?php	echo site_url("term-condition");	?>">Terms & Conditions
				  <span id="agree_term_error"></span>
				</a></label>
                       
                      </div>
                      <div class="form-group" align="center">
                      <div class="enrolltd" align="center"><span class="input-group-btn">
            <button class="btn btn-store" type="submit" name="submit">Join Us</button>
            </span></div></div> </div>
                  </form>
                </div>
				<div id="show_loader" class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background:#EBEBEB;height:100%;width: 100%;top: 0;left: 0;opacity: 1;display:none;">
											<!--<p class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style='text-align:center;height:100%;width:100%;top:40%'>This is the overlay!</p>-->
											<img src="<?php	echo site_url('assets/img/loading.gif');	?>" alt="">
										</div>
              </div>
              
              <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="inner no-margin"> <h1 class="inside-banner" style="color:#666;" align="left">Why Join JanBask</h1><br>

                <img src="http://www.janbasktraining.com/assets/img/trainer-form.jpg">  <br><br>


                
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

<link rel="stylesheet" href="css/angelodemo.css">
<script src="js/paccordion.js"></script> 
<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery-3.2.0.min.js');	?>"></script> 


<script>
/*	Function for site url	*/
function getRootUrl(url) {
	return url.toString().replace(/^(.*\/\/[^\/?#]*).*$/,"$1")+"/";
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

	$("#name_error").html("");
	$("#country_code_error").html("");
	$("#mobile_error").html("");
	$("#email_error").html("");
	$("#country_selected_error").html("");
	$("#state_selected_error").html("");
	$("#pincode_error").html("");
	$("#expertise_error").html("");
	$("#experience_error").html("");
	$("#cover_letter_error").html("");
	$("#resume_error").html("");
	$("#agree_term_error").html("");
	
	var name = $("#name").val();
	var country_code = $("#country_code").val();
	var mobile = $("#mobile").val();
	var email = $("#email").val();
	var country_selected = $("#country_selected").val();
	var state_selected = $("#state_selected").val();
	var pincode = $("#pincode").val();
	var expertise = $("#expertise").val();
	var experience = $("#experience").val();
	var cover_letter = $("#cover_letter").val();
	var resume = $("#resume").val();
	var agree_term = $("#agree_term").val();
	if(name=="")
	{
		$("#name_error").html("Name can't be empty").css("color","red");
		$("#name").focus();
		return false;
	}
	if(country_code=="")
	{
		$("#country_code_error").html("Country code can't be empty").css("color","red");
		$("#name").focus();
		return false;
	}	
	if(mobile=="")
	{
		$("#mobile_error").html("Number Can't be empty").css("color","red");
		$("#name").focus();
		return false;
	}
	if(mobile.length!=10)
	{
		$("#mobile_error").html("Enter valid mobile no.").css("color","red");
		$("#name").focus();
		return false;
	}	
	if(email=="")
	{
		$("#email_error").html("Email Can't be empty").css("color","red");
		$("#email").focus();
		return false;
	}	
	if(!IsEmail(email))
	{
		$("#email_error").html("Enter Valid Email").css("color","red");
		$("#email").focus();
		return false;
	}	
	if(country_selected=="")
	{
		$("#country_selected_error").html("Select Country").css("color","red");
		$("#country_selected").focus();
		return false;
	}
	if(state_selected=="")
	{
		$("#state_selected_error").html("Select State").css("color","red");
		$("#state_selected").focus();
		return false;
	}
	if(pincode=="")
	{
		$("#pincode_error").html("Pincode Can't be empty").css("color","red");
		$("#pincode").focus();
		return false;
	}
	if(expertise=="")
	{
		$("#expertise_error").html("Expertise Can't be empty").css("color","red");
		$("#expertise").focus();
		return false;
	}
	if(experience=="")
	{
		$("#experience_error").html("Experience Can't be empty").css("color","red");
		$("#experience").focus();
		return false;
	}
	if(cover_letter=="")
	{
		$("#cover_letter_error").html("Cover letter Can't be empty").css("color","red");
		$("#cover_letter").focus();
		return false;
	}
	if(resume=="")
	{
		$("#resume_error").html("Resume Can't be empty").css("color","red");
		$("#resume").focus();
		return false;
	}
	if($("#agree_term").prop("checked")==false)
	{
		$("#agree_term_error").html("Accept Terms & Conditions").css("color","red");
		$("#agree_term").focus();
		return false;
	}	

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
				$('form')[0].reset(); 
				$("#enquiry_msg").html("Enquiry submitted successfully.").css('color','green');
				 window.location.href="<?php echo site_url("thanks-you");?>";
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
/********************************
	Function to fetch states list based on country selected
*********************************/
function select_state()
{
	var country_id = $("#country_selected").val();
	if(country_id=="0")
	{
		return false;
	}

	var postData = {"country_id":country_id};
	$.ajax({
		url:site_url+"common/Ajax_Function/fetchStateList",
		data:postData,
		type:"POST",
		success:function(response)
		{
			response = JSON.parse(response);
			var state_drop = '';
			$.each(response,function(index,key)
			{
				state_drop+='<option value="'+key.state_id+'">'+key.state_name+'</option>';
			});
			$("#state_selected").html(state_drop);
		},
		error:function()
		{
			alert("Error Occoured,Contact Admin");
		}
	});	
}

	/********************************
			Validation for Registration Form
	*********************************/
$("#mobile").on("keypress",function(evt){
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){
		$("#mobile_error").html("Enter Numbers Only");
		return false;			
	}
	return true;
});
$("#pincode").on("keypress",function(evt){
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){
		$("#pincode_error").html("Enter Numbers Only");
		return false;			
	}
	return true;
});
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-59047824-2', 'auto');
ga('send', 'pageview');

</script>

</body>
</html>