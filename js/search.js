jQuery(document).ready(function($) {
	
	$("#searchform").hide();
	
	$(".site, .wrapper, #close-search").click(function() {
		closeSearch();
	});
		
	$("#search-icon").click(function(e) {
		e.stopPropagation();
		openSearch();
		$("#s").focus();
		return false;
	});
	
	var menuElements = "#main-menu," + "#top-menu," + "#site-logo";
	var siteElements = ".site," + "#search-wrapper," + ".main-footer";
	
	function closeSearch() {
		$(menuElements).show();
		$("#searchform").hide();
		$(siteElements).removeClass("overlay");
			
	}	
	function openSearch() {
		$(menuElements).hide();
		$("#searchform").show();	
		$(siteElements).addClass("overlay");
	}

});