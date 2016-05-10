var month = null;
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
					// console.log(data)
				} else {
					var $cal = $('.responsive-calendar');
					$cal.responsiveCalendar({
						startFromSunday: true,
					});

				}

				month = $('.thisMonth').text();
				month = month.toLowerCase();
				month = get_number_of_month(month);

				year = $('.thisYear').text();

				get_agenda_data(month, year);
				
			},
			error: function(){
				console.log('error');
			}
		});
		// var month = $('.controls').find('[data-head-month]').find('span');

		
		// get_agenda_data('06');
});

$(document).on('click', '.change-month', function(e) {
	month = $('.thisMonth').text();
	month = month.toLowerCase();
	month = get_number_of_month(month);

	year = $('.thisYear').text();

	get_agenda_data(month, year);
})


function get_agenda_data(bulan, tahun) {
	$('.month-agenda-ajax').empty()
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	$.ajax({
			dataType: 'JSON',
			type: 'POST',
			url: 'get_daftar_agenda_data',
			data: {
				'bulan' : bulan,
				'tahun' : tahun,
			},
			success: function(response){
				var bulanSekarang = get_name_of_month(bulan);
				$('.active-month-ajax').text(bulanSekarang);
				// jika data == kosong
				if (response.data != '[]') {
					

					var obj = jQuery.parseJSON(response.data);
					$.each(obj, function(k, v) {
						if (v.start != v.end) {
							var returnHTML = '<p style="padding-left:20px; color:maroon;"><b>' + v.start.substr(v.start.length - 2);
							returnHTML = returnHTML + ' - ' + v.end.substr(v.start.length - 2) + ' ' + bulanSekarang + ' ' + v.start.substr(0,4) +'</b></p>';
							returnHTML = returnHTML + '<h5 style="padding-left:40px;">' + v.title + '</h5></br>';
							$('.month-agenda-ajax').append(returnHTML)
						} else {
							var returnHTML = '<p style="padding-left:20px; color:maroon;"><b>' + v.start.substr(v.start.length - 2) + ' ';
							returnHTML = returnHTML + bulanSekarang + ' ' + v.start.substr(0,4) +'</b></p>';
							returnHTML = returnHTML + '<h5 style="padding-left:40px;">' + v.title + '</h5></br>';
							$('.month-agenda-ajax').append(returnHTML);
						}
			        });
				} else{
					$('.active-month-ajax').text(bulanSekarang);
					var returnHTML = '<p style="padding-left:20px; color:maroon;"><b>Tidak ada agenda untuk bulan ini.</b></p>';
					$('.month-agenda-ajax').append(returnHTML);
				}
			},
			error: function(){
				console.log('error');
			}
		});
}

function get_number_of_month(month) {
	switch(month) {
		case 'januari': 
			return '01';
			break;
		case 'februari': 
			return '02';
			break;
		case 'maret': 
			return '03';
			break;
		case 'april': 
			return '04';
			break;
		case 'mei': 
			return '05';
			break;
		case 'juni': 
			return '06';
			break;
		case 'juli': 
			return '07';
			break;
		case 'agustus': 
			return '08';
			break;
		case 'september': 
			return '09';
			break;
		case 'oktober': 
			return '10';
			break;
		case 'november': 
			return '11';
			break;
		case 'desember': 
			return '12';
			break;
		default:
		var d = new Date();
		var n = d.getMonth() + 1;
		if (n >= 1 && n <= 9) {
			value = '0' + n;
			return value;
		} else
			return n;
	}
}

function get_name_of_month(month) {
	switch(month) {
		case '01': 
			return 'Januari';
			break;
		case '02': 
			return 'Februari';
			break;
		case '03': 
			return 'Maret';
			break;
		case '04': 
			return 'April';
			break;
		case '05': 
			return 'Mei';
			break;
		case '06': 
			return 'Juni';
			break;
		case '07': 
			return 'Juli';
			break;
		case '08': 
			return 'Agustus';
			break;
		case '09': 
			return 'September';
			break;
		case '10': 
			return 'Oktober';
			break;
		case '11': 
			return 'November';
			break;
		case '12': 
			return 'Desember';
			break;
		default:
		var d = new Date();
		var n = d.getMonth() + 1;
		if (n >= 1 && n <= 9) {
			value = '0' + n;
			return value;
		} else
			return n;
	}
}