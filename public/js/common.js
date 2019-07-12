$(function () {
    $(".tabs-nav a").on("click", function () {

        $(".tabs-nav li").removeClass("active");
        $(this).parent().addClass('active');

        var currentTab = $(this).attr("href");
        $(".tabs-content .tab-item").removeClass("tabs-open");
        $(currentTab).addClass("tabs-open");

        return false;
    });
});

$(".slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    cssEase: "linear",
    prevArrow: $(".slider-prev"),
    nextArrow: $(".slider-next")
});

if($(window).width() > "991") {
    $(".order-slider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: "linear",
        prevArrow: $(".order-prev"),
        nextArrow: $(".order-next")
    });
}

$(".room-slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: "linear",
    prevArrow: $(".room-prev"),
    nextArrow: $(".room-next"),
    responsive: [
        {
            breakpoint: 540,
            settings: {
                dots: false
            }
        }
    ]
});

$(".anchor").on("click", function() {
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;
    $("html:not(:animated),body:not(:animated)").animate({
        scrollTop: destination
    }, 800);
    return false;
});

if($(window).width() < "1200") {
    $(".phone-call-back-drop > a").on("click", function(evt){
        evt.preventDefault();
        $(this).parent().toggleClass("open-drop");
    })

    $(document).on('click', function(e) {
        if (!$(e.target).closest(".phone-call-back-main-list").length) {
            $(".phone-call-back-drop").removeClass("open-drop");
        }
        e.stopPropagation();
    });
}

$("[data-mask='callback-catalog-phone']").mask("+380 99 99 99 999");

$(".room-slider").find(".slick-cloned a").removeAttr("data-fancybox");

$(".link-in-svg").click(function(e) {
    e.preventDefault();
    location.href =  $(this).attr("data-href");
});


$(".preview").on("click", function() {
    $(this).fadeOut();
});

$(".tabs-nav a").on("click", function(){
    $(".preview").fadeOut();
});