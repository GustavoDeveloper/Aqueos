$(document).ready(main);

var contador=1;
function main() {
	$('.menubar').click(function(){
		if (contador==1) {
			$('nav').animate({
				left: '0'
			});
			contador=0;
		}else{
			contador=1;
			$('nav').animate({
				left: '-100%'
			});
		}
	});
	//se muestra menus y sub menus
$('.submenu').click(function(){
	$(this).children('.hijo').slideToggle();
});
}

$(document).ready(function(){
	var altura = $('nav').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('nav').addClass('menu-fijo');
		} else {
			$('nav').removeClass('menu-fijo');
		}
	});

});


/*$(window).on('load', function() {
    $('#slider').nivoSlider(); 
});*/ 


$(function(){
  $(".slide").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 3000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});

