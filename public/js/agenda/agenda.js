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

$(document).on('click', '.role-agenda', function(e){
    var role = $(this).attr('role');
    var id = $(this).val();

    if (role == 'edit') {
        if (confirm('Are you sure?'))
            window.location.href = 'angeda/edit/' + id;
    } else if (role == 'delete') {
        if (confirm('Are you sure?'))
            window.location.href = 'angeda/delete/' + id;
    }
})