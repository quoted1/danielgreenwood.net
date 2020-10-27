
//if (typeof jQuery == "undefined") {
//    alert("jQuery is not installed");
//} else {
//    alert("jQuery is installed");
//}


$('.slick_H').slick({
    centerMode: true,
    slidesToShow: 1,
    arrows:true,
    dots: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3400,
    speed:1400,
    variableWidth: true,
    adaptiveHeight: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 3
                }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
                }
        }
    ]
});
$('.slick_V').slick({
    centerMode: true,
    slidesToShow: 1,
    arrows:false,
    dots: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3400,
    speed:1400,
    vertical: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 3
                }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                slidesToShow: 1
                }
        }
    ]
});
