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
	mouseDrag:false,
	touchDrag:false,
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

if ($(window).width() < 500) {
	$('.ponuka').removeClass("row");
	$('.ponuka').addClass("owl-carousel");
	$('.ponuka').addClass("owl-theme");
	$('.ponuka').owlCarousel({
		loop:true,
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
}

$('.ponuka-detail').on('initialized.owl.carousel changed.owl.carousel', function(e) {
		if (!e.namespace){
			return;
		}
		var carousel = e.relatedTarget;
		$(this).next('div').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
	}).owlCarousel({
		loop:true,
		animateOut: 'fadeOutUp',
		animateIn: 'fadeInDown',
		nav:true,
		dots:false,
		lazyLoad:true,
		mouseDrag:false,
		slideSpeed: 100,
		touchDrag:false,
		navText: [`<i class="fa fa-chevron-left" aria-hidden="true"></i>`,
		`<i class="fa fa-chevron-right" aria-hidden="true"></i>`],
		responsive:{
			0:{
				items:1
			},
		}
	});


let develop = $('.develop-slider').owlCarousel({
	loop:true,
	nav:false,
	dots:false,
	lazyLoad:true,
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
		$(this).next('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
}).owlCarousel({
		loop:true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		nav:true,
		dots:false,
		lazyLoad:true,
		mouseDrag:false,
		touchDrag:false,
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
		if (currentDevelopSlider !== current ) {
			currentDevelopSlider = current;
			$(".info").fadeOut(100);
			setTimeout(function(){
				$(current).fadeIn();
			},120);
		}
	},100);
});


$(window).scroll(function() {
	var e = $(".navbar-custom");
	e.toggleClass("scrolled", $(this).scrollTop() > e.height());
});

$('.referencies').on('initialized.owl.carousel changed.owl.carousel', function(e) {
		if (!e.namespace){
			return;
		}
		var carousel = e.relatedTarget;
		$(this).next('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
	}).owlCarousel({
		loop:true,
		nav:true,
		dots:false,
		lazyLoad:true,
		margin:60,
		navText: [`<i class="fa fa-chevron-left" aria-hidden="true"></i>`,
		`<i class="fa fa-chevron-right" aria-hidden="true"></i>`],
		responsive:{
			0:{
				items:1
			},
			769:{
				items:2
			},
		}
	});

import anime from 'animejs/lib/anime.es.js';



var viewed = false;

function isScrolledIntoView(elem) {
	var docViewTop = $(window).scrollTop();
	var docViewBottom = docViewTop + $(window).height();

	var elemTop = $(elem).offset().top;
	var elemBottom = elemTop + 100;

	return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

function testScroll() {
	if (isScrolledIntoView($(".numbers")) && !viewed) {
			viewed = true;
			$('.value').each(function () {
			$(this).prop('Counter',0).animate({
					Counter: $(this).text()
			}, {
					duration: 2000,
					easing: 'swing',
					step: function (now) {
							$(this).text(Math.ceil(now));
					}
			});
		});
	}
}

anime({
	targets: 'path',
	strokeDashoffset: [anime.setDashoffset, 0],
	easing: 'easeInOutSine',
	duration: 1000,
	delay: function(el, i) { return i * 250 },
	direction: 'alternate',
	loop: true
});

$(document).ready(function(){
	setTimeout(function(){
		anime.timeline({loop: false})
		.add({
			targets: '#logo',
			opacity: 0,
			scale: 4,
			duration: 1000,
			easing: "easeInExpo",
			delay: 500
		})
		setTimeout(function(){
			$("#pre-loader").css('box-shadow', 'inset 0 0 300px -300px #1D1D1D');
			window.scrollTo(0,0);
			if($(".numbers").length){
				$(window).scroll(testScroll);
			}
			$(".animPonuka").addClass("aniview");
			let elements = document.getElementsByClassName("animPonuka")
			console.log(elements[0]);
			elements[0].setAttribute('data-av-animation',"fadeInTopLeft");
			elements[1].setAttribute('data-av-animation',"fadeInDown");
			elements[2].setAttribute('data-av-animation',"fadeInTopRight");
			elements[3].setAttribute('data-av-animation',"fadeInBottomLeft");
			elements[4].setAttribute('data-av-animation',"fadeInUp");
			elements[5].setAttribute('data-av-animation',"fadeInBottomRight");

			if($(window).width() > 500){
				$('.aniview').AniView();
			}
		},250);
		setTimeout(function(){
				$("#pre-loader").css('opacity', '0');
				$("#pre-loader").css('pointer-events', 'none');
		},1600)
	},500);

})

