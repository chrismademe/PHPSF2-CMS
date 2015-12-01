$(document).ready(function() {

    // Open Menu
    $('.navigation-toggle').on('click', function(e) {
        e.preventDefault();
        $('.mobile-navigation').toggleClass('is-open');
    });

    // Close Menu
    $('.mobile-navigation .close').on('click', function(e) {
        e.preventDefault();
        $('.mobile-navigation').removeClass('is-open');
    });

});
