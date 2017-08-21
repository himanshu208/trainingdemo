<!DOCTYPE html>
<html lang="en">
<head>
<title>JanBask Dashboard</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap.min.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap-responsive.min.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/uniform.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/select2.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/matrix-style.css');	?>" />
<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/matrix-media.css');	?>" />
<link href="<?php	echo site_url('assets/admin/font-awesome/css/font-awesome.css');	?>" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php	$this->load->view($this->config->item("admin_template_include")."header");	?>
<?php	$this->load->view($this->config->item("admin_template_include")."sidebar");	?>

<!--main-container-part-->
<div id="content" style="background-color:#fff;">
  <div id="content-header" >
    <div id="breadcrumb"> <a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Users List</a> </div>
    <h1>Users List</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Registered Users</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Course Intereted</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Counrty</th>
                  <th>State</th>
                  <th>City</th>
                  <th>Address</th>
                  <th>Email Varified</th>
                  <th>Register Date</th>
				  <th>Register Via</th>
				   <th>Email Verify</th>
                </tr>
              </thead>
              <tbody>
               <?php if(isset($user_arr) && !empty($user_arr))
						{
							foreach($user_arr as $user)
							{
				?>
								<tr class="users">
								  <td><input type="checkbox" /></td>
								  <td>JB<?php echo $user->user_id;?></td>
								  <td><?php echo $user->name;?></td>
								  <td><?php echo $user->course_name;?></td>
								  <td><?php echo $user->email;?></td>
								  <td><?php echo $user->mobile;?></td>
								  <td><?php echo $user->country_name;?></td>
								  <td><?php echo $user->state_name;?></td>
								  <td><?php echo $user->city_name;?></td>
								  <td><?php echo $user->address;?></td>
								  <td><?php echo ($user->email_verified=="1"?"Yes":"No");?></td>
								  <td><?php echo date("M,d,Y", strtotime($user->date_created));?></td>
								  <td><?php echo ($user->is_social=="1"?$user->social_platform:"Email");?></td>
								    <td >
								  <form action="" method="post">
								  <input type="hidden" name="id" value="<?php echo $user->user_id;?>">
								  <select style="width:100px;" name="status" onchange="changeStatus(this)">
									<option <?php echo ($user->email_verified==1)?"selected":"";?> value="Active">Yes</option>
									<option <?php echo ($user->email_verified==0)?"selected":"";?> value="Inactive">No</option>
								  </select>
								  </form>
								  </td>
								</tr>
				<?php 		}	 
						}
						else
						{ 
				?>
							<tr><td colspan="14">No Record Found </td></tr>
				<?php } ?>
                
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--main-container-part--> 

<?php	$this->load->view($this->config->item("admin_template_include")."footer");	?>
<script src="<?php	echo site_url('assets/admin/js/jquery.min.js');	?>"></script> 
<script src="<?php	echo site_url('assets/admin/js/jquery.ui.custom.js');	?>"></script> 
<script src="<?php	echo site_url('assets/admin/js/bootstrap.min.js');	?>"></script> 
<script src="<?php	echo site_url('assets/admin/js/jquery.uniform.js');	?>"></script> 
<script src="<?php	echo site_url('assets/admin/js/select2.min.js');	?>"></script> 
<script src="<?php	echo site_url('assets/admin/js/jquery.dataTables.min.js');	?>"></script> 
<script src="<?php	echo site_url('assets/admin/js/matrix.js');	?>"></script> 
<script src="<?php	echo site_url('assets/admin/js/matrix.tables.js');	?>"></script>
<script>
function changeStatus(obj){
	if(confirm("Are you sure you want change?")){
	obj.form.submit();
	}
}
</script>
</body>
</html>
