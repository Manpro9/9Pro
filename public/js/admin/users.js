$(document).on('click', '.content-users', function(e){
	var role = $(this).attr('role');
	var id = $(this).val();

	if (role == 'edit') {
		if(confirm('Are you sure?'))
			window.location.href = 'edit/user/' + id;
	} else if (role == 'delete') {
		if(confirm('Are you sure?'))
			window.location.href = 'delete/' + id;
	}

})

// edit
$(document).on('click', '.submit', function(e){
	if ($('#document-name').val() == '') {
		alert('Nama User Wajib Diisi!');
		e.preventDefault();
	}
	
	if ($('#document-username').val() == '') {
		alert('Username Wajib Diisi!');
		e.preventDefault();
	}

	if ($('#document-email').val() == '') {
		alert('Email Wajib Diisi!');
		e.preventDefault();
	}
})