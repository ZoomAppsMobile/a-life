var newdata = 0;
var page = 1;
$(document).ready(function () {
    AOS.init({
        offset: 0,
        duration: 600,
        easing: 'ease-in-sine',
        delay: 100,
//            disable: window.innerWidth < 768
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,

        navText: [
            "<i class='fa fa-caret-left'></i>",
            "<i class='fa fa-caret-right'></i>"
        ],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        },
        nav: true
    })

    $('.carousel').carousel({
        interval: 3000,
        pause: "false"
    });
});