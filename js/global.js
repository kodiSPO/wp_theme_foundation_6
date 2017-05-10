'use strict';

jQuery(document).ready(function($) {

	// initialize foundation js
	$(document).foundation();


	// scrolldown to anchor
	$('body').on('click','a[href^="#"]', function(e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, 500);
	});

});