jQuery(document).ready(function($){
	$('.mobile-button').click(function(e){
		e.preventDefault();
		$('.mobile-menu').slideToggle();
	})
})