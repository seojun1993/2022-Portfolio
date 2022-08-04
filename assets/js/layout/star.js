    $(document).ready(function(){
        
            $('.article_wrap').append('<div class="star_box"></div>')
            for(let i = 0; i < 25; i++){
                $('.star_box').append('<div class="star"></div>');
            }

        $('.star').each(function(){
            $(this).css({
                'top':Math.random() * 100 + '%',
                'left': Math.random() * 100 + '%',
                'animation-duration': ((Math.random()) * 3) + 2 + 's',
            })
        })
    })