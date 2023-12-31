/* JS Document */

AOS.init();

$(document).ready(function () {
	"use strict";

	/* 	1. Vars and Inits */

	var ctrl = new ScrollMagic.Controller();

	setHeader();
	initMenu();
	
	$(window).on('resize', function () {
		setHeader();

		setTimeout(function () {
			$(window).trigger('resize.px.parallax');
		}, 375);
	});

	$(document).on('scroll', function () {
		setHeader();
	});

	/* 	2. Set Header */

	function setHeader() {
		var header = $('.header');

		if ($(window).scrollTop() > 91) {
			header.addClass('scrolled');			
			$('.header.scrolled .logo_container img').attr('src','assets/images/logo_black.png'); 
			
		}
		else {
			header.removeClass('scrolled');
			$('.header .logo_container img').attr('src','assets/images/logo.png');
		}
	}

	/* 	3. Init Menu */

	function initMenu() {
		if ($('.menu').length) {
			var menu = $('.menu');
			var hamburger = $('.hamburger');
			var close = $('.menu_close');

			hamburger.on('click', function () {
				menu.toggleClass('active');
			});

			close.on('click', function () {
				menu.toggleClass('active');
			});
		}
	}

	


});

$('.logolist').owlCarousel({
	loop: true,
	margin: 30,
	nav: true,
	autoplay:true,
	dots: false,
	responsive: {
		0: {
			items: 3
		},
		600: {
			items: 6
		},
		1000: {
			items: 9
		}
	}
})
$(".owl-prev").html('<i class="fa fa-caret-left" aria-hidden="true"></i>');
$(".owl-next").html('<i class="fa fa-caret-right" aria-hidden="true"></i>');

$('.partnerSlider').owlCarousel({
	loop: true,
	margin: 10,
	dots: false,
	smartSpeed: 300,
	autoplay:true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 2,
			nav: true
		},
		600: {
			items: 2,
			nav: false
		},
		1000: {
			items: 3,
			nav: true,
			loop: false
		}
	}

})
$(".owl-prev").html('<i class="fa fa-caret-left" aria-hidden="true"></i>');
$(".owl-next").html('<i class="fa fa-caret-right" aria-hidden="true"></i>');