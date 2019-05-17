jQuery(document).scroll(function () {
		scrollHeight = jQuery(document).height(); 
		scrollPosition = jQuery(window).height() + jQuery(window).scrollTop(); 
		footHeight = jQuery("#footer").innerHeight(); 
		if ( scrollHeight - scrollPosition  <= footHeight ) { 
			console.log('test');
			jQuery(".social").css({
						"position":"absolute", 
						'top':'580px',
						'right': '-50px'
						
						
				});
		} else {
			// jQuery(".social").addClass("move");
			jQuery(".social").css({
				"position": "fixed",
				"top": "220px",
				"right": "-50px",
				// "background":"rgb(245, 145, 0)",
				});
		}
});




