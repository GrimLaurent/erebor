   $(document).ready(function(){
   $('body').append('<a href="#top" class="top_link" title="Revenir en haut de page"><img src="images/fleche_scroll.png" /></a>');
   $('.top_link').css({


	'position'				:	'fixed',
	'right'					:	'20px',
	'bottom'				:	'20px',
	'display'				:	'block',
	'padding'				:	'20px',
	'background-opacity'			:	'#fff',
	'-moz-border-radius'			:	'40px',
	'-webkit-border-radius'		:	'40px',
	'border-radius'				:	'40px',
	'z-index'				:	'2000'

});  
  });
$(window).scroll(function(){
	posScroll = $(document).scrollTop();
	if(posScroll >=0); 					//  On initie à 0 pour laisser le bouton sur la page 
		/*$('.top_link').fadeIn(600);			
	else
		$('.top_link').fadeOut(600);*/
});

