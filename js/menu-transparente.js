$(document).ready(function() {

    $('#slider').nivoSlider();
    $('#tab-container').easytabs();
    // Simular Toggle Pues no me esta funcionando bien.
    var togg = 0;
    $("#btncolapse").click(function() {
        if (togg === 0) {
            $('.colapse_options').css({'display': 'flex'});
            togg++;
        } else {
            $('.colapse_options').css({'display': 'none'});
            togg--;
        }
    });

    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;

    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function() {
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top

        if (scroll_top > sticky_navigation_offset_top) {
            $('#sticky_navigation').css({'position': 'fixed', 'top': 0, 'left': 0, 'width': '100%', 'opacity': 0.75});
            $('#logofffocus').css({'width': '35px', 'height': '35px', 'visibility': 'visible'});
            $('#contactsocial').css({'visibility': 'visible'});
        } else {
            $('#sticky_navigation').css({'position': 'relative', 'opacity': 1});
            $('#logofffocus').css({'width': '0px', 'height': '0px', 'visibility': 'hidden'});
            $('#contactsocial').css({'visibility': 'hidden'});
        }
    };

    // run our function on load
    sticky_navigation();

    // and run it again every time you scroll
    $(window).scroll(function() {
        sticky_navigation();
    });

});