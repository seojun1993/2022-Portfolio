$(document).ready(function () {

    $(".mobile_gnb").stop().css("right", "-" + $(".mobile_gnb").outerWidth() + "px");
    $(".mobile_gnb_wrap").hide();

    var Menuflag = false;
    $(".gnb_open").on("click", function (e) {
        e.preventDefault();
        if (!Menuflag) {
            $("html").css("overflow", "hidden");
            $(".mobile_gnb_wrap").show();
            $(".mobile_gnb").stop().animate({
                right: 0
            }, 300);

            Menuflag = true;
        }
    });

    $(".gnb_close, .mobile_gnb_overlay").on("click", function () {
        if (Menuflag) {
            $("html").css("overflow", "visible");
            $(".mobile_gnb").stop().css("right", "-" + $(".mobile_gnb").outerWidth() + "px");
            $(".mobile_gnb_wrap").hide();

            Menuflag = false;
        }
    });
});