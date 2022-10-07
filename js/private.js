
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

	$('.cate-prd a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.cate-prd a').removeClass('active');
		$('.box-tab-content').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
	}) 

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
		responsive: [
        {
            breakpoint: 768,
            settings: { 
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ],
	}); 
	$('.slide-enkele').slick({
		autoplay:false,
		arrow:false,
		slidesToShow: 6,
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


	$('.clc-booking-popup').click(function(){
		$('.input').click();
	});

	$('.choose-time a').click(function(){
		$('.choose-time a').removeClass('active');
		$(this).addClass('active');
		$('.step-2').show();
		$('.step-1').hide();
	});

})


$(function() {
  $( ".calendar" ).datepicker({
		dateFormat: 'dd/mm/yy',
		firstDay: 1
	});
	
	$(document).on('click', '.date-picker .input', function(e){
		var $me = $(this),
				$parent = $me.parents('.date-picker');
		$parent.toggleClass('open');
	});
	
	
	$(".calendar").on("change",function(){
		var $me = $(this),
				$selected = $me.val(),
				$parent = $me.parents('.date-picker');
		$parent.find('.result').children('span').html($selected);
	});
});

