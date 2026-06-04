$(document).ready(function () {

    $('.content-slider').slick({
        arrows: true,
        asNavFor: '.image-slider'
    });

    $('.image-slider').slick({
        arrows: false,
        fade: true,
        asNavFor: '.content-slider'
    });

    $('.nav-link').on('click', function () {

        let slideIndex = $(this).data('slide');

        $('.content-slider')
            .slick('slickGoTo', slideIndex);

    });

});
