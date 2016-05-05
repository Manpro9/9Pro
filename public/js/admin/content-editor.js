$(document).on('click', '.btn-edit-artikel', function(e) {
    var role = $(this).attr('role');
    var content  = $('#summernote').summernote('code');

    $('#tempContent').val(content);
    $('#tempStatus').val(role);

    if ($('#document-name').val() == '') {
        alert('Judul Tidak Boleh Kosong');
        e.preventDefault();
    }
        
    if ($('#document-desc').val() == '') {
        alert('Deskripsi Tidak Boleh Kosong');
        e.preventDefault();
    }
    if (content == '') {
        alert('Konten Tidak Boleh Kosong');
        e.preventDefault();
    }
    
})

$(document).ready(function() {
  $('#summernote').summernote({
      placeholder: 'Write here...',
	  height: 200,                 
	  minHeight: null,          
	  maxHeight: null,
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]               
	});
});

// Image Uploader
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    ); 
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'top'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $("#hidden-image").attr('src',e.target.result)
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");

            // Note: Code untuk checking ukuran resolusi gambar
            // if($("#hidden-image").width() != 770 && $("#hidden-image").height() != 600)
            // {
            //     alert("Ukuran gambar wajib 700 x 600 piksel!")
            //     $('.image-preview').attr("data-content","").popover('hide');
            //     $('.image-preview-filename').val("");
            //     $('.image-preview-clear').hide();
            //     $('.image-preview-input input:file').val("");
            //     $(".image-preview-input-title").text("Browse"); 
            // }
            // else $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
    });  
});