(function($) {
	/* Off-Canvas Menu */
	$('.navigation-button').sidr({
		name: 'sidr-main',
		side: 'left',
		renaming: false,
		displace: false,
		source: '.main-navigation'
	});

	// Show hidden nav icon
	$(document).scroll(function() {
		var y = $(this).scrollTop();
		if (y > 200) {
			$('body').addClass('sidr-main-float')
		} else {
			$('body').removeClass('sidr-main-float')
		}
	});

})(jQuery);
