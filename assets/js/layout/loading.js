$(document).ready(function(){
    // 로딩 animate
    setTimeout(function(){
        $('.loading-line').addClass('noline').queue(function(){
            $('.loading').addClass('animate');
        });
    },500);
    setTimeout(function(){
        $('.loading').remove();
    },2500)
})