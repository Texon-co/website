$(window).on('scroll', function () {
    $("#header").toggleClass("fix-menu", $(window).scrollTop() > 100);
    if ($('.sec2 .box1').offset().top > $(window).scrollTop() + 250) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $('#navbarSupportedContent ul li:nth-child(1)').addClass("active");
    } else if ($('.sec3 .box1').offset().top > $(window).scrollTop() + 250) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $('#navbarSupportedContent ul li:nth-child(2)').addClass("active");
    } else if ($('.sec4 .box1').offset().top > $(window).scrollTop() + 250) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $('#navbarSupportedContent ul li:nth-child(3)').addClass("active");
    } else if ($('.sec5 .box1').offset().top > $(window).scrollTop() + 250) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $('#navbarSupportedContent ul li:nth-child(4)').addClass("active");
    } else if ($(document).height()-1000 > $(window).scrollTop()) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $('#navbarSupportedContent ul li:nth-child(5)').addClass("active");
    } else if ($(document).height()-700 > $(window).scrollTop()) {
        $('#navbarSupportedContent ul li').removeClass("active");
        $('#navbarSupportedContent ul li:nth-child(6)').addClass("active");
    }
});


function goTo(el, id) {
    //  loading=true;
    // $('.navbar li').removeClass("active");
    //$(el).toggleClass("active");
    if (id != 6) {
        $('html, body').animate({
            scrollTop: $('.sec' + id + ' .box1').offset().top - 200
        }, 500);
    } else {
        $('html, body').animate({
            scrollTop: $('footer').offset().top - 100
        }, 500);
    }
}

$(".slider").slick({
    dots: false,
    infinite: true,
    arrows: true,
    centerMode: true,
    autoplay: true,
    autoplaySpeed: 5000,
    prevArrow: $('.prev'),
    nextArrow: $('.next'),
    slidesToShow: 7,
    slidesToScroll: 1
});