$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip({
        placement: 'top'
    });   
/* end dot nav */
});

$(document).on('click', '.submit-upload', function(e) {
	var title = $('.title').val();
	var type = $('input[name=type]:checked').val();
	var desc = $('.desc').val();
	var file = $('.file').val();

	if (title == '') {
        alert('Judul Harus Diisi!');
        e.preventDefault();
    }
	if (type == null) {
        alert('Tipe Harus Dipilih!');
        e.preventDefault();
    }
    if (desc == '') {
        alert('Deskripsi Harus Diisi');
        e.preventDefault();
    }
    if (file == '') {
        alert('Pilih File yang akan diupload');
        e.preventDefault();
    }

})