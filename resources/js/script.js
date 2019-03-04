$(document).ready(function() {
    
    /* Sticky Navigation */
    $('.js--section-tutorials').waypoint(function(direction) {
        if(direction == "down")
        {
            $('nav').addClass('sticky');
        }
        else
        {
            $('nav').removeClass('sticky');
        }
    }, {offset: '60px;'});
    
    /* Scroll on buttons */
    $('.js--scroll-to-tutorials').click(function() {
        $('html, body').animate({scrollTop: $('.js--section-tutorials').offset().top}, 1000);
    });
    
    /* Mobile nav */
    $('.js--nav-icon').click(function() {
        var nav = $('.js--main-nav');
        nav.slideToggle(200);
        $('.sticky').css("height","350px;");
        $('.sticky').css("font-color","black");
    });
});