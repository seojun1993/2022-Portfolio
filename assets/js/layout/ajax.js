$(document).ready(function () {
    let ListTarget = $('.portfolio_article').find('.list_inner').find('.list');
    ListTarget.each(function(e){
        $(this).on('click', function(){
            let thisClass = $(this).find('a').attr('class');
            listOutput(thisClass);
        })
    })

    $('.work_list button, .work_list .overlay').on('click', function(){
        $('.work_list').hide();
        $("html").css("overflow", "visible");
    })

    function listOutput(e){
        $('.work_list').show();
        $("html").css("overflow", "hidden");
        $('#result').html('<ul class="list_content"></ul>')

        $.ajax({
            url: "list.json",
            type: "GET",
            dataType : 'json',
            success: function (data) {
                let list = data[e][0].subject,
                    listTag = '';
                    
                    listTitle = data[e][0].title;
                    listlink = data[e][0].link;

                    for(let i = 0; i < list.length; i++){
                        listTag += '<li><a href="' + list[i].link + '" target="_blank"><dl><dt>'+ list[i].title +'</dt><dd>'+ list[i].link +'</dd></dl></a></li>'
                    }
                    $('#result').prepend('<h3>' + listTitle + '</h3><a href="'+ listlink +'" target="_blank">사이트 보러가기<i class="material-icons">arrow_forward</i></a>');
                    $('.list_content').html(listTag);
            }
        });
    }
})