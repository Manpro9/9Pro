$(document).ready( function() {
	
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	$.ajax({
			dataType: 'JSON',
			type: 'POST',
			url: 'get_calendar_data',
			data:
			{
				'id' : 'id'
			},
			success: function(data){
				if (data.myEvents.length > 0) {
					var $cal = $('.responsive-calendar');

				 	var str = "";
					for(j=0;j<data.myEvents.length;j++){
					    if(j==0){
					        str += '"'+data.myEvents[j]+'":{}';
					    }else{
					        str += ',"'+data.myEvents[j]+'":{}'; 
					    } 
					}; 
					var dates= "{"+str+"}"; 

					$cal.responsiveCalendar({
						startFromSunday: true,
						events : JSON.parse(dates),
					});
					console.log(data)
				} else {
					var $cal = $('.responsive-calendar');
					$cal.responsiveCalendar({
						startFromSunday: true,
					});

				}
				
			},
			error: function(){
				console.log('error');
			}
		});

	
	
});