/*	Function for site url	*/
function getRootUrl(url) {
	return url.toString().replace(/^(.*\/\/[^\/?#]*).*$/,"$1")+"/";
}
//var site_url = getRootUrl(document.location);
var site_url = "http://localhost/trainingdemo/";
/*	Check Email Syntax	*/
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

/********************************
	Function to fetch states list based on country selected
*********************************/
function select_state_on_corporate()
{
	var country_id = $("#corp_enq_country").val();
	if(country_id=="0")
	{
		return false;
	}

	var postData = {"country_id":country_id};
	$.ajax({
		url:site_url+"common/Ajax_Function/fetchStateList",
		data:postData,
		type:"POST",
		success:function(response)
		{
			response = JSON.parse(response);
			var state_drop = '<option disabled selected value> -- Select State -- </option>';
			$.each(response,function(index,key)
			{
				state_drop+='<option value="'+key.state_id+'">'+key.state_name+'</option>';
			});
			$("#corp_enq_state").html(state_drop);
		},
		error:function()
		{
			alert("Error Occoured,Contact Admin");
		}
	});	
}