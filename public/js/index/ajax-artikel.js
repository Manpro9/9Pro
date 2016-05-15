$(document).on('click', '.ajax-artikel', function(){

	$('.ajax-artikel').removeClass('active');
	$(this).addClass('active');

	// CSRF
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});


	var type = $(this).text().toLowerCase();
	// alert(type);

	$.ajax({
			type: "POST",
			data: {
				'type' : type,
			},
			dataType: "json",
			url: "index/artikel/ajax",
			success: function(data){
				$('.artikel-ajax').remove();
				$('#content-artikel-ajax').append(data.html);
				console.log('success');
			},
			error: function(data){
				console.log('a')
			}
		});
});