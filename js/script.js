$(function () {
    var videos = $(".post-entry p>iframe").addClass("embed-responsive-item");
    videos.wrap("<div class='embed-responsive embed-responsive-16by9'></div>");



    $('.slide').owlCarousel({

        loop: true,
        margin: 10,
        autoplay: true,
        responsiveClass: true,
        dots: false,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        },
    });



    $(`.owl-item .active`).addClass("hello")
    console.log(
        $(`.owl-stage .owl-item .active:first-child`).addClass("hello")

    );

    $("#search").click(function () {
        $("#sform").toggleClass("show")
    })



});