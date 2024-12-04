// INSPINIA Landing Page Custom scripts
$(document).ready(function () {

    // Highlight the top nav as scrolling
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 80
    })

    // Page scrolling feature
    $('a.page-scroll').bind('click', function(event) {
        var link = $(this);
        var target = $(link.attr('href'));
        if (target.length) {
            $('html, body')
                .stop()
                .animate({
                    scrollTop: target.offset().top - 50
                }, 500);
        }
        event.preventDefault();
        $("#navbar").collapse('hide');
    });

});

// Activate WOW.js plugin for animation on scrol
new WOW().init();