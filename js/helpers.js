(function($) {
    /* Off-Canvas Menu */
    $('.navigation-button').sidr({
        name: 'sidr-main',
        side: 'left',
        renaming: false,
        displace: false,
        source: '.main-navigation'
    });

    // Show hidden nav icon
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 200) {
            $('.icon').css('position', 'fixed');
            $('.icon').css('top', '30px');
            $('.icon').css('left', '30px');
            $('.icon').css('background', 'black');
            $('.icon').css('padding', '10px');
        } else {
            $('.icon').css('position', 'absolute');
            $('.icon').css('top', '0px');
            $('.icon').css('left', '0px');
            $('.icon').css('background', 'transparent');
            $('.icon').css('padding', '0px');
        }
    });
})(jQuery);
