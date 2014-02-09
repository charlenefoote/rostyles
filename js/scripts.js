// Scroll Script
jQuery(function(){
  jQuery('a[href^="#"]').click(function(e){
    e.preventDefault();
    var currentClass = "current",
      $this = jQuery(this),
      hash = $this.attr("href"),
      $hash = jQuery(hash),
      hashTop = $hash.offset().top - 97 || 0;
      hashTopMobile = $hash.offset().top - 57 || 0;
    if( jQuery(window).width() < 481 ) {
		jQuery('html, body').animate( {"scrollTop": hashTopMobile}, 800 );
	} else {
    	jQuery('html, body').animate( {"scrollTop": hashTop}, 800 );
    }
    jQuery('.' + currentClass).removeClass(currentClass);
    $this.closest('li').addClass(currentClass);
  });
});

// Push Nav up on load
addEventListener("load", function() {
    window.scrollTo(1, 0);
}, false);

// NAV TRANSITION
jQuery(window).scroll(function() {    
	
		/* Get distance from the top */
		var top = jQuery(window).scrollTop();
			
		if (top > 100) {
		    jQuery(".header-bar").addClass("sticky-wrap");
		}
		
		if (top < 100) {
		    jQuery(".header-bar").removeClass("sticky-wrap");
		}
});

jQuery('.section-wrapper').waypoint( function() {
  jQuery(this).find('.section-header').toggleClass('header-animate');
}, { offset: 300 });