jQuery(document).ready(function($) {	
	alert ("Hello");
	alert (location.pathname.split("/")[1]);
	$('ul li a[href="/' + location.pathname.split("/")[1] + '"]').addClass('active');
});