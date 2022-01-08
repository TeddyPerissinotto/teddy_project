$(document).ready(function(){

    $('.block-sliders').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
    })

    $('.block-slider').imgLiquid({
        fill: true,
        horizontalAlign: "center",
        verticalAlign: "top"
    });


})