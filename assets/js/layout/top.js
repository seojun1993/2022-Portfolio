$(document).ready(function () {
    let previousScroll = 0;

    $(window).on('scroll', function () {
        // 스크롤양 체크
        let scrollPos = $(window).scrollTop(),
            htmlHeight = $(document).height() - $(window).innerHeight(),
            nowOffset = scrollPos / htmlHeight;
        $('.line').css('height', nowOffset * 100);
        // 스크롤양 체크

        var currentScroll = $(this).scrollTop();
        if (currentScroll > previousScroll){
            $('#top').css('right',-$('#top').find('a').width());
        } else {
            $('#top').css('right','20px')
        }
        previousScroll = currentScroll;
    });

    // 탑버튼
    let BackTop = $('#top > .top_btn');
    BackTop.on('click', function () {
        $('html, body').animate({
            scrollTop: 0,
        }, 500)
    })
    // 탑버튼
})