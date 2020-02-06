jQuery(document).ready(function($) {
	
	$("#searchform").hide();
	
	$(".site, .wrapper").click(function() {
		showElements();
	});
		
	$("#search-icon").click(function(e) {
		e.stopPropagation();
		hideElements();
		return false;
	});
	
	var menuElements = "#main-menu," + "#top-menu," + "#site-logo";
	var siteElements = ".site," + "#search-wrapper," + ".main-footer";
	
	function showElements() {
		$(menuElements).show();
		$("#searchform").hide();
		$(siteElements).removeClass("overlay");
			
	}	
	function hideElements() {
		$(menuElements).hide();
		$("#searchform").show();	
		$(siteElements).addClass("overlay");
	}

});