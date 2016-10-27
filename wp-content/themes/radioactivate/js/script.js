jQuery(document).ready(function($){
	$('.mobile-button').click(function(e){
		e.preventDefault();
		$('.mobile-menu').slideToggle();
	});
	$('.tab').hide(function(){
		$('#tab-1').fadeIn('fast');
	});
	$('.botontab').click(function(e){
		e.preventDefault();
		$('.botontab').removeClass('active');
		$(this).addClass('active');
		tabnueva = $(this).attr('href');
		$('.tab').hide(function(){
			$(tabnueva).stop().fadeIn('fast');
		});
	})
});

function abrirPlayer(){
	var myWindow = window.open("http://localhost/radioactivatewp/radioplayer/", "RadioPlayer Radioactivate", "width=400,height=180");
}