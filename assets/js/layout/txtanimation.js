$(function () {
    
    let typing_speed =  100;
    let remove_speed = 100;
    let start_idx = 0;

    
    function TxtAnimation() {
        let reset;
        let typingBool = false;
        let typingIdx = 0;

        // 타이핑될 텍스트를 가져온다 
        let orgTxt = $('.typing_txt');

        // 텍스트를 배열에 담고 반복문 돌리기
        let TxtArray = [];
        for (let i = 0; i < orgTxt.length; i++) {
            TxtArray.push(orgTxt.eq(i).text());
        }

        let typingTxt = TxtArray[start_idx];
        typingTxt = typingTxt.split(""); // 한글자씩 자른다. 

        if (typingBool == false) {
            // 타이핑이 진행되지 않았다면 
            typingBool = true;
            let tyInt = setInterval(typing, typing_speed); // 반복동작 
        }

        function typing() {
            if (typingIdx < typingTxt.length) {
                // 타이핑될 텍스트 길이만큼 반복 
                $(".typing").append(typingTxt[typingIdx]);
                // 한글자씩 이어준다. 
                typingIdx++;

                if (typingIdx == typingTxt.length) {
                    reset = setInterval(Minustxt, remove_speed);
                }
            }
        }

        function Minustxt() {
            let sliceTxt = $('.typing').text().slice(-1);
            let sliceTxtIndex = $('.typing').html().lastIndexOf(sliceTxt);
            let transTxt = ($('.typing').text()).substring(0, sliceTxtIndex);
            $('.typing').html('');
            $('.typing').append(transTxt);
            reStart();
        }

        // 텍스트 다시 0 되면 리셋하고 함수 재실행
        function reStart() {
            if ($('.typing').text().length == 0) {
                clearInterval(reset);
                start_idx++
                if (start_idx == orgTxt.length) {
                    start_idx = 0;
                }
                TxtAnimation();
            }
        }
    }
    TxtAnimation();
})