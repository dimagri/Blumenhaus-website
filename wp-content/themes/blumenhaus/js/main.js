$(document).ready(function(){


	$('body').addClass('show');
	$('.progress-bar').addClass('go');

	$('.single .sidebar').height($('.content.single').height() - $('.header').height() );

	// left: 37, up: 38, right: 39, down: 40,
	// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
	var keys = {37: 1, 38: 1, 39: 1, 40: 1};

	function preventDefault(e) {
	  e = e || window.event;
	  if (e.preventDefault)
	      e.preventDefault();
	  e.returnValue = false;  
	}

	function preventDefaultForScrollKeys(e) {
	    if (keys[e.keyCode]) {
	        preventDefault(e);
	        return false;
	    }
	}

	function disableScroll() {
	  if (window.addEventListener) // older FF
	      window.addEventListener('DOMMouseScroll', preventDefault, false);
	  window.onwheel = preventDefault; // modern standard
	  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
	  window.ontouchmove  = preventDefault; // mobile
	  document.onkeydown  = preventDefaultForScrollKeys;
	}

	function enableScroll() {
	    if (window.removeEventListener)
	        window.removeEventListener('DOMMouseScroll', preventDefault, false);
	    window.onmousewheel = document.onmousewheel = null; 
	    window.onwheel = null; 
	    window.ontouchmove = null;  
	    document.onkeydown = null;  
	}

	if ( document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
		$('body').addClass('ready');
	}

	if( $('body').hasClass('home') && !$('body').hasClass('ready')  ) {
		disableScroll();

		setTimeout(function() {
			$('body,html').animate({scrollTop: 0 }, 0);
			enableScroll();
		}, 4900);

		setTimeout(function() {
			$('#preloader').height(0);
		}, 3400);
	} else {
		$('#preloader').addClass('h0');
	}

	$('#open-popup, #close-popup').click(function(event) {
		event.preventDefault();
		$('body').toggleClass('overflow');
		$('.order-popup').toggleClass('active');
	});

	$('#order-form').ajaxForm(function() { 
        $('.form-wrapper').addClass('form-success');
        setTimeout(function() {
        	$('.order-popup').removeClass('active');
        	$('.form-wrapper').addClass('form-success');
        },4000)
        $('#order-form')[0].reset();
    }); 

});