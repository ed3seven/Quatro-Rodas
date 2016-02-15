
jQuery(document).ready(function($) {

	$('button.open').click(function(event) {
		$( ".h-menu-prin > ul" ).slideDown();
	});

	$('button.close').click(function(event) {
		$( ".h-menu-prin > ul" ).slideUp();
	});

}); 