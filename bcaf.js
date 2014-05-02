(function ($) {
$(document).ready(function(){

	//Format promo images for list display.
	// Get all the images.
	$(".node-media-page .field-name-field-promo-images .field-item").each(function (i) {
    // Store the date for the calendar item.
    var img_title = $(this).find("img").attr('title');
    $(this).append("<p>"+img_title+"</p>");
    });  

});
})(jQuery);