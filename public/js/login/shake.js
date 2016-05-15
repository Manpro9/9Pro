$(document).on('click', '#login_button', function() {

	// CSRF
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	var email = $("#email").val();
	var password = $("#password").val();

	if  (email == '' && password == '') {
		$("#login").effect("shake");
		$("#message").html('***Email & Password must be filled***');
	}
	/* If E-mail and Password do not match then shake Div having id maindiv and show the message "***Invalid email or password***" in the div having id message.*/
	else if (email == '' || password == '') {
		$("#login").effect("shake");
		$("#message").html('***Invalid email or password***');
	}
})