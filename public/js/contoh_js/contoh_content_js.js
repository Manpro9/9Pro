$(document).ready(function() {
  initMenu();
});

// ------ FUNCTION "CLICK" ------
$(document).on("click", "#menu-toggle", function() {
  $("#wrapper").toggleClass("toggled");
});

$(document).on("click", "#menu-toggle-2", function() {
  $("#wrapper").toggleClass("toggled-2");
  $('#menu ul').hide();
});

$(document).on("click", ".lists", function() {
  $(".active").removeClass("active");
  $(this).addClass("active");

  
  $("#content-title").text($ (this).text())

});
// ------ END OF FUNCTION "CLICK" ------

// ------ FUNCTION ------
function initMenu() {
  $('#menu ul').hide();
  $('#menu ul').children('.current').parent().show();
  //$('#menu ul:first').show();
  $('#menu li a').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        return false;
      }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#menu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
      }
    }
  );
}
// ------ END OF FUNCTION ------