$(document).on('click', '.delete-content-artikel', function(){
    var from =  $(this).attr('from');
    var role = $(this).attr('role');
    var id = $(this).val();
    
    if (role == 'delete')
        if (confirm('Are you sure?'))
            window.location.href = from + '/delete/' + id;
})

// edit artikel
$(document).on('click', '.edit_artikel', function(e){

    var from =  $(this).attr('from');
    var role = $(this).attr('role');
    var id = $(this).val();
    
    if (role == 'edit')
        if (confirm('Are you sure?'))
            window.location.href = from + '/edit/' + id;

    e.preventDefault();
})