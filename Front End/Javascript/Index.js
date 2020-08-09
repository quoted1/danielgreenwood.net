
//if (typeof jQuery == "undefined") {
//    alert("jQuery is not installed");
//} else {
//    alert("jQuery is installed");
//}


$('.media_carousel').slick({
    centerMode: true,
    centerPadding: '250px',
    slidesToShow: 1,
    arrows:true,
    dots: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 6000,
    speed:1400,
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
