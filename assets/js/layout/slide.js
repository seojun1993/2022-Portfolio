    let slideWrapper = document.getElementsByClassName('carousel_inner'),
    slideContainer = document.getElementsByClassName('slide_wrap'),
    slides = document.getElementsByClassName('slide'),
    slidesCount = slides.length,
    currentIndex = 0,
    topHeight = 0,
    topWidth = 0,
    Prev = document.getElementById('prev'),
    Next = document.getElementById('next');
    
    console.log(slidesCount);
    // 슬라이드의 높이 확인하여 부모의 높이로 지정하기
    function CalculateTallestSlide(){
    
    for(let i=0; i<slidesCount; i++){
        if(slides[i].offsetHeight > topHeight){
            topHeight = slides[i].offsetHeight;
        }
    }
    slideWrapper[0].style.height = topHeight + 'px';
    slideContainer[0].style.height = topHeight + 'px';
    }
    
    CalculateTallestSlide();
    
    // 슬라이드가 있으면 가로로 배열하기
    for(let i=0; i<slidesCount; i++){
    slides[i].style.left = i * 100 + '%';
    }
    
    // 슬라이드 이동 함수
    function goToSlide(idx){
    slideContainer[0].style.left = idx * -100 + '%';
    slideContainer[0].classList.add('animated');
    currentIndex = idx;
    
    updateNav();
    }
    
    // 버튼기능 업데이트 함수
    function updateNav(){
    
    // 처음일 때
    if(currentIndex == 0){
        prev.classList.add('disabled');
    }else{
        prev.classList.remove('disabled');
    }
    
    // 마지막일 때
    if(currentIndex == slidesCount - 1){
        Next.classList.add('disabled');
    }else{
        Next.classList.remove('disabled');
    }
    }
    
    // 버튼을 클릭하면 슬라이드 이동시키기
    Next.addEventListener('click', function(e){
    e.preventDefault();
    
    if(currentIndex < slidesCount - 1){
        goToSlide(currentIndex + 1);
    }else{
        goToSlide(0);
    }
    })
    
    Prev.addEventListener('click', function(e){
    e.preventDefault();
    
    if(currentIndex > 0){
        goToSlide(currentIndex - 1);
    }else{
        goToSlide(slidesCount - 1);
    }
    })
    
    // 첫번째 슬라이드 먼저 보이도록 하기
    goToSlide(0)