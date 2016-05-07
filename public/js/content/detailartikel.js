$(document).on('click', '.ajax-comment', function(e) {
	var title = $('.detail-title').text();
	var name = $('.user-login').text();
	var message = $('.message-content').val();

	if (message != '') {
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});

		$.ajax({
			dataType: 'JSON',
			type: 'POST',
			url: 'comment',
			data:
			{
				'title' : title,
				'name' : $.trim(name),
				'message' : message,
			},
			beforeSend: function(){
				$('.message-content').val('');
				$('.comment-sign').removeClass('fa-share');
				$('.comment-sign').addClass('fa-spinner fa-pulse');
				$('.comment-word').text('Loading..');
			},
			success: function(data){
				if (data.status == 'success') {
					var returnHTML = '<article class="row comment-block">';
					returnHTML = returnHTML + '<div class="col-md-10 col-sm-10">';
					returnHTML = returnHTML + 	'<div class="panel panel-default arrow left">';
					returnHTML = returnHTML + 		'<div class="panel-body">';
					returnHTML = returnHTML + 			'<header class="text-left">';
					returnHTML = returnHTML + 				'<div class="comment-user"><i class="fa fa-user"></i> ';
					returnHTML = returnHTML + 					data.username;
					returnHTML = returnHTML +				'</div>';
					returnHTML = returnHTML + 				'<time class="comment-date"><i class="fa fa-clock-o"></i> ';
					returnHTML = returnHTML + 					data.date;
					returnHTML = returnHTML + 				'</time>';
					returnHTML = returnHTML + 			'</header>';
					returnHTML = returnHTML + 			'<div class="comment-post">';
					returnHTML = returnHTML + 				'<p>';
					returnHTML = returnHTML + 					data.message;
					returnHTML = returnHTML + 				'</p>';
					returnHTML = returnHTML + 			'</div>';
					returnHTML = returnHTML + 			'<p class="text-right"><a href="#" class="btn btn-default btn-sm"><i class="fa fa-reply"></i> reply</a></p>';
					returnHTML = returnHTML + 		'</div>';
					returnHTML = returnHTML + 	'</div>';
					returnHTML = returnHTML + '</div>';
					returnHTML = returnHTML + '</article>';

					$('.comment-block').first().before(returnHTML);
					$('.comment-sign').removeClass('fa-spinner fa-pulse');
					$('.comment-sign').addClass('fa-share');
					$('.comment-word').text('Komentari');
				}
			},
			error: function(){
				alert('error');
			}
		});
	}

	e.preventDefault();
})