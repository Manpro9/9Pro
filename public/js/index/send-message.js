$(document).on('click', '.send-message-ajax', function(e) {
	var email = $('.ajax-send-message-email').val();
	var message = $('.send-message-message').val();

	if (email == '') {
		alert('Email harus diisi!');
		e.preventDefault();
	}
	if (message == '') {
		alert('Message harus diisi!');
		e.preventDefault();
	}
	if (email != '' && message != '') {
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});

		$.ajax({
				dataType: 'JSON',
				type: 'POST',
				url: 'send/message',
				data:
				{
					'email' : email,
					'message' : message,
				},
				beforeSend: function() {
					$('.send-message-ajax').val('Please wait...');
				},
				success: function(data){
					$('.send-message-ajax').val('KIRIM');
					// console.log('success');	
				},
				error: function(){
					// console.log('error');
				}
			});
	}

	e.preventDefault();
})