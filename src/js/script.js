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
	lazyLoad:true,
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

$('.ponuka-detail').on('initialized.owl.carousel changed.owl.carousel', function(e) {
		if (!e.namespace){
			return;
		}
		var carousel = e.relatedTarget;
		$(this).next('div').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
	}).owlCarousel({
		loop:true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav:true,
		dots:false,
		lazyLoad:true,
		navText: [`<i class="fa fa-chevron-left" aria-hidden="true"></i>`,
		`<i class="fa fa-chevron-right" aria-hidden="true"></i>`],
		responsive:{
			0:{
				items:1
			},
		}
	});


let develop = $('.develop-slider').owlCarousel({
	loop:false,
	nav:false,
	dots:false,
	autoplay:true,
	autoplaySpeed:800,
	autoplayTimeout:10000,
	margin: 80,
	responsive:{
		0:{
			items:1
		},
	}
});


$('.develop').on('initialized.owl.carousel changed.owl.carousel', function(e) {
		if (!e.namespace){
			return;
		}
		var carousel = e.relatedTarget;

		$(this).next('div').html(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
		
		let classs = $(this).data("remote");
	
		var kurvyVyjebane = document.getElementsByClassName(classs);
		console.log(classs);
		kurvyVyjebane[0].innerHTML = carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length;		

		console.log($(this));
	}).owlCarousel({
		loop:true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav:true,
		dots:false,
		lazyLoad:true,
		mouseDrag:false,
		navText: [`<i class="fa fa-chevron-left" aria-hidden="true"></i>`,
		`<i class="fa fa-chevron-right" aria-hidden="true"></i>`],
		responsive:{
			0:{
				items:1
			},
		}
	});

var currentDevelopSlider = "#info1";
develop.on('changed.owl.carousel',function(property){
	setTimeout(function(){
		var current = $('.develop-slider .owl-stage-outer .owl-stage .active .test').data('index');
		//console.log(current);
		if (currentDevelopSlider !== current ) {
			currentDevelopSlider = current;
			$(".info").fadeOut(250);
			setTimeout(function(){
				$(current).fadeIn();
			},270);
		}
	},100);
});


$(window).scroll(function() {
	var e = $(".navbar-custom");
	e.toggleClass("scrolled", $(this).scrollTop() > e.height());
});