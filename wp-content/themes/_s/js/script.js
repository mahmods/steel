jQuery(document).ready(function ($) {
    "use strict";
    
    $(".carosle-slider").slick({
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots:true,
        responsive: [
            {
                breakpoint: 805,
                settings: {
                    slidesToShow: 2, // Number of the visible slides in Tablets
                }
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1, // Number of the visible slides in Mobile
                }
            },
        ],
    });
    
    $(".gallery-slider").slick({
        autoplay:true,
        autoplaySpeed:5000,
        speed:500,
        asNavFor:".gallery-thumbs",
    });

    $(".gallery-thumbs").slick({
        asNavFor:".gallery-slider",
        focusOnSelect:true,
        slidesToShow:5,
        slidesToScroll:1,
        responsive: [
            {
                breakpoint: 805,
                settings: {
                    slidesToShow: 3, // Number of the visible slides in Tablets
                }
            },
            {
                breakpoint: 490,
                settings: {
                    slidesToShow: 2, // Number of the visible slides in Mobile
                }
            },
        ],
    });

    
});