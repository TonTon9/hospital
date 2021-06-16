$(".menu__bur").click(function(){
    $(this).toggleClass("active__bur");
    $(".header__info").toggleClass("header__info__active");
    $("body").toggleClass("disabled");
});
$(".doctors__carts").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    draggable: false,
    swipe: false,
    allowTouchMove: false,
    responsive:[
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 2                
            }
        },
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 2,
                centerMode: true                
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1
                //centerMode: true                
            }
        }
    ]
});
$('.doctor__nextb').on('click', function() {
    $('.doctors__carts').slick('slickNext');
});
$('.doctor__back').on('click', function() {
    $('.doctors__carts').slick('slickPrev');
});
$('#call,.header__address-media').on('click', function() {
    $("body").addClass("disabled");
    $(".popup").addClass("showingDark");
    $(".modal__body").addClass("showing");
});
$('.crest').on('click', function() {
    $("body").removeClass("disabled");
    $(".popup").removeClass("showingDark");
    $(".modal__body").removeClass("showing");
});
let aboutBlock = document.querySelector(".about");
let aboutPositionDefault = aboutBlock.getBoundingClientRect().top+pageYOffset- aboutBlock.getBoundingClientRect().height;
let aboutPosition;
console.log(aboutPositionDefault)
$(window).scroll(function(){    
    aboutPosition = aboutBlock.getBoundingClientRect().y;
    let translatedistanse = String(pageYOffset-aboutPositionDefault);
    if(pageYOffset>aboutPositionDefault && translatedistanse<300){   
        $(".about__img").css({"transform":"translateY("+translatedistanse+"px)"});
        $(".about__text").css({"transform":"translateX("+translatedistanse+"px)"});        
    }
    console.log(pageYOffset)
});