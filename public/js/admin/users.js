$(document).on('click', '.content-users', function(e){
	var role = $(this).attr('role');
	var id = $(this).val();

	if (role == 'delete')
		if(confirm('Are you sure?'))
			window.location.href = 'delete/' + id;
})