// jQuery(document).scroll(function () {
// 		scrollHeight = jQuery(document).height(); 
// 		scrollPosition = jQuery(window).height() + jQuery(window).scrollTop(); 
// 		footHeight = jQuery("#footer").innerHeight(); 
// 		headHeight = jQuery("header").innerHeight(); 

// 		if( scrollHeight - scrollPosition  > footHeight ) { 
// 			jQuery(".social").css({
// 				"position": "fixed",
// 				"top": "200px",
// 				"right": "-50px",
// 				'transition': '.5s'
// 				});
// 		}else {
// 			jQuery(".social").addClass("move");
// 			jQuery(".social").css({
// 				"position": "fixed",
// 				"top": "150px",
// 				"right": "-50px",
// 				'transition': '.5s'
// 				});
// 		}
		
// });


function checkOffset() {
	if(jQuery('.social').offset().top + jQuery('.social').height() >= jQuery('footer').offset().top - 10)
			jQuery('.social').css('position', 'absolute');
	if(jQuery(document).scrollTop() + window.innerHeight < jQuery('footer').offset().top -20)
			jQuery('.social').css('position', 'fixed'); 
}

jQuery(document).scroll(function() {
	checkOffset();
});


let scroll_pos = 0;
jQuery(window).scroll(function () {
	scroll_pos = jQuery(window).scrollTop();
	if (scroll_pos > 10) {
		jQuery('.header-wraper').addClass('scrolled');
	} else {
		jQuery('.header-wraper').removeClass('scrolled');
	}
});

let startPos = 0,winScrollTop = 0;
jQuery(window).scroll(function () {
		winScrollTop = jQuery(this).scrollTop();
    if (winScrollTop >= startPos) {
        jQuery('.header-wraper').addClass('hide');
        jQuery('.social').addClass('hide');
    } else {
        jQuery('.header-wraper').removeClass('hide');
        jQuery('.social').removeClass('hide');
    }
    startPos = winScrollTop;
});

/////////// hamburger //////////////////
jQuery(function() {
		jQuery('#navToggle').click(function(){
		jQuery('span').toggleClass('openNav');
		jQuery('header').toggleClass('openNav');
		jQuery('#mobile-container').toggleClass('openNav');
		jQuery('.mobile-link').toggleClass('openNav');
	});
});






