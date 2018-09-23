$(window).on('load resize', function(){
    if ($(window).width() <= 899){
        $('body').removeClass('desktop').addClass('mobile');
    } else {
        $('body').removeClass('mobile').addClass('desktop');
    }
});
$(document).ready(function () {
    $('#site').append('<div class="overlay hidden"></div>');
    $("nav#main .toggle").on('touch click', function(){
        $("nav#main .navigation,.overlay").toggleClass('hidden');
        $("nav#main .toggle").toggleClass('active');
    });
    $(".overlay").on('touch click', function(){
        $("nav#main .navigation,.overlay").addClass('hidden');
        $("nav#main .toggle").removeClass('active');
    });
    $('nav#main ul.menu').find('li:has(ul)').children('a').removeAttr('href').addClass("submenu");
    $('nav#main ul.menu li a.submenu').on('touch click', function(){
        $(this).toggleClass("active").closest('li').find('ul').toggleClass('active');
    });
    $("nav#main .navigation ul.menu").prepend('<div class="nav-header">Menu</div>');
    $('nav#main .navigation ul.menu li a.submenu').append('<span></span>');
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            // do stuff
        } else {
            // do other stuff
        }
    });
    $("").on('touch click', function(){
        var $this = $("");
        if ($this.hasClass("inactive")) {
            // do stuff
        }
        else {
            // do other stuff
        }
    });
 });