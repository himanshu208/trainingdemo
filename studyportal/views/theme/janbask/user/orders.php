<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JanBask Dashboard</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/bootstrap.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/bootstrap-responsive.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/uniform.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/student_css_js/css/select2.css');	?>" />
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
    <li><a href="<?php	echo site_url("user");	?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li  class="active"> <a href="<?php	echo site_url("user/orders");	?>"><i class="icon icon-money"></i> <span>Order History</span></a> </li>
    <li > <a href="<?php	echo site_url("user/profile");	?>"><i class="icon icon-pencil"></i> <span>Edit Profile</span></a> </li>

  </ul>
</div>
<!--sidebar-menu--> 
		
		<div id="content">
			<div id="content-header">
				<div id="breadcrumb">
					<a href="<?php	echo site_url('user');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="<?php	echo site_url('user/orders');	?>" class="current">Orders</a>
				</div>
				<h1>My Orders History</h1>
			</div>
			<div class="container-fluid"><hr>
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"><i class="icon-th"></i></span>
								<h5>My Orders</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered data-table">
									<thead>
										<tr>
											<th>Order ID</th>
											<th>Order Date</th>
											<th>Course</th>
											<th>Batch</th>
											<th>Batch Start Date</th>
											<th>Batch Price(In USD)</th>
											<th>Total Paid Amount (In USD)</th>
											<th>Coupon </th>
										</tr>
									</thead>
									<tbody>
										
										
										
										 <?php 
											if(isset($order_arr) && !empty($order_arr))
											{
												foreach($order_arr as $order)
												{
											?>
													<tr class="gradeX">
														<td><?php echo $order->invoice_code;?></td>
														<td><?php	echo date("F d ,Y", strtotime($order->order_date));	?></td>
														<td><?php echo $order->course_name;?></td>
														<td><?php echo $order->batch_name;?></td>
														<td><?php	echo date("F d,Y", strtotime($order->batch_start_date));	?></td>
														<td><?php echo $order->batch_price;?></td>
														<td><?php echo $order->amount_paid;?></td>
														<td><?php
															if($order->coupon_apply!="0")
															{
																echo $order->coupon_code;
																if($order->fixed_percent=="1")
																{
																	echo " ( ".$order->value." Fixed )";
																}
																else 
																{
																	echo " ( ".$order->value." % )";
																}
															}
															?>
														</td>
													</tr>
										<?php 		
												}	 
											}
											else
											{ 
										?>
												<tr class="gradeX"><td colspan="9">No Record Found </td></tr>
										<?php
											}
										?>
										
										
										
										
										
										
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php	$this->load->view($this->config->item("user_template_include")."footer");	?>
		<script src="<?php	echo site_url('assets/student_css_js/js/jquery.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/jquery.ui.custom.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/bootstrap.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/jquery.uniform.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/select2.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/jquery.dataTables.min.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/matrix.js');	?>"></script> 
		<script src="<?php	echo site_url('assets/student_css_js/js/matrix.tables.js');	?>"></script>
	</body>
</html>
