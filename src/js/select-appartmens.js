(function() {
	var floorSection = document.querySelectorAll(".apartment__link"),
	toolTip = document.querySelector(".apartment-tooltip");

	function showTooltip(e) {
		var current = e.target,
			top = current.getBoundingClientRect().top,
			left = current.getBoundingClientRect().left-230;
			// top = event.pageY+20,
			// left = event.pageX-50;
		toolTip.style.top = top.toString() + "px";
		toolTip.style.left = left.toString() + "px";
		toolTip.style.opacity = "1";
	}

	function hideTooltip(e) {
		var current = e.target;

		// toolTip.style.top = "3000px";
		toolTip.style.left = "-100%";

		toolTip.style.opacity = "0";
	}

	for(var i = 0; i < floorSection.length; i++) {
		floorSection[i].addEventListener("mouseover", showTooltip, false);
		floorSection[i].addEventListener("mouseout", hideTooltip, false);
	}
})();