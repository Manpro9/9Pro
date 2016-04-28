$(document).on('click','.delete_artikel', function(){
	// var id = $(this).attr('value');
	//var kategori = $('.content-header h1 span').text();

	$.ajax({
		dataType: 'JSON',
		type: 'POST',
		url: 'content/delete',
		data:
		{
			'id' : 'id'
		},
		success: function(data){
			alert('success');
		},
		error: function(){
			alert('error');
		}
	});

	//window.location.href='content/delete/'+ id +'/'+ kategori;
});

