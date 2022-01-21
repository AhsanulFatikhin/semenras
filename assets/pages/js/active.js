/*********************************************************************************

	Template Name: Salina - Construction Bootstrap4 Template
	Description: A perfect construction template for build beautiful and unique construction websites. It comes with nice and clean design.
	Version: 1.0

	Note: This is active js. Plugins activation code here.

**********************************************************************************/


/*===============================================================================
			[ INDEX ]
=================================================================================

	Fake Loader
	Scroll Up Activation
	Banner Slider Active
	Testimonial Slider
	Popular Post SLider Active
	Testimonial Slider
	Brand Logo Slider
	Team Member Slider Active
	Blog Item Slider Active
	Projects Slider Active
	Projects Popup Gallery
	Mobile Menu Activation
	Odometer Activation
	Instafeed Activation
	Footer Instafeed Activation
	Nice Select Activation
	Twitterfeed Actication
	Sticky Sidebar Activation
	Parallax Background
	Projects Filtering
	Facebook Feed

=================================================================================
			[ END INDEX ]
================================================================================*/

(function ($) {
	'use strict';

	
	/* Fake Loader */
	$('.fakeloader').fakeLoader({
		timeToHide: 1000,
		bgColor: '#c61808',
		spinner: 'spinner4',
	});





	/* Scroll Up Activation */
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 300,
	});





	/* Banner Slider Active */
	$('.banner-slider-active').slick({
		autoplay: false,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		adaptiveHeight: true,
		dots: false,
		dotsClass: 'cr-slider-dots'
	});




	/* Testimonial Slider */
	$('.testimonial-wrap').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		adaptiveHeight: true,
		dots: true,
		dotsClass: 'cr-slider-dots',
		fade: false,
	});




	/* Popular Post SLider Active */
	$('.polular-post-slider-active').slick({
		slidesToShow: 3,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: false,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});
	




	/* Testimonial Slider */
	$('.testimonial2-wrapper').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		adaptiveHeight: true,
		dots: true,
		dotsClass: 'cr-slider-dots',
		fade: false,
	});



	

	/* Brand Logo Slider */
	$('.brand-logos-slider').slick({
		slidesToShow: 6,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: false,
		responsive: [{
			breakpoint: 1199,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 450,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});





	/* Team Member Slider Active */
	$('.team-member-slider-active').slick({
		slidesToShow: 4,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: false,
		responsive: [{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});




	/* Blog Item Slider Active */
	$('.blog-item-slider-active').slick({
		slidesToShow: 3,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: false,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});


	/* Projects Slider Active */
	$('.sa-projects-slider-active').slick({
		slidesToShow: 4,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: true,
		slidesToScroll: 4,
		responsive: [{
			breakpoint: 1501,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});





	/* Projects Popup Gallery */
	$('.sa-projects-popup-active').lightGallery({
		selector: '.single-project-thumb'
	}); 





	/* Mobile Menu Activation */
	$('nav.sa-navigation').meanmenu({
		meanMenuClose: '<img src="assets/images/icons/icon-close.png" alt="close icon">',
		meanMenuCloseSize: '18px',
		meanScreenWidth: '991',
		meanExpandableChildren: true,
		meanMenuContainer: '.mobile-menu',
		onePage: true
	});



	
	/* Odometer Activation */
	if( $('.odometer').length ){

		var elemOffset = $('.odometer').offset().top;
		var winHeight = $(window).height();

		if(elemOffset < winHeight){

			$('.odometer').each(function(){
				$(this).html($(this).data('count-to'));
			});

		}

		$(window).on('scroll', function(){

			var elemOffset = $('.odometer').offset().top;

			function winScrollPosition() {
				var scrollPos = $(window).scrollTop(),
					winHeight = $(window).height();
				var scrollPosition = Math.round(scrollPos + (winHeight / 1.2));
				return scrollPosition;
			}

			if ( elemOffset < winScrollPosition()) {

				$('.odometer').each(function(){
					$(this).html($(this).data('count-to'));
				});

			}
			
		});

	}




	/* Instafeed Activation */
	if($('#sidebar-instagram-feed').length){

		var userFeed = new Instafeed({
			get: 'user',
			userId: 6665768655,
			accessToken: '6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5',
			target: 'sidebar-instagram-feed',
			resolution: 'standard_resolution',
			limit: 4,
			template: '<div class="sidebar-instafeed-single"><a href="{{link}}" target="_new"><img src="{{image}}" /><span>{{caption}}</span></a></div>',
			
			after: function() {

				$('#sidebar-instagram-feed').slick({
					slidesToShow: 1,
					infinite: true,
					autoplay: true,
					autoplaySpeed: 5000,
					arrows: false,
					dots: true,
					adaptiveHeight: true,
				});

			},
		});
		userFeed.run();

	}


	/* Footer Instafeed Activation */
	if($('#footer-instagram-feed').length){

		var userFeed2 = new Instafeed({
			get: 'user',
			userId: 6665768655,
			accessToken: '6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5',
			target: 'footer-instagram-feed',
			resolution: 'low_resolution',
			limit: 6,
			template: '<div class="sidebar-instafeed-single"><a href="{{link}}" target="_new"><img src="{{image}}" /></a></div>',
		});
		userFeed2.run();

	}




	/* Nice Select Activation */
	$('select').niceSelect();


	/* Twitterfeed Actication */
	if($('#sidebar-twitter-feed').length){

		var configProfile = {
			"profile": {"screenName": 'devitemsllc'},
			"domId": 'sidebar-twitter-feed',
			"maxTweets": 2,
			"enableLinks": true, 
			"showUser": false,
			"showTime": true,
			"showImages": true,
			"lang": 'en'
		};
		twitterFetcher.fetch(configProfile);

	}


	/* Sticky Sidebar Activation */
	$('.sticky-sidebar-active').theiaStickySidebar({
		additionalMarginTop: 30
	});


	/* Parallax Background */
	$('.bg-parallax').jarallax();


	/* Projects Filtering */
	$('.sa-projects').imagesLoaded( function() {

		var $grid = $('.sa-projects').isotope({
			itemSelector: '.sa-project-single',
			layoutMode: 'fitRows'
		});
 

		var $buttonGroup = $('.projects-filters').on( 'click', 'button', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
		}); 
 
	});




	/* Facebook Feed */
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	



})(jQuery);
