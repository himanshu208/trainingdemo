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
    <div id="breadcrumb"> <a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Ratings</a> </div>
    <h1>Ratings</h1>
	<a href="<?php	echo site_url('myadmin/add-rating');	?>" class="btn btn-success" style="margin-left: 20px;">Add New Rating</a>
	<h4 style="color:green"><?php echo $this->session->flashdata('action_message'); ?></h4>
	<h4 style="color:red"><?php echo $this->session->flashdata('error_message'); ?></h4>	
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> 
            <h5>Ratings</h5>
			
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>User Name</th>
                  <th>User Email</th>
                  <th>Course</th>
                  <th>Comments</th>
                  <th>Star Rating</th>
                  <th>Date Created</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
					<?php 
						if (count($rating_arr) > 0) {
							foreach($rating_arr as $rating){
					?>
								<tr class="users">
									<td><?php echo $rating->user_name;?></td>
									<td><?php echo $rating->user_email;?></td>
									<td><?php echo $rating->course_name;?></td>
									<td><?php echo $rating->comments;?></td>
									<td><?php echo $rating->stars;?></td>
									<td><?php echo $rating->create_date;?></td>
									<td> <a href="javascript:;" class="delete_record" table_id="<?php echo $rating->id;?>" table_name="jb_rating" table_id_name="id"><i class="icon-remove"></i></a> &nbsp;  <a href="<?php echo site_url("myadmin/edit-rating/".$rating->id);?>" ><i class="icon-pencil"></i></a></td>
								</tr>
					<?php 
							}
						} else {
					?>
								<tr class="users">
									<td>No Record Found</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
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
