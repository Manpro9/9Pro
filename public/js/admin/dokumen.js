$(document).on('click', '.document-role', function(e) {
	var role = $(this).attr('role');
	var id = $(this).val();

	console.log(role);
	console.log(id);

	if (role == 'delete') {
		if(confirm('Do you want to delete this document?')) {
			window.location.href = 'delete/document/' + id;
		}
	} else if (role == 're_upload') {
		window.location.href = 'reupload/document/' + id;
	}
})