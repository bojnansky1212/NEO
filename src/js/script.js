$('#sidebarCollapse').on('click', function () {
	$('#sidebar').toggleClass('active');
	$('.wrapper').toggleClass('active');
	$(this).toggleClass('active');
});

$('.wrapper').removeClass('load-hide');

let owl = $('.banner').owlCarousel({
	loop:true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	nav:false,
	dots:false,
	autoplay:true,
	autoplaySpeed:800,
	autoplayTimeout:6000,
	responsive:{
		0:{
			items:1
		},
	}
})

owl.on('changed.owl.carousel',function(property){
	var current = property.item.index - 1;
	$(".indicator").removeClass("active");
	let id = "#indicator" + current;
	$(id).addClass("active");
});

$('[data-slide]').click(function(event) {
	let id = $(this).data('slide');
	id = parseInt(id);
	$(".banner").trigger("to.owl.carousel", [id - 1, 1])
});

$('.ponuka-detail').owlCarousel({
	loop:true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	nav:false,
	dots:false,
	autoplay:false,
	responsive:{
		0:{
			items:1
		},
	}
});

$('.develop-slider').owlCarousel({
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
			items:1
		},
	}
})

$(window).scroll(function() {
	var e = $(".navbar-custom");
	e.toggleClass("scrolled", $(this).scrollTop() < e.height());
});

