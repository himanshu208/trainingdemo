/*Custom JS Validations*/

	/********************************
			Validation for Admin Login Form
	*********************************/
$("#admin_login_form").off();
$("#admin_login_form").on("submit",function(event){
	event.preventDefault();
	
	$("#success_message").html("");
	$("#login_name_error").html("");
	$("#login_pass_error").html("");
	var login_name = $("#login_name").val();
	var login_pass = $("#login_pass").val();
	if(login_name=="")
	{
		$("#login_name_error").html("Email Can't be empty");
		return false;
	}
	if(!IsEmail(login_name))
	{
		$("#login_name_error").html("Enter Valid Email");
		return false;
	}
	if(login_pass=="")
	{
		$("#login_pass_error").html("Password Can't be empty");
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#success_message").html("Please Wait...");
	$.ajax({
		url:site_url+"Admin_Controller/checkLogin",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.mail_exist=="1")
			{
				if(response.valid_pass=="0")
				{
					$("#success_message").html("Incorrect Password");
				}
				if(response.valid_pass=="1")
				{
					if(response.email_verified=="1")
					{
						window.location.href = site_url+"myadmin/dashboard"
					}
					else
					{
						$("#success_message").html("Verify Email,before login");
					}
				}
			}
			else
			{
				$("#success_message").html("No Record found with this Email");
			}
		},
		error:function()
		{
			$("#success_message").html("Error Occured,Contact Admin");
			$('form')[0].reset(); 
		}
	});	
});


	/********************************
			Validation for Add New Course Form
	*********************************/
$("#course_image").on("change",function(){
	// if($('#profile_image').val() != '')
	// {
		var file = $('#course_image')[0].files[0];
		var fileName = file.name;
		 var extension = fileName.substr((fileName.lastIndexOf('.') +1));

		var allowedExt = new Array("JPEG", "jpeg", "png", "PNG", "jpg", "JPG");
		if(allowedExt.indexOf(extension) <0)
		{
			// alert('fhdk');
			$("#course_image_error").html("Please upload only jpg,jpeg,png image");
			$("#course_image").val('');
		}
	// }
});
$("#add_new_course_form").off();
$("#add_new_course_form").on("submit",function(event){
	event.preventDefault();
	
	$("#course_name_error").html("");
	$("#course_amount_error").html("");
	$("#course_currency_error").html("");
	$("#course_image_error").html("");
	
	var course_name = $("#course_name").val();
	var course_amount = $("#course_amount").val();
	var course_currency = $("#course_currency").val();
	
	if(course_name=="")
	{
		$("#course_name_error").html("Name Can't be empty");
		$("#course_name").focus();
		return false;
	}
	if(course_amount=="")
	{
		$("#course_amount_error").html("Amount Can't be empty");
		$("#course_amount").focus();
		return false;
	}
	if(course_currency=="")
	{
		$("#course_currency_error").html("Currency Can't be empty");
		$("#course_currency").focus();
		return false;
	}
	
	
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/insert_new_course",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.course_exist=='1')
			{
				window.location.href = site_url+"myadmin/add-new-course"
			}
			if(response.course_exist=='0')
			{
				window.location.href = site_url+"myadmin/courses"

			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});

$("#edit_course_form").off();
$("#edit_course_form").on("submit",function(event){
	event.preventDefault();
	
	$("#course_name_error").html("");
	$("#course_amount_error").html("");
	$("#course_currency_error").html("");
	$("#course_image_error").html("");
	
	var course_id = $("#course_id").val();
	var course_name = $("#course_name").val();
	var course_amount = $("#course_amount").val();
	var course_currency = $("#course_currency").val();
	
	if(course_name=="")
	{
		$("#course_name_error").html("Name Can't be empty");
		$("#course_name").focus();
		return false;
	}
	if(course_amount=="")
	{
		$("#course_amount_error").html("Amount Can't be empty");
		$("#course_amount").focus();
		return false;
	}
	if(course_currency=="")
	{
		$("#course_currency_error").html("Currency Can't be empty");
		$("#course_currency").focus();
		return false;
	}
	
	
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/update_course",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			
			if(response.course_exist=='1')
			{
				window.location.href = site_url+"myadmin/edit-course/"+course_id;
			}
			if(response.course_exist=='0')
			{
				window.location.href = site_url+"myadmin/courses"

			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});

	/********************************
			Validation for Add New Batch Form
	*********************************/
$("#add_new_batch_form").off();
$("#add_new_batch_form").on("submit",function(event){
	event.preventDefault();
	
	$("#batch_name_error").html("");
	$("#batch_course_error").html("");
	$("#batch_start_date_error").html("");
	$("#batch_end_date_error").html("");
	$("#batch_start_time_error").html("");
	$("#batch_end_time_error").html("");
	$("#batch_time_zone_error").html("");
	$("#batch_am_pm_error").html("");
	$("#batch_amount_error").html("");
	$("#batch_currency_error").html("");
	$("#batch_duration_period_error").html("");
	$("#batch_duration_in_error").html("");
	$("#batch_type_error").html("");
	$("#batch_front_status_error").html("");
	
	var batch_name = $("#batch_name").val();
	var batch_course_selected = $("#batch_course_selected").val();
	var batch_start_date = $("#batch_start_date").val();
	var batch_end_date = $("#batch_end_date").val();
	var batch_start_time = $("#batch_start_time").val();
	var batch_end_time = $("#batch_end_time").val();
	var batch_time_zone = $("#batch_time_zone").val();
	var batch_am_pm = $("#batch_am_pm").val();
	var batch_amount = $("#batch_amount").val();
	var batch_currency = $("#batch_currency").val();
	var batch_duration_period = $("#batch_duration_period").val();
	var batch_duration_in = $("#batch_duration_in").val();
	var batch_type = $("#batch_type").val();
	var batch_front_status = $("#batch_front_status").val();
	
	if(batch_name=="")
	{
		$("#batch_name_error").html("Name Can't be empty");
		$("#batch_name").focus();
		return false;
	}
	if(batch_course_selected==""  || batch_course_selected=="0")
	{
		$("#batch_course_error").html("Select Course");
		$("#batch_course_selected").focus();
		return false;
	}
	if(batch_start_date=="")
	{
		$("#batch_start_date_error").html("Start Date Can't be empty");
		$("#batch_start_date").focus();
		return false;
	}
	if(batch_end_date=="")
	{
		$("#batch_end_date_error").html("End date Can't be empty");
		$("#batch_end_date").focus();
		return false;
	}
	if(batch_start_time=="")
	{
		$("#batch_start_time_error").html("Start time Can't be empty");
		$("#batch_start_time").focus();
		return false;
	}
	if(batch_end_time=="")
	{
		$("#batch_end_time_error").html("End time Can't be empty");
		$("#batch_end_time").focus();
		return false;
	}
	if(batch_time_zone=="")
	{
		$("#batch_time_zone_error").html("Time zone Can't be empty");
		$("#batch_time_zone").focus();
		return false;
	}
	if(batch_am_pm=="" || batch_am_pm=="0")
	{
		$("#batch_am_pm_error").html("Select Value");
		$("#batch_am_pm").focus();
		return false;
	}
	if(batch_amount=="")
	{
		$("#batch_amount_error").html("Amount Can't be empty");
		$("#batch_amount").focus();
		return false;
	}
	if(batch_currency=="")
	{
		$("#batch_currency_error").html("Currency Can't be empty");
		$("#batch_currency").focus();
		return false;
	}
	if(batch_duration_period=="")
	{
		$("#batch_duration_period_error").html("Enter Duration");
		$("#batch_duration_period").focus();
		return false;
	}
	if(batch_duration_in=="")
	{
		$("#batch_duration_in_error").html("Enter Days/Weeks/Months");
		$("#batch_duration_in").focus();
		return false;
	}
	if(batch_type=="" || batch_type=="0")
	{
		$("#batch_type_error").html("Select Batch Type");
		$("#batch_type").focus();
		return false;
	}

	if(batch_front_status=="" || batch_front_status=="2")
	{
		$("#batch_front_status_error").html("Select Status");
		$("#batch_front_status").focus();
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/insert_new_batch",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			// response=JSON.parse(response);
			if(response==1)
			{
				window.location.href = site_url+"myadmin/batches"
			}
			else
			{
				window.location.href = site_url+"myadmin/batches"
			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});
	/******************************
	Validation for Update batch Form
	******************************/
$("#update_batch_form").off();
$("#update_batch_form").on("submit",function(event){
	event.preventDefault();
	
	$("#batch_name_error").html("");
	$("#batch_course_error").html("");
	$("#batch_start_date_error").html("");
	$("#batch_end_date_error").html("");
	$("#batch_start_time_error").html("");
	$("#batch_end_time_error").html("");
	$("#batch_time_zone_error").html("");
	$("#batch_am_pm_error").html("");
	$("#batch_amount_error").html("");
	$("#batch_currency_error").html("");
	$("#batch_duration_period_error").html("");
	$("#batch_duration_in_error").html("");
	$("#batch_type_error").html("");
	$("#batch_front_status_error").html("");
	
	var batch_id = $("#batch_id").val();
	var batch_name = $("#batch_name").val();
	var batch_course_selected = $("#batch_course_selected").val();
	var batch_start_date = $("#batch_start_date").val();
	var batch_end_date = $("#batch_end_date").val();
	var batch_start_time = $("#batch_start_time").val();
	var batch_end_time = $("#batch_end_time").val();
	var batch_time_zone = $("#batch_time_zone").val();
	var batch_am_pm = $("#batch_am_pm").val();
	var batch_amount = $("#batch_amount").val();
	var batch_currency = $("#batch_currency").val();
	var batch_duration_period = $("#batch_duration_period").val();
	var batch_duration_in = $("#batch_duration_in").val();
	var batch_type = $("#batch_type").val();
	var batch_front_status = $("#batch_front_status").val();
	
	if(batch_name=="")
	{
		$("#batch_name_error").html("Name Can't be empty");
		$("#batch_name").focus();
		return false;
	}
	if(batch_course_selected==""  || batch_course_selected=="0")
	{
		$("#batch_course_error").html("Select Course");
		$("#batch_course_selected").focus();
		return false;
	}
	if(batch_start_date=="")
	{
		$("#batch_start_date_error").html("Start Date Can't be empty");
		$("#batch_start_date").focus();
		return false;
	}
	if(batch_end_date=="")
	{
		$("#batch_end_date_error").html("End date Can't be empty");
		$("#batch_end_date").focus();
		return false;
	}
	if(batch_start_time=="")
	{
		$("#batch_start_time_error").html("Start time Can't be empty");
		$("#batch_start_time").focus();
		return false;
	}
	if(batch_end_time=="")
	{
		$("#batch_end_time_error").html("End time Can't be empty");
		$("#batch_end_time").focus();
		return false;
	}
	if(batch_time_zone=="")
	{
		$("#batch_time_zone_error").html("Time zone Can't be empty");
		$("#batch_time_zone").focus();
		return false;
	}
	if(batch_am_pm=="" || batch_am_pm=="0")
	{
		$("#batch_am_pm_error").html("Select Value");
		$("#batch_am_pm").focus();
		return false;
	}
	if(batch_amount=="")
	{
		$("#batch_amount_error").html("Amount Can't be empty");
		$("#batch_amount").focus();
		return false;
	}
	if(batch_currency=="")
	{
		$("#batch_currency_error").html("Currency Can't be empty");
		$("#batch_currency").focus();
		return false;
	}
	if(batch_duration_period=="")
	{
		$("#batch_duration_period_error").html("Enter Duration");
		$("#batch_duration_period").focus();
		return false;
	}
	if(batch_duration_in=="")
	{
		$("#batch_duration_in_error").html("Enter Days/Weeks/Months");
		$("#batch_duration_in").focus();
		return false;
	}
	if(batch_type=="" || batch_type=="0")
	{
		$("#batch_type_error").html("Select Batch Type");
		$("#batch_type").focus();
		return false;
	}

	if(batch_front_status=="" || batch_front_status=="2")
	{
		$("#batch_front_status_error").html("Select Status");
		$("#batch_front_status").focus();
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/update_batch",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			// response=JSON.parse(response);
			if(response==1)
			{
				window.location.href = site_url+"myadmin/batches"
			}
			else
			{
				window.location.href = site_url+"myadmin/batches"
			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});	

	/********************************
			Validation for Add New Class Form
	*********************************/
$("#class_image").on("change",function(){
	// if($('#profile_image').val() != '')
	// {
		var file = $('#class_image')[0].files[0];
		var fileName = file.name;
		 var extension = fileName.substr((fileName.lastIndexOf('.') +1));

		var allowedExt = new Array("JPEG", "jpeg", "png", "PNG", "jpg", "JPG");
		if(allowedExt.indexOf(extension) <0)
		{
			// alert('fhdk');
			$("#class_image_error").html("Please upload only jpg,jpeg,png image");
			$("#class_image").val('');
		}
	// }
});
$("#add_new_class_form").off();
$("#add_new_class_form").on("submit",function(event){
	event.preventDefault();
	
	$("#class_title_error").html("");
	$("#class_intro_error").html("");
	$("#class_course_error").html("");
	$("#class_batch_error").html("");
	$("#class_trainer_error").html("");
	$("#class_start_date_error").html("");
	$("#class_start_time_error").html("");
	$("#class_time_zone_error").html("");
	$("#class_am_pm_error").html("");
	$("#class_live_url_error").html("");
	$("#class_image_error").html("");

	
	var class_title = $("#class_title").val();
	var class_intro = $("#class_intro").val();
	var class_course_selected = $("#class_course_selected").val();
	var class_batch_selected = $("#class_batch_selected").val();
	var class_trainer_selected = $("#class_trainer_selected").val();
	var class_start_date = $("#class_start_date").val();
	var class_start_time = $("#class_start_time").val();
	var class_time_zone = $("#class_time_zone").val();
	var class_am_pm = $("#class_am_pm").val();
	var class_live_url = $("#class_live_url").val();
	
	
	if(class_title=="")
	{
		$("#class_title_error").html("Title Can't be empty");
		$("#class_title").focus();
		return false;
	}
	if(class_intro=="")
	{
		$("#class_intro_error").html("Intro Can't be empty");
		$("#class_intro").focus();
		return false;
	}
	if(class_course_selected==""  || class_course_selected=="0")
	{
		$("#class_course_error").html("Select Course");
		$("#class_course_selected").focus();
		return false;
	}
	if(class_batch_selected==""  || class_batch_selected=="0")
	{
		$("#class_batch_error").html("Select Course");
		$("#class_batch_selected").focus();
		return false;
	}
	if(class_trainer_selected==""  || class_trainer_selected=="0")
	{
		$("#class_trainer_error").html("Select Course");
		$("#class_trainer_selected").focus();
		return false;
	}
	if(class_start_date=="")
	{
		$("#class_start_date_error").html("Start Date Can't be empty");
		$("#class_start_date").focus();
		return false;
	}
	if(class_start_time=="")
	{
		$("#class_start_time_error").html("Start Time Can't be empty");
		$("#class_start_time").focus();
		return false;
	}
	if(class_time_zone=="")
	{
		$("#class_time_zone_error").html("Enter Time Zone");
		$("#class_time_zone").focus();
		return false;
	}
	if(class_am_pm=="" || class_am_pm=="0")
	{
		$("#class_am_pm_error").html("Select Value");
		$("#class_am_pm").focus();
		return false;
	}
	/*if(class_live_url=="")
	{
		$("#class_live_url_error").html("Enter URL");
		$("#class_live_url").focus();
		return false;
	}*/
	
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/insert_new_class",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			// response=JSON.parse(response);
			if(response==1)
			{
				window.location.href = site_url+"myadmin/classes"
			}
			else
			{
				window.location.href = site_url+"myadmin/classes"
			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});

	
$("#update_class_form").off();
$("#update_class_form").on("submit",function(event){
	event.preventDefault();
	
	$("#class_title_error").html("");
	$("#class_intro_error").html("");
	$("#class_course_error").html("");
	$("#class_batch_error").html("");
	$("#class_trainer_error").html("");
	$("#class_start_date_error").html("");
	$("#class_start_time_error").html("");
	$("#class_time_zone_error").html("");
	$("#class_am_pm_error").html("");
	$("#class_live_url_error").html("");
	$("#class_image_error").html("");

	
	var class_title = $("#class_title").val();
	var class_intro = $("#class_intro").val();
	var class_course_selected = $("#class_course_selected").val();
	var class_batch_selected = $("#class_batch_selected").val();
	var class_trainer_selected = $("#class_trainer_selected").val();
	var class_start_date = $("#class_start_date").val();
	var class_start_time = $("#class_start_time").val();
	var class_time_zone = $("#class_time_zone").val();
	var class_am_pm = $("#class_am_pm").val();
	var class_live_url = $("#class_live_url").val();
	
	
	if(class_title=="")
	{
		$("#class_title_error").html("Title Can't be empty");
		$("#class_title").focus();
		return false;
	}
	if(class_intro=="")
	{
		$("#class_intro_error").html("Intro Can't be empty");
		$("#class_intro").focus();
		return false;
	}
	if(class_course_selected==""  || class_course_selected=="0")
	{
		$("#class_course_error").html("Select Course");
		$("#class_course_selected").focus();
		return false;
	}
	if(class_batch_selected==""  || class_batch_selected=="0")
	{
		$("#class_batch_error").html("Select Course");
		$("#class_batch_selected").focus();
		return false;
	}
	if(class_trainer_selected==""  || class_trainer_selected=="0")
	{
		$("#class_trainer_error").html("Select Course");
		$("#class_trainer_selected").focus();
		return false;
	}
	if(class_start_date=="")
	{
		$("#class_start_date_error").html("Start Date Can't be empty");
		$("#class_start_date").focus();
		return false;
	}
	if(class_start_time=="")
	{
		$("#class_start_time_error").html("Start Time Can't be empty");
		$("#class_start_time").focus();
		return false;
	}
	if(class_time_zone=="")
	{
		$("#class_time_zone_error").html("Enter Time Zone");
		$("#class_time_zone").focus();
		return false;
	}
	if(class_am_pm=="" || class_am_pm=="0")
	{
		$("#class_am_pm_error").html("Select Value");
		$("#class_am_pm").focus();
		return false;
	}
	/*if(class_live_url=="")
	{
		$("#class_live_url_error").html("Enter URL");
		$("#class_live_url").focus();
		return false;
	}*/
	
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/submit_update_class",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			// response=JSON.parse(response);
			if(response==1)
			{
				window.location.href = site_url+"myadmin/classes"
			}
			else
			{
				window.location.href = site_url+"myadmin/classes"
			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});

	
	
	/********************************
			Validation for Add New Trainer Form
	*********************************/
$("#trainer_image").on("change",function(){
	// if($('#profile_image').val() != '')
	// {
		var file = $('#trainer_image')[0].files[0];
		var fileName = file.name;
		 var extension = fileName.substr((fileName.lastIndexOf('.') +1));

		var allowedExt = new Array("JPEG", "jpeg", "png", "PNG", "jpg", "JPG");
		if(allowedExt.indexOf(extension) <0)
		{
			// alert('fhdk');
			$("#trainer_image_error").html("Please upload only jpg,jpeg,png image");
			$("#trainer_image").val('');
		}
	// }
});
$("#add_new_trainer_form").off();
$("#add_new_trainer_form").on("submit",function(event){
	event.preventDefault();
	
	$("#trainer_name").html("");
	$("#trainer_image_error").html("");
	
	var trainer_name = $("#trainer_name").val();
	
	if(trainer_name=="")
	{
		$("#trainer_name_error").html("Name Can't be empty");
		$("#trainer_name").focus();
		return false;
	}
	
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/insert_new_trainer",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.trainer_exist=='1')
			{
				window.location.href = site_url+"myadmin/add-new-trainer"
			}
			if(response.trainer_exist=='0')
			{
				window.location.href = site_url+"myadmin/trainers"
			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});

$("#add_new_coupon").off();
$("#add_new_coupon").on("submit",function(event){
	event.preventDefault();
	
	$("#coupon_name_error").html("");
	$("#coupan_code_error").html("");
	$("#coupon_type_selected_error").html("");
	$("#coupon_course_selected_error").html("");
	$("#coupon_start_date_error").html("");
	$("#coupon_expiry_date_error").html("");
	$("#coupon_fixed_percentage_error").html("");
	$("#coupon_value_error").html("");
	$("#coupon_exists_error").html("");
	
	var coupon_name = $("#coupon_name").val();
	var coupan_code = $("#coupan_code").val();
	var coupon_type_selected = $("#coupon_type_selected").val();
	var coupon_course_selected = $("#coupon_course_selected").val();
	var coupon_start_date = $("#coupon_start_date").val();
	var coupon_expiry_date = $("#coupon_expiry_date").val();
	var coupon_fixed_percentage = $("#coupon_fixed_percentage").val();
	var coupon_value = $("#coupon_value").val();
	
	if(coupon_name=="")
	{
		$("#coupon_name_error").html("Name can't be empty");
		$("#coupon_name").focus();
		return false;
	}
	if(coupan_code=="")
	{
		$("#coupan_code_error").html("Coupan code can't be empty");
		$("#coupan_code").focus();
		return false;
	}	
	if(coupon_type_selected=="")
	{
		$("#coupon_type_selected_error").html("Select Coupan type.");
		$("#coupon_type_selected").focus();
		return false;
	}
	if(coupon_type_selected=="1")
	{
		if(coupon_course_selected=="0")
		{
			$("#coupon_course_selected_error").html("Select Course");
			$("#coupon_course_selected").focus();
			return false;	
		}
	
	}
	if(coupon_start_date=="")
	{
		$("#coupon_start_date_error").html("Enter Start date");
		$("#coupon_start_date").focus();
		return false;
	}
	if(coupon_expiry_date=="")
	{
		$("#coupon_expiry_date_error").html("Enter expiry date");
		$("#coupon_expiry_date").focus();
		return false;
	}
	if(coupon_fixed_percentage=="0")
	{
		$("#coupon_fixed_percentage_error").html("Select Coupan value type");
		$("#coupon_fixed_percentage").focus();
		return false;
	}
	if(coupon_value=="")
	{
		$("#coupon_value_error").html("Enter value");
		$("#coupon_value").focus();
		return false;
	}	

	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	if(coupon_course_selected!="0")
	{
		formData.append('course_id',coupon_course_selected);
	}	

	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/insert_new_coupan",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response=='1')
			{
				window.location.href = site_url+"myadmin/coupon"
			}
			else if(response=='2')
			{
				$("#show_loader").css({display:"none"});
				$("#coupon_exists_error").html("Coupon already exists").css('color','red');
			}
			
			
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			
		}
	});
	
	
});

/* Delete Record */
$(".delete_record").off();
$(".delete_record").on("click",function(event){
	event.preventDefault();
	var table_id=$(this).attr('table_id');
	var table_id_name=$(this).attr('table_id_name');
	var table_name=$(this).attr('table_name');
	var isConfirm=confirm("Are you sure to delete this record?");
    if(isConfirm)
	{
		var post_data={'table_id':table_id,'table_id_name':table_id_name,'table_name':table_name};
		$("#show_loader").css({position:"absolute",display:"block"});
		$.ajax({
			url:site_url+"Admin_Controller/commonDelete",
			data:post_data,
			type:"POST",
			success:function(response)
			{
				window.location.reload();
			},
			error:function()
			{
				$("#show_loader").css({display:"none"});
				alert("Error,Try Again Later");
				
			}
		});		
	}

});
/* Admin Menu Side bar class add*/
$(".admin_menu").off();
$(".admin_menu").on("click",function()
{
	$(".admin_menu").removeClass('active');
	$(this).addClass('active');
});

$("#admin_update_password").off();
$("#admin_update_password").on("submit",function(event){
	event.preventDefault();
	
	$("#password_error").html("");
	$("#confirm_password_error").html("");
	
	var password = $("#password").val();
	var confirm_password = $("#confirm_password").val();
	
	if(password=="")
	{
		$("#password_error").html("Password Can't be empty");
		$("#password").focus();
		return false;
	}
	if(confirm_password=="")
	{
		$("#confirm_password_error").html("Confirm Password  Can't be empty");
		$("#confirm_password").focus();
		return false;
	}	
	if(password!=confirm_password)
	{
		$("#confirm_password_error").html("Password don't match");
		$("#confirm_password").focus();
		return false;
	}	
	
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Admin_Controller/submit_updatepassword",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
				window.location.href = site_url+"myadmin/dashboard"

		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});


/*Start Enrolling user to a batch from admin*/
$("#admin_user_enrollment").off();
$("#admin_user_enrollment").on("submit",function(event) {
	event.preventDefault();
	
	$("#select_user_error").html("");
	$("#select_course_error").html("");
	$("#select_batch_error").html("");
	$("#select_adminuser_error").html("");
	
	var user_id = $("#user_selected").val();
	if(user_id=="0" || user_id=="") {
		$("#select_user_error").html("User Name Can't be empty");
		$("#user_selected").focus();
		return false;
	}
	
	var course_id = $("#class_course_selected").val();
	if(course_id=="0" || course_id=="") {
		$("#select_course_error").html("Course Can't be empty");
		$("#class_course_selected").focus();
		return false;
	}
	
	var batch_id = $("#class_batch_selected").val();
	if(batch_id=="0" || batch_id=="") {
		$("#select_batch_error").html("Batch Can't be empty");
		$("#class_batch_selected").focus();
		return false;
	}
	
	var admin_user = $("#student_enrolled_by").val();
	if(admin_user=="0" || admin_user=="") {
		$("#select_adminuser_error").html("Admin User Can't be empty");
		$("#student_enrolled_by").focus();
		return false;
	}
	
/*	var batch_amount = $("#batch_amount").val();
	if(batch_amount=="0" || batch_amount=="") {
		$("#select_batch_amount_error").html("Amount Can't be empty");
		$("#batch_amount").focus();
		return false;
	}	*/
	
	var batch_info = {"batch_id":batch_id,"course_id":course_id,"user_id":user_id,"admin_user":admin_user};
	$.ajax({
		url:site_url+'Checkout/enrollUser',
		data:batch_info,
		type:'POST',
		success:function(response)
		{
			response = JSON.parse(response);
			if(response.loged_in_user=='1')
			{
				window.location.href = site_url+response.redirect;
			}
		},
		error:function()
		{
			alert('Error Occured,Contact Admin');
		}
	});
});
/*End Enrolling user to a batch from admin*/


	/********************************
			Validation for Admin Rating Form
	*********************************/
$("#add_new_rating_form").off();
$("#add_new_rating_form").on("submit",function(event) {
	event.preventDefault();
	
	$("#ratingUserNameError").html("");
	$("#ratingCourseError").html("");
	$("#ratingCommentsError").html("");
	$("#ratingStarError").html("");
	
	var user_name = $("#ratingUserName").val();
	if(user_name=="") {
		$("#ratingUserNameError").html("Enter Name");
		$("#ratingUserName").focus();
		return false;
	}
	
	var course_id = $("#ratingCourse").val();
	if(course_id=="0" || course_id=="") {
		$("#ratingCourseError").html("Select Course");
		$("#ratingCourse").focus();
		return false;
	}
	
	var comments = $("#ratingComments").val();
	if(comments=="") {
		$("#ratingCommentsError").html("Enter Comments");
		$("#ratingComments").focus();
		return false;
	}
	
	var comments = $("#ratingComments").val();
	if(comments=="") {
		$("#ratingCommentsError").html("Enter Comments");
		$("#ratingComments").focus();
		return false;
	}
	
	var stars = $("input[name='ratingStar']").val();
	if(stars=="") {
		$("#ratingStarError").html("Rating Required");
		return false;
	}
	var form = $(this)[0]; 
	var formData = new FormData(form);
	
	$("#ratingImageError").html("Please Wait.....");
	
	$.ajax({
		url:site_url+"Admin_Controller/submitRating",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			window.location.href = site_url+"myadmin/ratings"

		},
		error:function()
		{
			$("#ratingImageError").html("");
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});

	/********************************
		Validation for Admin Editing Rating Form
	*********************************/
$("#edit_rating_form").off();
$("#edit_rating_form").on("submit",function(event) {
	event.preventDefault();
	
	$("#ratingUserNameError").html("");
	$("#ratingCourseError").html("");
	$("#ratingCommentsError").html("");
	$("#ratingStarError").html("");
	
	var user_name = $("#ratingUserName").val();
	if(user_name=="") {
		$("#ratingUserNameError").html("Enter Name");
		$("#ratingUserName").focus();
		return false;
	}
	
	var course_id = $("#ratingCourse").val();
	if(course_id=="0" || course_id=="") {
		$("#ratingCourseError").html("Select Course");
		$("#ratingCourse").focus();
		return false;
	}
	
	var comments = $("#ratingComments").val();
	if(comments=="") {
		$("#ratingCommentsError").html("Enter Comments");
		$("#ratingComments").focus();
		return false;
	}
	
	var comments = $("#ratingComments").val();
	if(comments=="") {
		$("#ratingCommentsError").html("Enter Comments");
		$("#ratingComments").focus();
		return false;
	}
	
	var stars = $("input[name='ratingStar']").val();
	if(stars=="") {
		$("#ratingStarError").html("Rating Required");
		return false;
	}
	var form = $(this)[0]; 
	var formData = new FormData(form);
	
	$("#ratingImageError").html("Please Wait.....");
	
	$.ajax({
		url:site_url+"Admin_Controller/submitEditedRating",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			window.location.href = site_url+"myadmin/ratings"
		},
		error:function()
		{
			$("#ratingImageError").html("");
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});
});