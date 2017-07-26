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
		.payment {
			border: solid 1px #CFCFD3;
			width: 100%;
			overflow:scroll;
		}
		.payment th, .payment td {
			color:#000;
			text-align: center !important;
			padding: 7px;
			border: solid 1px #CFCFD3;
			
			font-size: 14px;
		}
		</style>
		<link rel="stylesheet" href="<?php	echo site_url('assets/menu/css/reset.css');	?>">
		<!-- CSS reset -->
		<link rel="stylesheet" href="<?php	echo site_url('assets/menu/css/style.css');	?>">
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/custom.css');	?>">
		<script src="<?php	echo site_url('assets/menu/js/modernizr.js');	?>"></script>
		<script src="<?php	echo site_url('assets/menu/js/jquery-2.1.1.js');	?>"></script>
		<script src="<?php	echo site_url('assets/menu/js/jquery.menu-aim.js');	?>"></script><!-- menu aim -->
		<script src="<?php	echo site_url('assets/menu/js/main.js');	?>"></script>
	</head>
	<body id="home">
		<?php	$this->load->view($this->config->item("tree_template_include")."header");	?>
		<section id="paymentpage" class="padding-top-bottom" style="background-color:#F1F1F1; margin-top:50px;" >
			<div class="container">
				<div class="row">
					<section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:solid 1px #CFCFD3; border-radius:4px; background:#fff;">
						<div> 
							<!--<h1>Account Login</h1>		-->
							<div style="margin-bottom:20px;" class="">
								<div class="row">
									<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="inner underline no-margin" align="center">
											<h1  class="inside-banner" style="color:#000;">Summary : Course Invoice </h1>
											<p>Review the invoice before checking out your shopping cart. Call JanBask Training Sales Team if you face any issues or have any questions.</p>
											<br>
											<table class="table-responsive payment">
												<tr align="center">
													<th>Course Name</th>
													<th>Course Price</th>
													<th>Course Timings</th>
													<th style="text-align:right !important;">Total Amount(In USD)</th>
												</tr>
												<?php
														if(empty($cart_items))
														{
													?>
															<tr>
															<td colspan='4'>No Record Found</td>
															</tr>
													<?php
														}
														else
														{
															$total_amount = 0;
															$coupon_amount = 0;
															foreach($cart_items as $cart_item)
															{
																$course_name = $cart_item->course_name;
																$course_image = $cart_item->course_image;
																$course_amount = $cart_item->amount;
																$start_time = $cart_item->start_time;
																$start_date = $cart_item->start_date;
																$am_pm = $cart_item->am_pm;
													?>
												<tr>
													<td><img src="<?php	echo site_url('assets/sitefiles/images/course/'.$course_image);	?>" width="50px"><br>
													<?php	echo $course_name;	?></td>
													<td>USD <?php	echo $course_amount;	?></td>
													<td><?php	echo date("h.i", strtotime($start_time));	?> <?php	echo $am_pm;	?><br>
													<br>
													<strong style="font-weight:bold !important;"><?php	echo date("d M Y", strtotime($start_date));	?></strong></td>
													<td align="right" style="text-align:right !important;"><?php	echo $course_amount;	?></td>
												</tr>
												<?php
																$total_amount+=$course_amount;
															}
												?>
												<tr>
													<td colspan="2" rowspan="4">
														<div class="">
															<form action="javascript:;" id="coupon_code_form">
																<h2 class="header_sub_heading" style=""> Apply Coupon Code </h2><br>
																<div class="">
																	
																	<span id="coupon_code_msg"></span>
																	<input class="form-control input-lg" placeholder="Enter Code Here" name="" id="coupon_code"  type="" style="border: solid 1px #999;"><br>
																	<input type="hidden" id="course_id" value="<?php echo $cart_items[0]->course_id;?>">
																	<input type="hidden" id="cart_id" value="<?php echo $cart_items[0]->cart_id;?>">
																	<div class="form-group" align="center">
																		<div class="enrolltd" align="center">
																			<span class="input-group-btn">
																				<button class="btn btn-store" type="submit" name="submit">Apply Now</button>
																			</span>
																		</div>
																	</div>
																	
																</div>
															</form>
														</div>
													</td>
													<td colspan="" style="text-align:right !important;">Sub Total</td>
													<td align="right" style="text-align:right !important;"><?php	
														echo $total_amount;	
													?></td>
												</tr>
												
												<tr>
													<td colspan="" style="text-align:right !important;">Any Discount(-)</td>
													<?php 
													if( isset($cart_items[0]->coupon_id)){?>
													<?php if($cart_items[0]->fixed_percent=="1")
															{
																$coupon_value=$cart_items[0]->coupon_value;
																$coupon_amount=$coupon_value;
															}
															else
															{
																$coupon_value=$cart_items[0]->coupon_value;
																$coupon_amount=(($total_amount*$coupon_value)/100);
															}
													?>
													<td align="right" style="text-align:right !important;"><?php echo $coupon_amount;?></td>
													<?php } else { ?>
													<td align="right" style="text-align:right !important;">-</td>
													<?php } ?>
												</tr>
														<?php
														
														$amoun_billed = ($total_amount-$coupon_amount);
													?>
													
												<tr style="font-weight:bold !important;">
													<td colspan="" style="text-align:right !important;"><strong> Total</strong></td>
													<td align="right" style="text-align:right !important;"><strong><?php	echo $amoun_billed;	?></strong></td>
												</tr>
												<?php
														}
												?>
											</table>
											<br>
											<?php
												if(!empty($cart_items))
												{
											?>
											<?php	echo form_open("",array("id"=>"payment_form"));	?>
												
												<?php	echo form_hidden(array('cart_id'=>$cart_items[0]->cart_id,'amount'=>$amoun_billed));	?>
                                                <div class="form-group" align="right">
													<ul style="line-height:15px; font-size:12px; color:#999; "><li style="list-style:disc">Session Schedule displayed is tentative.</li><li style="list-style:disc">Course details may be differ and are subject to industry updates.</li><li style="list-style:disc">Talk to our helpline numbers for any queries.</li></ul>
													
												</div>
												<div class="form-group" align="right">
													<label style="">
														<input type="checkbox" id="payment_tandc" name="payment_tandc" />
													I have read the  <a href="<?php echo site_url('term-condition');?>" target="_blank">Terms & Conditions</a> & <a href="<?php echo site_url('refund-policy');?>" target="_blank">Refund Policies </a>Properly.</label>
													<div class="validation-error" id="payment_tandc_error"style="text-align:end;"></div>
												</div>
												<div class="form-group"  align="right">
													<div class="enrolltd" ><span class="input-group-btn">
														<button class="btn btn-store" type="submit" name="submit">Proceed to pay</button>
														</span>
													</div>
												</div>
											<?php	echo form_close();	?>
											<?php
												}
											?>
											<div id="show_loader" class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background:#EBEBEB;height:100%;width: 100%;top: 0;left: 0;opacity: 1;display:none;">
											<!--<p class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style='text-align:center;height:100%;width:100%;top:40%'>This is the overlay!</p>-->
												<img src="<?php	echo site_url('assets/img/loading.gif');	?>" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
		<?php	$this->load->view($this->config->item("tree_template_include")."footer-home");	?>
		<link rel="stylesheet" href="css/angelodemo.css">
		<script type="text/javascript" src="<?php	echo site_url('assets/js/jquery-3.2.0.min.js');	?>"></script> 
		<script type="text/javascript" src="<?php	echo site_url('assets/js/common_functions.js');	?>"></script>
		<script type="text/javascript" src="<?php	echo site_url('assets/js/cutom_validations.js');	?>"></script>
		
		<script type="text/javascript" src="<?php	echo site_url('assets/js/bootstrap.min.js');	?>"></script> 
		<script type="text/javascript" src="<?php	echo site_url('assets/js/wow.min.js');	?>"></script>
		<script>
			$("#coupon_code_form").off()
			$("#coupon_code_form").on("submit",function(event)
			{
				event.preventDefault();
				$("#coupon_code_msg").html('');
				var coupon_code=$("#coupon_code").val();
				var course_id=$("#course_id").val();
				var cart_id=$("#cart_id").val();
				if(coupon_code=="")
				{
					$("#coupon_code_msg").html('Enter coupon code.').css('color','red');
					return false;
				}
				$("#success_message").html("Please Wait...");
				$.ajax({
					url:site_url+"Checkout/applyCouponCode",
					type:"POST",
					data:{'COUPON_CODE':coupon_code,'COURSE_ID':course_id,'CART_ID':cart_id},
					success:function(response)
					{
						response=JSON.parse(response);
						if(response.status=="1")
						{
							window.location.reload();
						}
						else
						{
							$("#coupon_code_msg").html(response.coupon_code_status).css('color','red');
						}
					},
					error:function()
					{
						$("#success_message").html("Error Occured,Contact Admin");
						$('form')[0].reset(); 
					}
				});					
			});
		</script>
	</body>
</html>