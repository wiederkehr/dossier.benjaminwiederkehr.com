$(document).ready(function(){
	
  $("#sidebar").localScroll({
    duration: "100ms",
    offset: {top: -37}
  });

  $("a.disabled").click(function( event ) {
    event.preventDefault();
  })

  var elementPosition = $('.sidebar__content').offset();

  $(window).scroll(function(){
    if($(window).scrollTop() > elementPosition.top - 50){
      $('.sidebar__content')
        .css('position','fixed')
        .css('top','0')
        .toggleClass('fixed');
    } else {
      $('.sidebar__content')
        .css('position','static');
    }    
  });

});