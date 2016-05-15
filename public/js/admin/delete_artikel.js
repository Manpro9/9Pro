$(document).on('click','.delete_artikel', function(e){
	var id = $(this).attr('value');
	var $this = $(this);
	var that = this;

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	if(confirm("Are you sure?")) {
		e.preventDefault();
		$.ajax({
			dataType: 'JSON',
			type: 'POST',
			url: 'content/delete',
			data:
			{
				'id' : id
			},
			success: function(data){
				alert(data);
				$(that).closest('a').fadeOut('slow', function(){$(that).closest('a').remove()})
				
			},
			error: function(){
				console.log('error');
			}
		});

		//window.location.href='content/delete/'+ id +'/'+ kategori;
	}
});


// edit artikel
$(document).on('click', '.edit_artikel', function(e){

	var from =  $(this).attr('from');
    var role = $(this).attr('role');
    var id = $(this).val();
    
    if (role == 'edit')
        if (confirm('Are you sure?'))
            window.location.href = from + '/edit/' + id;

    e.preventDefault();
})

