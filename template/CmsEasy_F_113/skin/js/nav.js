$(document).ready(function(){
    $('.codepic').hover(function(){$('.code').fadeIn()},function(){$('.code').fadeOut()});
    $('.backup').click(function(){
        $('body,html').animate({scrollTop:0},500)
    });
    $(".backup").hide();
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>500){
                $(".backup").fadeIn(1000);
            }else{
                $(".backup").fadeOut(1000);
            }
        });
    });
    $('#focus2').xFocus({text: false});
    $('.left li').hover(function(){$(this).find("ul").slideDown()},function(){setTimeout($(this).find("ul").slideUp(),1000)});
    $('.left li li:last').css('border','0');
});