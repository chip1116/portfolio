
function fadeAnime(){
    $('.fadeUpTrigger').each(function(){ 
        let elemPos = $(this).offset().top-50; 
        let scroll = $(window).scrollTop();
        let windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeUp');
        }else{
            $(this).removeClass('fadeUp'); 
        }
    });
    $('.fadeDownTrigger').each(function(){
        let elemPos = $(this).offset().top-10;
        let scroll = $(window).scrollTop(); 
        let windowHeight = $(window).height();
        if (scroll >= elemPos - windowHeight){
        $(this).addClass('fadeDown');
    }else{
        $(this).removeClass('fadeDown');
    }
    });
}

    $(window).scroll(function (){
    fadeAnime();
    });