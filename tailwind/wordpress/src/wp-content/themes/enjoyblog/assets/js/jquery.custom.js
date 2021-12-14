
(function($){ //create closure so we can safely use $ as alias for jQuery

    $(document).ready(function(){

        "use strict";

        /*-----------------------------------------------------------------------------------*/
        /*  Superfish Menu
        /*-----------------------------------------------------------------------------------*/
        // initialise plugin
        var example = $('.sf-menu').superfish({
            //add options here if required
            delay:       100,
            speed:       'fast',
            autoArrows:  false  
        }); 

        /*-----------------------------------------------------------------------------------*/
        /*  bxSlider
        /*-----------------------------------------------------------------------------------*/
        $('.owl-carousel').owlCarousel({
            autoplay: true,
            autoplayHoverPause: true,
            loop: true,
            dots: true,
            nav:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }                       
        }) 

        $('#featured-content .owl-carousel').show();

        /*-----------------------------------------------------------------------------------*/
        /*  Back to Top
        /*-----------------------------------------------------------------------------------*/
        // hide #back-top first
        $("#back-top").hide();

        $(function () {
            // fade in #back-top
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#back-top').fadeIn('200');
                } else {
                    $('#back-top').fadeOut('200');
                }
            });

            // scroll body to 0px on click
            $('#back-top a').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });                          

    });

})(jQuery);

/* Sticky Sidebar */
jQuery('.sidebar').theiaStickySidebar({
    additionalMarginTop: 20,
    additionalMarginBottom: 5
});  

jQuery('.no-admin-bar .left_sidebar').theiaStickySidebar({
    additionalMarginTop: 20,
    additionalMarginBottom: 5
}); 

jQuery('.admin-bar .left_sidebar').theiaStickySidebar({
    additionalMarginTop: 52,
    additionalMarginBottom: 5
}); 