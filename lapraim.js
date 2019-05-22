jQuery(document).scroll(function () {
		scrollHeight = jQuery(document).height(); 
		scrollPosition = jQuery(window).height() + jQuery(window).scrollTop(); 
		footHeight = jQuery("#footer").innerHeight(); 
		headHeight = jQuery("header").innerHeight(); 

		if( scrollHeight - scrollPosition  > footHeight ) { 
			jQuery(".social").css({
				"position": "fixed",
				"top": "32%",
				"right": "-50px",
				'transition': '.5s'
				});
		}else {
			// jQuery(".social").addClass("move");
			jQuery(".social").css({
				"position": "fixed",
				"top": "150px",
				"right": "-50px",
				'transition': '.5s'
				});
		}
});




// if ( scrollHeight - scrollPosition  <= footHeight ) { 
// 	jQuery(".social").css({
// 				"position":"absolute", 
// 				'top':'83%',
// 				'right': '-50px',
// 				'transition': '1.5s'

// 		});
// }	else