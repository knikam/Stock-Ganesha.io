$(window).on('load', function(){
    window.hi
});

$(window).on('scroll', function () {

    if($(window).scrollY >= 50){
        $('#nav').addclass("scroll");
    }else{
        $('#nav').removeClass("scroll");
    }
});