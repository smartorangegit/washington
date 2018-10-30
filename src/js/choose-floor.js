$(document).ready(function() {

	$( ".build__link" ).each(function() {

		var newlink = $('.choose-floor__link');
		var infoBox1 = $(".choose-floor__info-number-js");
		var infoBox2 = $(".choose-flat__info-number-js");
	if ($(window).width() > 768) {

		$(this).mouseover(function(){
			var floorValue = $(this).data("floor");
			var flatValue = $(this).data("flat");
				infoBox1.html(floorValue);
				infoBox2.html(flatValue);
			});
		$(this).mouseleave(function() {

			});

		} else {

			$(this).click(function(e){
				e.preventDefault();

				var floorValue = $(this).data("floor");
				var flatValue = $(this).data("flat");
				var href = $(this).data("href");

				console.log(href);
				infoBox1.html(floorValue);
				infoBox2.html(flatValue);
				newlink.attr("href", href);

			});

		}
	});

});
