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
    <div id="breadcrumb"> <a href="<?php	echo site_url('myadmin');	?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Instructor Enquiries</a> </div>
    <h1>Instructor Enquiries</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon">
            <input type="checkbox" id="title-checkbox" name="title-checkbox" />
            </span>
            <h5>Enquiries</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email Id</th>
                  
                  <th>State</th>
                  <th>Country</th>
                  <th>Technical Experience</th>
                  <th>Expertise </th>
                  <th>Cover Letter </th>
                  <th>Pin Code  </th>
                  <th>Resume  </th>
                  <th>Date</th>
                  <th>Action</th>
                  
                  
                </tr>
              </thead>
              <tbody>
                <?php 
			  	  foreach($list_arr as $list){?>
                <tr class="users">
                  <td><input type="checkbox" /></td>
                  <td><?php echo $list->name;?></td>
                  <td><?php echo $list->country_code."-".$list->mobile;?></td>
                  <td><?php echo $list->email;?></td>
                  
                   <td><?php echo $list->state_name;?></td>
                   <td><?php echo $list->country_name;?></td>
                   <td><?php echo $list->technical_expertise;?></td>
                   <td><?php echo $list->experience;?></td>
                   <td><?php echo $list->cover_letter;?></td>
                   <td><?php echo $list->pin_code;?></td>
                   <td><a href="<?php	echo site_url('assets/sitefiles/images/trainer/resume/'.$list->resume);	?>" target="_blank">Download</a></td>
                   <td><?php echo $list->create_date;?></td>
				   <td> <a href="javascript:;" class="delete_record" table_id="<?php echo $list->id;?>" table_name="corporate_enquiries" table_id_name="id"><i class="icon-remove"></i></a></td>
                  
                </tr>
			  <?php }?>
                
                
                
                
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
