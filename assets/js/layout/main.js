$(document).ready(function () {

    // 저작권 모달창
    $('.notice button').on('click', function(){
        $(this).parent().hide();
    })
    // 저작권 모달창
    let WindowInnerHeight = $(window).innerHeight() + 100,
        fadeInUp = $('.fadeInUp'),
        fadeInLeft = $('.fadeInLeft'),
        fadeInRight = $('.fadeInRight'),

        Countupflag = true,
        ProgressFlag = true;

    $(window).on('scroll', function () {
        let scrollPos = $(window).scrollTop();

        // 애니메이션 효과
        // 아래에서 위로
        fadeInUp.each(function () {
            $index = $(this).index();
            if (scrollPos > $(this).offset().top - WindowInnerHeight) {
                $(this).css({
                    'visibility': 'visible',
                    'animation-duration': '1s',
                    'animation-name': 'fadeInUp',
                    'animation-delay': $index * 0.15 + 's'
                });
            }
        })
        // 아래에서 위로

        // 왼쪽에서 오른쪽으로
        fadeInLeft.each(function () {
            $index = $(this).index();
            if (scrollPos > $(this).offset().top - WindowInnerHeight) {
                $(this).css({
                    'visibility': 'visible',
                    'animation-duration': '1s',
                    'animation-name': 'fadeInLeft',
                    'animation-delay': $index * 0.15 + 's'
                });
            }
        })
        // 왼쪽에서 오른쪽으로

        // 오른쪽에서 왼쪽으로
        fadeInRight.each(function () {
            $index = $(this).index();
            if (scrollPos > $(this).offset().top - WindowInnerHeight) {
                $(this).css({
                    'visibility': 'visible',
                    'animation-duration': '1s',
                    'animation-name': 'fadeInRight',
                    'animation-delay': $index * 0.15 + 's'
                });
            }
        })
        // 오른쪽에서 왼쪽으로
        // 애니메이션 효과

        // 카운트업
        let count = $('.count'),
            maxArr = [];
        if (scrollPos > count.offset().top - WindowInnerHeight + WindowInnerHeight / 3) {

            if (Countupflag) {
                count.each(function () {
                    let $this = $(this),
                        minValue = $this.attr('data-from'),
                        maxValue = $this.attr('data-to');
                    maxArr.push(maxValue);
                    countUp();

                    function countUp() {
                        minValue++;
                        for (let i = 0; i < count.length; i++) {
                            if (minValue > maxArr[i]) return;
                            $('.count').eq(i).text(minValue);
                        }
                    }

                    countStart = setInterval(countUp, 100);
                    Countupflag = false;
                })
            }
        }
        // 카운트업

        // 프로그레스
        let progress = $('.progress_inner'),
            progressArr = [];

        if (scrollPos > progress.offset().top - WindowInnerHeight + WindowInnerHeight / 3) {
            if (ProgressFlag) {
                progress.each(function () {
                    let $this = $(this),
                        minValue = $this.attr('data-minvalue'),
                        maxValue = $this.attr('data-maxvalue');
                    progressArr.push(maxValue);
                    valueUp();

                    function valueUp() {
                        minValue++;
                        for (let i = 0; i < progress.length; i++) {
                            if (minValue > progressArr[i]) return;
                            progress.eq(i).children().find('.bar').css('width', minValue + '%');
                        }
                    }

                    valueStart = setInterval(valueUp, 10);
                    ProgressFlag = false;
                })
            }
        }
        // 프로그레스

    })

    // 아코디언
    let Accodianli = $('.process_inner ol li');

    Accodianli.on('click', function () {
        if ($(this).hasClass('active')) {
            Accodianli.find('.acc_body').slideUp();
            Accodianli.removeClass('active');

            $(this).find('span').html('add');
            $(this).find('.acc_body').slideUp();
        } else {
            Accodianli.removeClass('active');
            Accodianli.find('span').html('add');
            Accodianli.find('.acc_body').slideUp();

            $(this).addClass('active');
            $(this).find('span').html('remove');
            $(this).find('.acc_body').slideDown();
        }
    })
    // 아코디언

    // 바로가기 버튼
    let contactBtn = $('.contact_btn'),
        aboutBtn = $('.about_btn'),
        portfolioBtn = $('.portfolio_btn');

    contactBtn.on('click', function () {
        scrollBtn(contactBtn);
    })

    aboutBtn.on('click', function () {
        scrollBtn(aboutBtn);
    })

    portfolioBtn.on('click', function(){
        scrollBtn(portfolioBtn);
    })

    function scrollBtn(e) {
        let headerHeight = $('header').height();
        let target = e.slice('-3');
        let targetText = target.text();
        let transTarget = (targetText.toLowerCase());

        $('html, body').animate({
            scrollTop: $('#' + transTarget + '').offset().top - headerHeight -37.5
        },500)
    }
    // 바로가기 버튼

    // 폼태그 전송
    $('form button').on('click', function(){
        let formTrue = confirm('보내시겠습니까?');
        if(formTrue){
            $('form').submit();
        }
    })
    // 폼태그 전송
})