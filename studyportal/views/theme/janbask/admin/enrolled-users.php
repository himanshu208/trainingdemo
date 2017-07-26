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
    <div id="breadcrumb"> <a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Enrolled Users List</a> </div>
    <h1>Enrolled Users List</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Enrolled Users</h5>
          </div>
          <div class="widget-content nopadding">
           <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>ID</th>
                  <th>Student Name</th>
                  <th>Course</th>
                  <th>Batch</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Enrolled Date</th>
                  <th>Country</th>
                  <th>State</th>
                </tr>
              </thead>
              <tbody>
               <?php if(isset($enrolled_user_arr) && !empty($enrolled_user_arr))
						{
							foreach($enrolled_user_arr as $enrolled_user)
							{
				?>
								<tr class="users">
								  <td><input type="checkbox" /></td>
								  <td>JB<?php echo $enrolled_user->user_id;?></td>
								  <td><?php echo $enrolled_user->name;?></td>
								  <td><?php echo $enrolled_user->course_name;?></td>
								  <td><?php echo $enrolled_user->batch_name;?></td>
								  <td><?php echo $enrolled_user->email;?></td>
								  <td><?php echo $enrolled_user->mobile;?></td>
								  <td><?php echo $enrolled_user->enrolled_date;?></td>
								  <td><?php echo $enrolled_user->country_name;?></td>
								  <td><?php echo $enrolled_user->state_name;?></td>
								</tr>
				<?php 		}	 
						}
						else
						{ 
				?>
							<tr><td colspan="9">No Record Found </td></tr>
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
</body>
</html>
