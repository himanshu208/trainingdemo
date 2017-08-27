/*Custom JS Validations*/

	/********************************
			Validation for Registration Form
	*********************************/
$("#reg_mobile").on("keypress",function(evt){
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){
		//$("#reg_mobile_error").html("Enter Numbers Only");
		return false;			
	}
	return true;
});

$("#registeration_form").off();
$("#registeration_form").on("submit",function(event){
	event.preventDefault();
	
	$("#reg_name_error").html("");
	$("#country_code_error").html("");
	$("#reg_mobile_error").html("");
	$("#reg_course_error").html("");
	$("#reg_email_error").html("");
	$("#reg_con_email_error").html("");
	$("#reg_pass_error").html("");
	$("#reg_con_pass_error").html("");
	$("#reg_tandc_error").html("");
	
	var reg_name = $("#reg_name").val();
	var country_code = $("#country_code").val();
	var reg_mobile = $("#reg_mobile").val();
	var reg_course = $("#reg_course").val();
	var reg_email = $("#reg_email").val();
	var reg_con_email = $("#reg_con_email").val();
	var reg_password = $("#reg_password").val();
	var reg_con_password = $("#reg_con_password").val();
	if(reg_name=="")
	{
		$("#reg_name_error").html("Name Can't be empty");
		return false;
	}
	if(country_code=="")
	{
		$("#country_code_error").html("Country Can't be empty");
		return false;
	}	
	if(reg_mobile=="")
	{
		$("#reg_mobile_error").html("Number Can't be empty");
		return false;
	}
	if(reg_mobile.length!=10)
	{
		$("#reg_mobile_error").html("Enter valid number.");
		return false;
	}	
	if(reg_course=="0")
	{
		$("#reg_course_error").html("Course Can't be empty");
		return false;
	}
	if(reg_email=="")
	{
		$("#reg_email_error").html("Email Can't be empty");
		return false;
	}
	if(!IsEmail(reg_email))
	{
		$("#reg_email_error").html("Enter Valid Email");
		return false;
	}
	if(reg_con_email=="")
	{
		$("#reg_con_email_error").html("Email Can't be empty");
		return false;
	}
	if(!IsEmail(reg_con_email))
	{
		$("#reg_con_email_error").html("Enter Valid Email");
		return false;
	}
	if(reg_email!=reg_con_email)
	{
		$("#reg_con_email_error").html("Email & Confirm Email are not same");
		return false;
	}
	if(reg_password=="")
	{
		$("#reg_pass_error").html("Password Can't be empty");
		return false;
	}
	var pass_reg=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
	if(!(pass_reg.test(reg_password)))
	{
		$("#reg_pass_error").html("Enter valid password");
		return false;		
	}
	if(reg_con_password=="")
	{
		$("#reg_con_pass_error").html("Confirm Password Can't be empty");
		return false;
	}
	if(reg_password!=reg_con_password)
	{
		$("#reg_con_pass_error").html("Password & Confirm Password are not same");
		return false;
	}
	if($("#reg_tandc").prop("checked")==false)
	{
		$("#reg_tandc_error").html("Accept Terms & Conditions");
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Register/checkExistingUser",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.mail_exist=="0")
			{
				$("#show_loader").css({display:"none"});
				window.location.href=site_url+"register-sucessfull";
			}
			if(response.mail_exist=="1")
			{
				$("#show_loader").css({display:"none"});
				$("#success_msg").html("User Already Exist,Use Forget Password to recover your password");
				$('form')[0].reset(); 
			}
		},
		error:function()
		{
			$("#show_loader").css({display:"none"});
			$("#success_msg").html("Error Occured,Contact Admin");
			$('form')[0].reset(); 
		}
	});	
});

	/********************************
		Validation for Forget Password Form
	*********************************/
$("#forget_pass_form").off();
$("#forget_pass_form").on("submit",function(event){
	event.preventDefault();
	
	$("#success_message").html("");
	$("#forget_email_error").html("");
	var forget_pass_email = $("#forget_pass_email").val();
	if(forget_pass_email=="")
	{
		$("#forget_email_error").html("Email Can't be empty");
		return false;
	}
	if(!IsEmail(forget_pass_email))
	{
		$("#forget_email_error").html("Enter Valid Email");
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#success_message").html("Please Wait...");
	$.ajax({
		url:site_url+"Forget_Password/checkExistingUser",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.mail_exist=="1")
			{
				$("#success_message").html("An email has been sent to you for your PW reset action; please follow the instructions");
				$('form')[0].reset(); 
			}
			if(response.mail_exist=="0")
			{
				$("#success_message").html("No Record Found with this email");
				$('form')[0].reset(); 
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
		Validation for Password Reset Form
	*********************************/
$("#pass_reset_form").off();
$("#pass_reset_form").on("submit",function(event){
	event.preventDefault();
	
	$("#success_message").html("");
	$("#reset_pass_error").html("");
	$("#reset_con_pass_error").html("");
	var reset_pass = $("#reset_pass").val();
	var reset_con_pass = $("#reset_con_pass").val();
	if(reset_pass=="")
	{
		$("#reset_pass_error").html("Password Can't be empty");
		return false;
	}
	if(reset_con_pass=="")
	{
		$("#reset_con_pass_error").html("Confirm Password Can't be empty");
		return false;
	}
	if(reset_pass!=reset_con_pass)
	{
		$("#reset_con_pass_error").html("Password and Confirm Password are not same");
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#success_message").html("Please Wait...");
	$.ajax({
		url:site_url+"Forget_Password/update_user_password",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.pass_update=="1")
			{
				$("#success_message").html("Password updated Successfully,Login with new password");
				$('form')[0].reset(); 
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
		Validation for Login Form
	*********************************/
$("#login_form").off();
$("#login_form").on("submit",function(event){
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
		url:site_url+"Login/checkLogin",
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
						var jbStudentEnroll=localStorage.getItem('jbStudentEnroll');
						if(typeof(jbStudentEnroll)=="string")
						{
							jbStudentEnroll=JSON.parse(jbStudentEnroll);
							localStorage.removeItem('jbStudentEnroll');
							window.location.href=jbStudentEnroll.course_url;
						}
						else
						{
							window.location.href = site_url+"courses";
						}
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
			Validation for Payment Form
	*********************************/
$("#payment_form").off();
$("#payment_form").on("submit",function(event){
	event.preventDefault();
	
	$("#payment_tandc_error").html("");

	var login_name = $("#login_name").val();
	var login_pass = $("#login_pass").val();
	
	if($("#payment_tandc").prop("checked")==false)
	{
		$("#payment_tandc_error").html("Accept Terms & Conditions");
		return false;
	}
	

	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"Checkout/processOrder",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			// response=JSON.parse(response);
			console.log(typeof(response));
			console.log(response);
			response = JSON.parse(response);
			if(response.order_created=="1")
			{
				console.log(site_url+response.redirect);
				window.location.href = site_url+response.redirect;
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
		Validation for User Rating Form
	*********************************/
$("#clientRatingForm").off();
$("#clientRatingForm").on("submit",function(event) {
	event.preventDefault();
	
	$("#clientRatingCommentError").html("");
	$("#clientRatingStarError").html("");
	$("#clientRatingSuccessMessage").html("");
	
	
	var course_id = $("#course_id").val();
	var user_id = $("#user_id").val();

	var comments = $("#clientRatingComment").val();
	if(comments=="") {
		$("#clientRatingCommentError").html("Enter Comments");
		$("#clientRatingComment").focus();
		return false;
	}
	
	
	var stars = $("input[name='clientRatingStar']:checked").val();
	if(stars=="" || stars=="undefined" || stars==undefined || stars=="null"  || stars=="undefined") {
		$("#clientRatingStarError").html("Rating Required");
		return false;
	}
	
	var post_data = {"user_id":user_id,"course_id":course_id,"comments":comments,"stars":stars};

	$("#clientRatingSuccessMessage").html("Please Wait.....");
	
	$.ajax({
		url:site_url+"Home/submitRating",
		data:post_data,
		type:"POST",
		success:function(response)
		{
			$('#clientRatingForm')[0].reset(); 
			response = JSON.parse(response);
			console.log(response);
			if (response.rating=="1") {
				$("#clientRatingSuccessMessage").html("Feedback Received Successfully");
			} else {
				$("#clientRatingSuccessMessage").html("Try again later");
			}
		},
		error:function()
		{
			$("#clientRatingSuccessMessage").html("");
			alert("Error,Try Again Later");
			$('#clientRatingForm')[0].reset(); 
		}
	});
});