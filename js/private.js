
$(document).ready(function(){
	// if($(window).innerWidth() < 768){
	// 	$('.project .row').slick({
	// 		autoplay:false,
	// 		arrow:false,
	// 		slidesToShow: 1,
	// 		slidesToScroll: 1,
	// 		dots: true,
	// 		infinite: false,
	// 	});
	// }
	$('.slide-part').slick({
		autoplay:false,
		arrow:false,
		slidesToShow: 5,
		slidesToScroll: 2,
		dots: true,
	}); 
	$('.slide-member').slick({
		autoplay:false,
		arrow:false,
		slidesToShow: 5,
		slidesToScroll: 2,
		dots: true,
	}); 

	// $(window).bind('scroll', function() {
	// 	var navHeight = $( window ).height();
	// 	if ($(window).scrollTop() > 1) {
	// 		$('.head-menu').addClass('fixed-menu');
	// 	}
	// 	else {
	// 		$('.head-menu').removeClass('fixed-menu');
	// 	}
	// });

	// $('.btn-bar a').click(function(){
	// 	$('.menu-mobile, html').addClass('open_menu');
	// });
	// $('.close-menu a').click(function(){
	// 	$('.menu-mobile, html').removeClass('open_menu');
	// });

})

