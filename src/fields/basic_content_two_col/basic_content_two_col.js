$( document ).ready(function() {
    adjustTwoColPadding($('.container_content_two_col'))

    $( window ).on('resize', function() {
        adjustTwoColPadding($('.container_content_two_col'));
    });
});

function adjustTwoColPadding(css_class) {
    let container   = $('.navbar .container');
    let offset = 0;

    if ( $( window ).width() > 1200  && $( window ).width() < 1920 ) {
        offset  = container.offset().left + 50;
    } else if ( $( window ).width() >= 768  && $( window ).width() <= 1200 ) {
        offset  = container.offset().left + 100;
    } else if ( $( window ).width() > 1920 ) {
        offset  = 120;
    } else {
        offset  = container.offset().left + 30;
    }

    css_class.css('padding', offset);
}