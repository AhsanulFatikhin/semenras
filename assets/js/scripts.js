/*********************************************************************************

	Template Name: Salina - Construction Bootstrap4 Template
	Description: A perfect construction template for build beautiful and unique construction websites. It comes with nice and clean design.
	Version: 1.0

    Note: This is scripts js. All custom scripts here.

**********************************************************************************/

/*===============================================================================
			[ INDEX ]
=================================================================================

    Header Style 1 Sticky Header
    Header Style 2 Sticky Heade
    Header Style 2 Padding
    Banner 2 Height
    Progress Bar Effect
    Breadcrumb Padding 

=================================================================================
			[ END INDEX ]
================================================================================*/

(function ($) {
    'use strict';



    /* Header Style 1 Sticky Header */
    if($('.header-style-1.sticky-header').length){
        
        $(window).on('scroll', function () {

            var scrollPos = $(this).scrollTop();
              
            if (scrollPos > 300) {
                $('.sticky-header').addClass('is-sticky');
            } else {
                $('.sticky-header').removeClass('is-sticky');
            }

        });

    }


    /* Header Style 2 Sticky Header */
    if($('.header-style-2.sticky-header').length){
        var headerOffset = $('.header-style-2').offset().top;

        $(window).on('scroll', function () {

            var scrollPos = $(this).scrollTop();

            if (scrollPos > headerOffset + 500) {
                $('.sticky-header').addClass('is-sticky');
            } else {
                $('.sticky-header').removeClass('is-sticky');
            }

        });

    }



    /* Header Style 2 Padding */
    if($('.header-style-2.header-transparent').length){
        if($('.header-style-2 .header-top-area').length){
            var headerTopHeight = $('.header-style-2 .header-top-area').height();
            
            $('.header-style-2 .header-bottom-area').css('top', headerTopHeight);

            $(window).on('scroll', function () {
                if($(this).scrollTop() > 300){
                    $('.header-style-2.is-sticky .header-bottom-area').css('top', 0);
                } else{
                    $('.header-style-2 .header-bottom-area').css('top', headerTopHeight);
                }
            });

        }
    }


    /* Banner 2 Height */
    if( $('.banner-style-2').length ){
        var headerHeight = $('.header').innerHeight();
        $('.banner-style-2').css('min-height', 'calc( 100vh - ' + headerHeight + 'px');
    }




    /* Progress Bar Effect */
    $(window).on('scroll', function () {

        function winScrollPosition() {
            var scrollPos = $(window).scrollTop(),
                winHeight = $(window).height();
            var scrollPosition = Math.round(scrollPos + (winHeight / 1.2));
            return scrollPosition;
        }


        var trigger = $('.progress-bar');
        if (trigger.length) {
            var triggerPos = Math.round(trigger.offset().top);
            if (triggerPos < winScrollPosition()) {
                trigger.each(function () {
                    $(this).addClass('fill');
                });
            }
        }

    });



    /* Breadcrumb Padding */
    if( $('.cr-breadcrumb-area').length && $('.header-transparent').length ){
        var transparentHeaderHeight = $('.header-transparent').innerHeight();
        $('.cr-breadcrumb-area').css('padding-top', transparentHeaderHeight + 'px');
    }


    /* Project Loadmore */
    $('.single-project').on('mouseenter', function(){
        $(this).find('.loadmore-btn-holder').slideDown(300);
    });
    $('.single-project').on('mouseleave', function(){
        $(this).find('.loadmore-btn-holder').slideUp(300);
    });

    

})(jQuery);