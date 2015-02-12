$(function() {
	$('.slideshow-wrapper').css('position', 'relative');
	$('.portfolio-slideshow').after('<img src="/wp-content/themes/roots/img/frame.png" alt="" class="frame" />');
});

$(document).ready(function() {

	$("img").each(function() {
		$(this).load(function() {
		//Get the width of the image
		var width = $(this).width();
		var height = $(this).height();
		//Max-width substitution (works for all browsers)
		$(this).css("max-width", width);
		$(this).css("width", "100%");
		$(this).css("max-height", height);
		});

	});


});
