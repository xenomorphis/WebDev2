$(function(){
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
    $('#nav-logo')
                .attr('src','/img/_logoSM.png');
  } else {
    $('nav').removeClass('shrink');
    $('#nav-logo')
                .attr('src','/img/_logoS.png');
  }
});
});