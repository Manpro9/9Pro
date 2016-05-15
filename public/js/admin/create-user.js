$(document).on('click', '.create-user', function(e) {
	var name = $('#document-name').val();
	var username = $('#document-username').val();
	var email = $('#document-email').val();
	var password = $('#document-password').val();
	
	if (name == '') {
		alert('Nama Harus diisi!');
		e.preventDefault();
	}
	if (username == '') {
		alert('Username Harus diisi!');
		e.preventDefault();
	}
	if (email == '') {
		alert('Email Harus diisi!');
		e.preventDefault();
	}
	if (password == '') {
		alert('Password Harus diisi!');
		e.preventDefault();
	}
})