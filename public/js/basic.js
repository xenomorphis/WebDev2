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
  		
  		if($(window).scrollTop() + $(window).height() > $(document).height() - 70) {
       	$('footer').addClass('shown');
       	$('footer').css('visibility', 'visible');
      } else {
      	$('footer').removeClass('shown');
   	}
   	
   	if($(window).scrollTop() + $(window).height() < $(document).height() - 100) {
   		$('footer').css('visibility', 'hidden');
   	}
	});
});