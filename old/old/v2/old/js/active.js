$('nav a').on('click', function () {
    var scrollAnchor = $(this).attr('data-scroll'),
        scrollPoint = $('section[data-anchor="' + scrollAnchor + '"]').offset().top - 34;

    $('body,html').animate({
        scrollTop: scrollPoint
    }, 200);

    return false;
});


$(window).scroll(function () {
    var windscroll = $(window).scrollTop();
    var fromBottom = $(document).height() - ($(window).scrollTop() + $(window).height());
    var scrollVal = 180;
    if (fromBottom == 0) {     // <-- scrolled to the bottom
        $('nav a.active').removeClass('active');
        $('nav a:last').addClass('active');
    } else if (windscroll > 130) {
        $('.content > .overview').each(function (i) {
            if ($(this).position().top <= windscroll + scrollVal) {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });
    } else {
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
    }
}).scroll();