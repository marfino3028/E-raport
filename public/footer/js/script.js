$(document).ready(function(){
	var calculateMargin = function() {
		$(".mainContainer").css("margin-bottom", $(".revealFooter").outerHeight());

	};
	calculateMargin();
	$(window).resize(function() {
		calculateMargin();
	});
});