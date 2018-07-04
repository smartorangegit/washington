$(document).ready(function() {

// display select floor and flat number info
	$(".build__link").mouseover(
		function() {
			var floorValue = $(this).data("floor");
			var flatValue = $(this).data("flat");
			$(".choose-floor__info-number-js").html(floorValue);
			$(".choose-flat__info-number-js").html(flatValue);
		}
	);
// end__display select floor and flat number info


});