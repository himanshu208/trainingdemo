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
    <div id="breadcrumb"> <a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Trainers List</a> </div>
    <h1>Trainers List</h1>
  </div>
  <div class="container-fluid">
    <a href="<?php	echo site_url('myadmin/add-new-trainer');	?>" class="btn btn-success">Add New Trainer</a>
				<hr>
				<h3>Trainers</h3>
				<h4 style="color:green"><?php echo $this->session->flashdata('action_message'); ?></h4>
				<h4 style="color:red"><?php echo $this->session->flashdata('error_message'); ?></h4>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Trainers</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>ID</th>
                  <th>Trainer Name</th>
                  <th>Course Associated</th>
                  <th>Joining Date</th>
                  <th>Email Id</th>
                  <th>Contact No</th>
                  <th>Location</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
				<?php if(isset($trainer_arr) && !empty($trainer_arr))
						{
							foreach($trainer_arr as $trainer)
							{
				?>
								<tr class="users">
								  <td><input type="checkbox" /></td>
								  <td>JB<?php echo $trainer->id;?></td>
								  <td><?php echo $trainer->name;?></td>
								  <td><?php echo $trainer->course_name;?></td>
								  <td><?php echo date("M,d,Y", strtotime($trainer->join_date));?></td>
								  <td><?php echo $trainer->email;?></td>
								  <td><?php echo $trainer->mobile;?></td>
								  <td><?php echo $trainer->location;?></td>
								  <td>
								  <a href=""><i class="icon-pencil"></i></a>
								  <a href="javascript:;" class="delete_record" table_id="<?php echo $trainer->id;?>" table_name="trainer" table_id_name="id"><i class="icon-remove"></i></a></td>								  
								</tr>
				<?php 		}	 
						}
						else
						{ 
				?>
							<tr><td colspan="8"></td></tr>
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
		<script src="<?php	echo site_url('assets/admin/custom/common_functions.js');	?>"></script>
<script src="<?php	echo site_url('assets/admin/custom/custom_validations.js');	?>"></script>
</body>
</html>
