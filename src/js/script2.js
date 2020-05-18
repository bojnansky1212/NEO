$('.sponsor-slider').owlCarousel({
	loop:true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	nav:false,
	dots:false,
	margin: 50,
	autoplay:true,
	autoplaySpeed:800,
	autoplayTimeout:5000,
	responsive:{
		0:{
			items:1
		},
		768:{
			items:3
		}
	}
})

$('#flat-number').select2();
$('#contact-select').select2();
$('#filter-sales').select2();
$('#filter-location').select2();
$('#filter-price').select2();
$('#filter-date').select2();

$('#clip').css("background-size","70%");

$('.staff-slider').owlCarousel({
	loop:true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	nav:false,
	dots:false,
	autoplay:true,
	autoplaySpeed:800,
	autoplayTimeout:5000,
	responsive:{
		0:{
			items:2
		},
		768:{
			items:3
		},
		992:{
			items:5
		},
		1440:{
			items:6
		}
	}
})