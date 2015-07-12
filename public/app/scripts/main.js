$(document).ready(function(){
   
   window.addEventListener("scroll", function() {
        var menu_bar = $('#menu');
    var header_height = $('.header_logo').outerHeight();
        if (window.scrollY > header_height) {
            $('.header-logo').fadeOut('slow',function(){
                menu_bar.addClass('navbar-fixed');
                menu_bar.fadeIn('slow');
            });
        }
        else {
            $('.header-logo').fadeIn('slow',function(){
                if(menu_bar.hasClass('navbar-fixed')){
                     menu_bar.removeClass('navbar-fixed');     
                }
            });
        }
    },false);

    $('.slider').slider({
        full_width: true,
        indicators:false
    });

    //activate menu items on click
    (function (){
        var menu_items = $('nav ul li a');
        $.each(menu_items,function(index,item){
            if(window.location.pathname == item.pathname){
                $('nav ul li.active').removeClass('active');
                $('nav ul li a[href="'+item.pathname+'"]').parent().addClass("active");
            }
        })
    })()
});

