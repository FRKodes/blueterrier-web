function initMap() {
	var myLatLng = {lat: 20.693687, lng: -103.378218};
	var map = new google.maps.Map(document.getElementById('map'), {
		center: myLatLng,
		scrollwheel: false,
		zoom: 14
	});

	 map.setOptions(
			{color: '#f5f5f5'}
	 );

	var marker = new google.maps.Marker({
		map: map,
		position: myLatLng,
		title: 'Blue Terrier Studio',
		animation: google.maps.Animation.DROP
	});

	var contentString = '<div id="content">'+
	      '<div id="siteNotice" class="text-center">'+
	      '</div>'+
	      '<h3 id="firstHeading" class="firstHeading">Blue Terrier Studio</h3>'+
	      '<div id="bodyContent">'+
	      '<p>Let\'s rock together!</p>'+
	      '<p>Correo: <a href="mailto:info@blueterriermx">info@blueterrier.mx</a></p>'+
	      '<p>Teléfono: +52 (33) 3111-9004</p>'+
	      '</div>'+
	      '</div>';

	  var infowindow = new google.maps.InfoWindow({
	    content: contentString
	  });

	  marker.addListener('click', function() {
	    infowindow.open(map, marker);
	  });
}

$(document).ready(function(){

	$.ajaxSetup({
	  headers: {
	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	  }
	});

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
		slidesToShow: 4,
		slidesToScroll: 4,
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

	$('.service-btn a').on('click', function () {
		$(this).parent().toggleClass('opened');
	});

	var window_width = $( window ).width();
	if (window_width<992) {
		$('.service-btn a').on('click', function(){
			var extra_content = $(this).attr('data-open');
			$(this).parent().toggleClass('p-bottom-0')
			$('.extra-content.' + extra_content).toggleClass('show-this hidden');
			console.log(extra_content);
		});
	};

	if (window_width >= 992) {
		console.log('> 992px');
		$('.open-extra-info, .menu-bottom-services a').on('click', function(){
			console.log('clicked!');
			var extra_content = $(this).attr('data-open');
			var bastard = $('.main-info-container.' + extra_content);
			if (bastard.hasClass('modified')) {
				
				console.log('quitar estas clases: height-0');
				console.log(extra_content);

				$('.main-info-container').addClass('hidden');
				$('.service-btn.' + extra_content).removeClass('magictime vanishOut height-0');
				$('.main-info-container.' + extra_content + ', .menu-bottom-services li').removeClass('hidden');
				$('.menu-bottom-services .' + extra_content).addClass('hidden');
			}else{
				$('.open-extra-info').addClass('inactive');
				$('.back-icon, .icon-mas').addClass('hidden');
				$('.service-btn').addClass('magictime vanishOut height-0');
				$('.service-btn a').addClass('width-all');
				$('.main-info-container').addClass('hidden');
				$('.main-info-container.' + extra_content + ', .menu-bottom-services, .menu, .menu-bottom-services li').removeClass('hidden');
				$('.extra-content').removeClass('row');
				$('.main-info-container.' + extra_content).html('<span class="icon-'+ extra_content +'"></span>').addClass('modified');
				$('.service-btn.' + extra_content).removeClass('row opened magictime vanishOut height-0 col-md-6').addClass('col-md-7 col-md-offset-1 height-auto').appendTo('.main-info-container.' + extra_content);
				$('.extra-content.' + extra_content + ' p.blanco').appendTo('.service-btn.' + extra_content + ' a');
				$('.extra-content.' + extra_content).appendTo('.main-info-container.' + extra_content).removeClass('hidden');
				$('.menu-bottom-services .' + extra_content).addClass('hidden');
			}		
		});
	};

	$(function(){
		var formSettings = {
			singleError : function($field, rules){ $field.closest('.form-group').removeClass('valid').addClass('error'); $('.alert.alert-danger').removeClass('hidden-item');},
			singleSuccess : function($field, rules){ $field.closest('.form-group').removeClass('error').addClass('valid'); $('.alert.alert-danger').addClass('hidden-item');},
			overallSuccess : function(){

				var form    	= $('#contactForm'),
					fullname   	= form.find( "input[name='fullname']" ).val(),
					email		= form.find( "input[name='email']" ).val(),
					phone		= form.find( "input[name='phone']" ).val(),
					subject		= form.find( "input[name='subject']" ).val(),
					message		= form.find( "textarea[name='message']" ).val(),
					_token   	= form.find( "input[name='_token']" ).val(),
					action  	= form.attr( "action"),
					url     	= action;

				var posting = $.post( 
					url, { 	fullname: fullname, 
							email: email, 
							phone: phone, 
							subject: subject, 
							message: message,
							_token: _token
						}
					);
				posting.done(function( data ) {
					console.log('email sent!');
					$('#contactForm')[0].reset();
					$('.sent_mail_alert').fadeIn().delay(2000).fadeOut();
				});

			},
			overallError : function($form, fields){ /*Do nothing, just show the error fields*/ },
			autoDetect : true, debug : true
		};
		var $validate = $('#contactForm').validate(formSettings).data('validate');
	});

});