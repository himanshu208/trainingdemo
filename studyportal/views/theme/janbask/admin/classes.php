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
				<div id="breadcrumb">
					<a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
					<a href="#" class="current">Manage Class</a>
				</div>
				<h1>Classes Running List</h1>
			</div>
			<div class="container-fluid">
				<a href="<?php	echo site_url('myadmin/add-new-class');	?>" class="btn btn-success">Add New Class</a>
				<hr>
				<h3>Classes</h3>
				<h4 style="color:green"><?php echo $this->session->flashdata('action_message'); ?></h4>
				<h4 style="color:red"><?php echo $this->session->flashdata('error_message'); ?></h4>
				<div class="row-fluid">
					
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Classes</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>Class ID</th>
                  <th>Class Name</th>
                  <th>Course Name</th>
                  <th>Batch Name</th>
                  <th>Trainer Name</th>
                  <th>Class Date</th>
                  <th>Class Time</th>
                  <th>Operations</th>
				  <th>Action</th>
                </tr>
              </thead>
              <tbody>

              <?php if(isset($live_class_arr) && !empty($live_class_arr))
						{
							foreach($live_class_arr as $live_class)
							{
				?>
								<tr class="users">
								  <td><input type="checkbox" /></td>
								  <td>JB<?php echo $live_class->id;?></td>
								  <td><?php echo $live_class->title;?></td>
								  <td><?php echo $live_class->course_name;?></td>
								  <td><?php echo $live_class->batch_name;?></td>
								  <td><?php echo $live_class->trainer_name;?></td>
								  <td><?php echo date("M,d,Y", strtotime($live_class->class_date));?></td>
								  <td><?php echo $live_class->time_zone." ".date("h.i", strtotime($live_class->class_time))." ".$live_class->am_pm;?></td>
								  <td>
								<?php
									if($live_class->status=='1')
									{
								?>
										<a href="<?php	echo site_url('myadmin/add-class-url/'.$live_class->id);	?>" class="btn btn-success">Start Class</a>
								<?php
									}
									if($live_class->status=='2')
									{
								?>
										<a href="<?php	echo site_url('myadmin/update-class-data/'.$live_class->id);	?>" class="btn btn-success">End Class</a>
								<?php
									}
									if($live_class->status=='3')
									{
								?>
										<a href="#" class="btn btn-success disabled">Complete</a>
								<?php
									}
								?>
								  </td>
								  <td>
								  <a href="<?php echo site_url('myadmin/edit-class/'.$live_class->id);?>"><i class="icon-pencil"></i></a>
								  <a href="javascript:;" class="delete_record" table_id="<?php echo $live_class->id;?>" table_name="live_class" table_id_name="id"><i class="icon-remove"></i></a></td>	
								</tr>
				<?php 		}	 
						}
						else
						{ 
				?>
							<tr><td colspan="9">No Record Found </td></tr>
				<?php } ?>
                
                
                
                
              </tbody>
                
                
                
                
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
