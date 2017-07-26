/********************************
	Function to fetch batch list based on course selected while creating new class
*********************************/
function selectBatchesForClass()
{
	var course_id = $("#class_course_selected").val();
	if(course_id=="0")
	{
		return false;
	}

	var postData = {"course_id":course_id};
	$.ajax({
		url:site_url+"Admin_Controller/fetchbatchForClass",
		data:postData,
		type:"POST",
		success:function(response)
		{
			response = JSON.parse(response);
			var batch_selected = "<option value='0'>Select Batch</option>";
			 $.each(response,function(index,key)
			 {
				batch_selected+='<option value="'+key.id+'">'+key.name+'</option>';
			 });
			$("#class_batch_selected").html(batch_selected);
		},
		error:function()
		{
			alert("Error Occoured,Contact Admin");
		}
	});	
}
