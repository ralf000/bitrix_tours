$(document).ready(function() {
	
	var open = $('.toggle-menu'),
		menu = $('.menu');

	open.on('click', function(e) {
		e.preventDefault();
		if (open.hasClass('act')) {
			menu.slideUp();
			open.removeClass('act');
		} else {
			menu.slideDown();
			open.addClass('act');
		};
	});

});

$(document).ready(function(){
	$('.head-slider').bxSlider({
		auto: true,
		autoHover: true
	});
});