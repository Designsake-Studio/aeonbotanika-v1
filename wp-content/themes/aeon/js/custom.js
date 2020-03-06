// Owl Animation 
jQuery(document).ready(function($) {
    $( '.home-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 0,
        nav: false,
        mouseDrag: false,
        touchDrag: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        smartSpeed:4250,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            },
            1200:{
                items:1
            }
        }
    })
});