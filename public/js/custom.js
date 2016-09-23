$(document).ready(function(){
	$( window ).scroll(function() {
		var scroll = $(window).scrollTop();
		if (scroll > 0) {
			$('.navbar-default').addClass('back');
		}
		if(scroll == 0 && !$('.navbar-collapse').hasClass('in')){
			$('.navbar-default').removeClass('back');
		};
	});

	$('.navbar-toggle').on('click', function (){
		var scroll = $(window).scrollTop();
		if (scroll == 0) {
			$('.navbar-default').addClass('back');
		};
	});
	
	$('.services-home-container').slick({
		dots: true,
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 500,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1200,
				settings: "unslick"
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
	});
});