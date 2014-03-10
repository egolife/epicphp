$(document).ready(function() {
	var navButtons = $("nav").find("a");
	navButtons.on('click', function(e){
		event.preventDefault();
		var source = $(this);
		var numTask = source.attr("id");
		navButtons.removeClass("active");
		source.addClass("active");
		$(".content").find(".task").addClass("hidden")
		.parent().find("."+numTask).removeClass("hidden");
	});
	$("nav").find("a").first().trigger("click");
	//var windowHeight = $(window).height();
	//var headerNavHeight = $("header").height() + $("nav").height();
	//var footerHeight = $("footer").height();
	//console.log(windowHeight);
	//console.log(headerNavHeight);
	//console.log(footerHeight);
	//console.log(windowHeight - headerNavHeight - footerHeight);
	//$(".content").height(windowHeight - headerNavHeight - footerHeight - 2);
});