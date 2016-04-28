$(document).on('click','.delete_artikel', function(){
	var id = $(this).attr('value');
	var $this = $(this);
	var that = this;

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	$.ajax({
		dataType: 'JSON',
		type: 'POST',
		url: 'content/delete',
		data:
		{
			'id' : id
		},
		success: function(data){
			alert('success');
			$(that).closest('a').fadeOut('slow', function(){$(that).closest('a').remove()})
			
		},
		error: function(){
			alert('error');
		}
	});

	//window.location.href='content/delete/'+ id +'/'+ kategori;
});

