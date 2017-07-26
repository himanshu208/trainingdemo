/*Custom JS Validations*/

	/********************************
		Validation for Update Profile Form
	*********************************/
$("#profile_mobile").on("keypress",function(evt){
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){
		$("#profile_mobile_error").html("Enter Numbers Only");
		return false;			
	}
	return true;
});

$("#profile_pincode").on("keypress",function(evt){
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=43 && charCode!=40 && charCode!=41 ){
		$("#profile_pincode_error").html("Enter Numbers Only");
		return false;			
	}
	return true;
});

$("#profile_image").on("change",function(){
	// if($('#profile_image').val() != '')
	// {
		var file = $('#profile_image')[0].files[0];
		var fileName = file.name;
		 var extension = fileName.substr((fileName.lastIndexOf('.') +1));

		var allowedExt = new Array("JPEG", "jpeg", "png", "PNG", "jpg", "JPG");
		if(allowedExt.indexOf(extension) <0)
		{
			$("#profile_image_error").html("Please upload only jpg,jpeg,png image");
			$("#profile_image").val('');
		}
	// }
});
$("#profile_update_form").off();
$("#profile_update_form").on("submit",function(event){
	event.preventDefault();

	$("#profile_name_error").html("");
	$("#profile_email_error").html("");
	$("#profile_mobile_error").html("");
	$("#profile_address_error").html("");
	$("#profile_country_error").html("");
	$("#profile_state_error").html("");
	$("#profile_city_error").html("");
	$("#profile_pincode_error").html("");
	$("#profile_image_error").html("");
	
	var profile_name = $("#profile_name").val();
	var profile_email = $("#profile_email").val();
	var profile_mobile = $("#profile_mobile").val();
	var profile_address = $("#profile_address").val();
	var country_selected = $("#country_selected").val();
	var state_selected = $("#state_selected").val();
	var city_selected = $("#city_selected").val();
	var profile_pincode = $("#profile_pincode").val();
	if(profile_name=="")
	{
		$("#profile_name_error").html("Name Can't be empty");
		$("#profile_name").focus();
		return false;
	}
	if(profile_email=="")
	{
		$("#profile_email_error").html("Email Can't be empty");
		$("#profile_email").focus();
		return false;
	}
	if(!IsEmail(profile_email))
	{
		$("#profile_email_error").html("Enter Valid Email");
		$("#profile_email").focus();
		return false;
	}
	if(profile_mobile=="")
	{
		$("#profile_mobile_error").html("Number Can't be empty");
		$("#profile_mobile").focus();
		return false;
	}
	if(profile_address=="")
	{
		$("#profile_address_error").html("Address Can't be empty");
		$("#profile_address").focus();
		return false;
	}
	if(country_selected=="" || country_selected=="0")
	{
		$("#profile_country_error").html("Country Can't be empty");
		$("#country_selected").focus();
		return false;
	}
	if(state_selected=="" || state_selected=="0")
	{
		$("#profile_state_error").html("State Can't be empty");
		$("#state_selected").focus();
		return false;
	}
	if(city_selected=="" || city_selected=="0")
	{
		$("#profile_city_error").html("City Can't be empty");
		$("#city_selected").focus();
		return false;
	}
	if(profile_pincode=="")
	{
		$("#profile_pincode_error").html("Pin Code Can't be empty");
		$("#profile_pincode").focus();
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#show_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"User/updateProfile",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.update_status=="1")
			{
				window.location.reload();
			}
			if(response.update_status=="0")
			{
				window.location.reload();
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
	Validation for Update Pasword on Profile Page
*********************************/
$("#profile_pass_form").off();
$("#profile_pass_form").on("submit",function(event){
	event.preventDefault();

	$("#profile_current_pass_error").html("");
	$("#profile_new_pass_error").html("");
	$("#profile_con_new_pass_error").html("");
	
	var profile_current_pass = $("#profile_current_pass").val();
	var profile_new_pass = $("#profile_new_pass").val();
	var profile_con_new_pass = $("#profile_con_new_pass").val();
	
	if(profile_current_pass=="")
	{
		$("#profile_current_pass_error").html("Enter Current Password");
		$("#profile_current_pass").focus();
		return false;
	}
	if(profile_new_pass=="")
	{
		$("#profile_new_pass_error").html("Enter New Password");
		$("#profile_new_pass").focus();
		return false;
	}
	var pass_reg=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
	if(!(pass_reg.test(profile_new_pass)))
	{
		$("#profile_new_pass_error").html("Enter valid password");
		$("#profile_new_pass").focus();
		return false;	
	}	
	if(profile_con_new_pass=="")
	{
		$("#profile_con_new_pass_error").html("Enter Confirm Password");
		$("#profile_con_new_pass").focus();
		return false;
	}
	if(profile_new_pass!=profile_con_new_pass)
	{
		$("#profile_con_new_pass_error").html("New Password and Confirm Password are not same");
		$("#profile_con_new_pass").focus();
		return false;
	}
	
	var form = $(this)[0]; 
	var formData = new FormData(form);
	$("#change_pass_loader").css({position:"absolute",display:"block"});
	$.ajax({
		url:site_url+"common/Ajax_Function/updateProfilePass",
		data:formData,
		type:"POST",
		processData: false,
		contentType: false,
		success:function(response)
		{
			response=JSON.parse(response);
			if(response.pass_match=="1")
			{
				window.location.reload();
			}
			if(response.pass_match=="0")
			{
				$("#change_pass_loader").css({display:"none"});
				$('form')[0].reset(); 
				alert("Incorrect Current Password");
			}
		},
		error:function()
		{
			$("#change_pass_loader").css({display:"none"});
			alert("Error,Try Again Later");
			$('form')[0].reset(); 
		}
	});	
	
});