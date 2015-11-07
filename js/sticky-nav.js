jQuery(document).ready(function ($) {
    var top = $('.nav-menu').offset().top - parseFloat($('.nav-menu').css('marginTop').replace(/auto/, 100));
    $(window).scroll(function (event) {
        // what the y position of the scroll is
        var y = $(this).scrollTop();

        // whether that's below the form
        if (y >= top) {
            // if so, add the fixed class
            $('.nav-menu').addClass('fixed');
        } else {
            $('.nav-menu').removeClass('fixed');
        }
    });
});