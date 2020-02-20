$(document).ready(function(){
	var calculateMargin = function() {
		$(".mainContainer").css("margin-bottom", $(".footer-container").outerHeight());

	};
	calculateMargin();
	$(window).resize(function() {
		calculateMargin();
	});
});