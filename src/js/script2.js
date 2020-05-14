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

$('#clip').css("background-size","120%");