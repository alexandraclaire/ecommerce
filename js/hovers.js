$(document).ready(function () {
    $('.woocommerce ul.products li.product a img').hover(function () {
        $(this).stop().animate({
            opacity: .4
        }, 200);
        $('.text').removeClass('hide');
    }, function () {
        $(this).stop().animate({
            opacity: 1
        }, 500);
        $('.text').addClass('hide');
    });
});