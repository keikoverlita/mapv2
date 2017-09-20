$(function() {
	$('#upload_file').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url 			:'./Maps/upload_file/', 
			secureuri		:false,
			fileElementId	:'userfile1',
			dataType		: 'json',
			data			: {
				'PD_NAME'			: $('#PD_NAME').val(),            
			},
			success	: function (data, status)
			{
				alert(data.msg);
			}
		});
		return false;
	});
	$('#upload_file1').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url 			:'./Maps/upload_file1/', 
			secureuri		:false,
			fileElementId	:'userfile2',
			dataType		: 'json',
			data			: {
				'sto'	: $('#STO_DP').val(),
				'dp'	: $('#DP').val(),            
			},
			success	: function (data, status)
			{
				alert(data.msg);
			}
		});
		return false;
	});
});