$('.form-floating-label input, .form-floating-label textarea').focusin(function(){
  $(this).parent().addClass('has-value');
});

$('.form-floating-label input, .form-floating-label textarea').blur(function(){
  if(!$(this).val().length > 0) {
    $(this).parent().removeClass('has-value');
  }
});



$(document).ready(
    function() {
        $(".hamburger").click(function()
         {
            $(".overlay-menu").stop().slideToggle()
        });
    });

$(document).ready(
    function() {
        $(".overlay-toggle").click(function()
         {
            $(".overlay-menu").toggle();
        });
    });
    

$(window).scroll(function(){
  var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});

