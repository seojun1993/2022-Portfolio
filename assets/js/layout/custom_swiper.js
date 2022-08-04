$(document).ready(function(){

let swiper = new Swiper(".swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    //   autoplay:true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        360: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1600: {
            slidesPerView: 3,
        },
    }
});
})