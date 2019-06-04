
// move the social link when it goes over the footer
let scroll_pos = 0;
jQuery(window).scroll(function () {

let social_bottom = jQuery('.social').offset().top + jQuery('.social').height();
let footer_top = jQuery('#footer').offset().top;
console.log(social_bottom　+ " " + footer_top);
if (social_bottom >= footer_top){
	console.log('hit!');
	jQuery('.social').addClass('disappear');
} else {
	jQuery('.social').removeClass('disappear');
}

// move the header when it scrolled 
	scroll_pos = jQuery(window).scrollTop();
	if (scroll_pos > 10) {
		jQuery('.header-wraper').addClass('scrolled');
	} else {
		jQuery('.header-wraper').removeClass('scrolled');
	}
});

// let startPos = 0,winScrollTop = 0;
// jQuery(window).scroll(function () {
// 		winScrollTop = jQuery(this).scrollTop();
//     if (winScrollTop >= startPos) {
//         jQuery('.header-wraper').addClass('hide');
//         jQuery('.social').addClass('hide');
//     } else {
//         jQuery('.header-wraper').removeClass('hide');
//         jQuery('.social').removeClass('hide');
//     }
//     startPos = winScrollTop;
// });

/////////// hamburger //////////////////
jQuery(function() {
		jQuery('#navToggle').click(function(){
		jQuery('span').toggleClass('openNav');
		jQuery('header').toggleClass('openNav');
		jQuery('#mobile-container').toggleClass('openNav');
		jQuery('.mobile-link').toggleClass('openNav');
	});
});






