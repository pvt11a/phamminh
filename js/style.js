$(document).ready(function(){
    $('#main_menu ul li').hover(function(){
        $(this).find("ul:first").css({ display: "none"}).stop().fadeIn(400)	;
    },function(){
        $(this).find("ul:first").css({ display: "block"}).stop().fadeOut(400)	;
    }); 
    
   var url = document.location.href;
    $('nav#main_menu ul li a').each(function(){
        if($(this).attr('href') == url) {
            $(this).addClass('active');
            
        }
    });
})