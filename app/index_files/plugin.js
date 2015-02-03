/*===================================
=            Page Loader            =
===================================*/

//<![CDATA[
$(window).load(function() {
    $('#status').delay(300).fadeOut();
    $('#preloader').delay(300).fadeOut('show');
    $('body').delay(550).css({'overflow':'visible'});
});
//]]>


/*=========================================
=            Blur Image Header            =
=========================================*/

// Function blur img in header
        (function() {
            $(window).scroll(function() {
                var oVal;
                oVal = $(window).scrollTop() / 240;
                return $(".blur").css("opacity", oVal);
            });

        }).call(this);


/*=======================================
=            WOW Activation             =
=======================================*/

var wow = new WOW(
    {
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true
    }
);
wow.init();

/*=====================================
=            Smoot Scroll          =
=====================================*/

// Navigation Scroll - ljepo radi materem
      $('.nav li a').click(function(event) {
          var id = $(this).attr("href");
          var offset = 60;
          var target = $(id).offset().top - offset;
          $('html, body').animate({
              scrollTop: target
          }, 1500,'easeInOutExpo');
          event.preventDefault();
      });

      $('.head-info a').click(function(event) {
          var id = $(this).attr("href");
          var offset = 60;
          var target = $(id).offset().top - offset;
          $('html, body').animate({
              scrollTop: target
          }, 3000, 'easeInOutExpo');
          event.preventDefault();
      });

/*==================================
=            Flexslider            =
==================================*/

jQuery(document).ready(function($) {
    // creat the slider
    $('.testimonial-wrapper').flexslider({
        selector: ".tm-testimonial > li",
        animation: "slide",
        controlNav: false,
        slideshow: true,
        smoothHeight: true,
        start: function(){
            $('.tm-testimonial').children('li').css({
                'opacity': 1,
                'position': 'relative'
            });
        }
    });

    // Open the testimonial modal
    $('.see-all').on('click', function() {
       $('.tm-testimonial-all').addClass('is-visible');
    });

    //Close the Testimonial modal page
    $('.tm-testimonial-all .close-btn').on('click', function(){
        $('.tm-testimonial-all').removeClass('is-visible');
    });

    $(document).keyup(function(event) {
        /* check if user has pressed 'esc' */
        if(event.which=='27'){
            $('.tm-testimonial-all').removeClass('is-visible');
        }
    });


    // Build the grid for the testimonial modal page
    $('.testimonial-all-wrapper').children('ul').masonry({
        itemSelector: '.tm-testimonial-item'
    });


});

/*===============================
=            Counter            =
===============================*/

// Count elements
    $('.count').each(function() {
        var $this   = $(this);
        $this.data('target', parseInt($this.html()));
        $this.data('counted', false);
        $this.html('0');
    });
    $(window).bind('scroll', function() {
        var speed   = 6000;
        $('.count').each(function() {
            var $this   = $(this);
            if(!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                $this.data('counted', true);
                $this.animate({dummy: 1}, {
                    duration: speed,
                    step:     function(now) {
                        var $this   = $(this);
                        var val     = Math.round($this.data('target') * now);
                        $this.html(val);
                        if(0 < $this.parent('.value').length) {
                            $this.parent('.value').css('width', val + '%');
                        }
                    }
                });
            }
        });
    }).triggerHandler('scroll');


/*===========================
=            OWL            =
===========================*/


$(document).ready(function() {
    $('#main-owl-blog').owlCarousel({

        // autoPlay: 5000, //Set AutoPlay to 3 seconds
        slideSpeed : 5000,
        items: 3,
        itemsDesktop: true,
        itemsDesktopSmall: [980,1],
        // navigation: true,
        pagination: true,

    });
});

/*===================================
=            PrettyPhoto            =
===================================*/

$(document).ready(function() {
    $("a[data-rel^='prettyphoto']").prettyPhoto();
});








