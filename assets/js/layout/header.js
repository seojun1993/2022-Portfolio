$(document).ready(function () {
    let windowWidth = $(window).width();

    // 상단 Nav
    let Target = $('nav li:not(".resume")');
    headerHeight = $('header').height();

    Target.on('click', function (e) {
        e.preventDefault();
        let orgLink = $(this).find('a').attr('href');
        transLink = orgLink.slice(1);

        let thisName = $('#' + transLink + ''),
            thisOffset = thisName.offset().top;

        $('html, body').animate({
            scrollTop: thisOffset - headerHeight - 37.5
        }, 500)
    })
    
    $(window).on('scroll', function () {
        let scrollPos = $(window).scrollTop() + headerHeight,
            articleOffset = scrollPos + 100;

        // 상단 메뉴 Active 클래스
        if (articleOffset > $('#home').offset().top) {
            HighlightLink('home');
        }
        if (articleOffset > $('#about').offset().top) {
            HighlightLink('about');
        }
        if (articleOffset > $('#portfolio').offset().top) {
            HighlightLink('portfolio');
        }
        if (articleOffset > $('#skills').offset().top) {
            HighlightLink('skills');
        }
        if (articleOffset > $('#timeline').offset().top) {
            HighlightLink('timeline');
        }
        if (articleOffset > $('#contact').offset().top ||
            scrollPos + $(window).height() === $(document).height()) {
            HighlightLink('contact');
        }

        function HighlightLink(link) {
            $('nav .active').removeClass('active');
            $('nav').find('[href="#' + link + '"]').parent().addClass('active');
        }
        // 상단 메뉴 Active 클래스
    // 상단 Nav

        // 스크롤 시 Header에 클래스
                if (scrollPos > headerHeight) {
                    $('header').addClass('scrolling');
                    $('.logo').find('img').attr('src', 'assets/img/common/w_logo.png')
                }else{
                    $('header').removeClass('scrolling');
                    $('.logo').find('img').attr('src', 'assets/img/common/logo.png');
                }
        // 스크롤 시 Header에 클래스
    })

    // 이력서 버튼
    $('.resume').on('click', function(){
        openPop();
    })
    
    function openPop(){
        let popup = window.open('assets/resume.pdf','이력서 팝업','height=' + screen.height + ',width=' + screen.width + 'fullscreen=yes');
    }
    // 이력서 버튼
})