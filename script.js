$(document).ready(function(){
	$('#hamburger').click(function(){
		$(this).toggleClass('open');
    $("#sidebar").toggleClass("active");
    $("#body-container").toggleClass("active");

	});
});
