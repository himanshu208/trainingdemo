/********************************
	Function for Site Url
*********************************/
function getRootUrl(url) {
	return url.toString().replace(/^(.*\/\/[^\/?#]*).*$/,"$1")+"/";
}
var site_url = getRootUrl(document.location);

/********************************
	Check Email Syntax
*********************************/
function IsEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

/********************************
	Function to fetch states list based on country selected
*********************************/
function select_state()
{
	var country_id = $("#country_selected").val();
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
			var state_drop = '';
			$.each(response,function(index,key)
			{
				state_drop+='<option value="'+key.state_id+'">'+key.state_name+'</option>';
			});
			$("#state_selected").html(state_drop);
		},
		error:function()
		{
			alert("Error Occoured,Contact Admin");
		}
	});	
}

/********************************
	Function to fetch City list based on State selected
*********************************/
function select_city()
{
	var state_id = $("#state_selected").val();
	if(state_id=="0")
	{
		return false;
	}

	var postData = {"state_id":state_id};
	$.ajax({
		url:site_url+"common/Ajax_Function/fetchCityList",
		data:postData,
		type:"POST",
		success:function(response)
		{
			response = JSON.parse(response);
			var city_drop = '';
			$.each(response,function(index,key)
			{
				city_drop+='<option value="'+key.city_id+'">'+key.city_name+'</option>';
			});
			$("#city_selected").html(city_drop);
		},
		error:function()
		{
			alert("Error Occoured,Contact Admin");
		}
	});	
}