<!DOCTYPE html>
<html lang="en">
<head>
        <title>JanBask Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap.min.css');	?>" />
		<link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/bootstrap-responsive.min.css');	?>" />
        <link rel="stylesheet" href="<?php	echo site_url('assets/admin/css/matrix-login.css');	?>" />
        <link href="<?php	echo site_url('assets/admin/font-awesome/css/font-awesome.css');	?>" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php	echo site_url('assets/css/custom.css');	?>">
    </head>
    <body>
        <div id="loginbox">            
            <?php	echo form_open("",array("id"=>"admin_login_form"));	?>
				 <div class="control-group normal_text"> <h3><img src="<?php	echo site_url('assets/admin/img/logo.png');	?>" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"></i></span>
							<?php	echo form_input(array("type"=>"text","placeholder"=>"Username","id"=>"login_name","name"=>"login_name"));	?>
                        </div>
						<div class="admin-validation-error" align="center" id="login_name_error"></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
							<?php	echo form_input(array("type"=>"password","placeholder"=>"Password","id"=>"login_pass","name"=>"login_pass"));	?>
                        </div>
						<div class="admin-validation-error" align="center" id="login_pass_error"></div>
                    </div>
                </div>
                <div class="form-actions" align="center">
                    
                    <span>
						<?php	echo form_submit(array("class"=>"btn btn-success","value"=>"LogIn"));	?>
					</span>
                </div>
				<div class="admin-validation-error" align="center" id="success_message"></div>
            <?php	echo form_close();	?>
            
        </div>
        
        <script src="<?php	echo site_url('assets/admin/js/jquery.min.js');	?>"></script>  
        <script src="<?php	echo site_url('assets/admin/js/matrix.login.js');	?>"></script> 
		<script type="text/javascript" src="<?php	echo site_url('assets/admin/custom/common_functions.js');	?>"></script>
		<script type="text/javascript" src="<?php	echo site_url('assets/admin/custom/custom_validations.js');	?>"></script>
    </body>

</html>
