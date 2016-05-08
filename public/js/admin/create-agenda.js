$(document).on('click', '.create-agenda', function(e){
	if ($("#document-name").val() == ''){
		alert('Nama Agenda Harus Diisi!')
		e.preventDefault();
	}
	if ($("#document-desc").val() == ''){
		alert('Keterangan Harus Diisi!')
		e.preventDefault();
	}
	if ($("#dpd1").val() == ''){
		alert('Tanggal Mulai Harus Diisi!')
		e.preventDefault();
	}
	if ($("#dpd2").val() == ''){
		alert('Tanggal Berakhir Harus Diisi!')
		e.preventDefault();
	}
	if ($("#dpd2").val() < $("#dpd1").val()) {
		alert('Tanggal Mulai Harus Lebih Besar Dari Tanggal Berakhir!')
		e.preventDefault();
	}
	e.preventDefault();
})


//calendar
$(document).ready(function(){
	// validasi tanggal berakhir harus >= tanggal mulai
	var nowTemp = new Date();
	var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
	 
	var checkin = $('#dpd1').datepicker({
		format: 'dd/mm/yyyy',
	  onRender: function(date) {
	    return date.valueOf() < now.valueOf() ? 'disabled' : '';
	  }
	}).on('changeDate', function(ev) {
	  if (ev.date.valueOf() >= checkout.date.valueOf()) {
	    var newDate = new Date(ev.date)
	    newDate.setDate(newDate.getDate());
	    checkout.setValue(newDate);
	  }
	  checkin.hide();
	  $('#dpd2')[0].focus();
	}).data('datepicker');

	var checkout = $('#dpd2').datepicker({
		format: 'dd/mm/yyyy',
	  onRender: function(date) {
	    return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
	  }
	}).on('changeDate', function(ev) {
	  checkout.hide();
	}).data('datepicker');
})