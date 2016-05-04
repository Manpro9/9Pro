$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

$(document).on('click', '.delete-content-artikel', function(){
    var from =  $(this).attr('from');
    var role = $(this).attr('role');
    var id = $(this).val();
    
    if (role == 'delete')
        if (confirm('Are you sure?'))
            window.location.href = from + '/delete/' + id;

})