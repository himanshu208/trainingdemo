$(".login_enroll_button").on('click',function(){
	var batch_id = $(this).attr('batch_id');
	var course_id = $(this).attr('course_id');
	
	var batch_info = {"batch_id":batch_id,"course_id":course_id};
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
$(".enroll_button").on('click',function(){
	var course_url=$(this).attr('course_url');
	var course_id=$(this).attr('course_id');
	var enrol_arr={'course_url':course_url,'course_id':course_id};
	localStorage.setItem('jbStudentEnroll',JSON.stringify(enrol_arr));
	window.location.href = site_url+'login';
	
});