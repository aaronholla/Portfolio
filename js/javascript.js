$(document).ready(function () {
   $("#nav-about").click(function() {
        $('html, body').animate({
            scrollTop: $("#aboutme").offset().top
        }, 500);
    });
   $("#nav-projects").click(function() {
        $('html, body').animate({
            scrollTop: $("#projects").offset().top - 75
        }, 500);
    });
   $("#nav-contact").click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top - 75
        }, 500);
    });
});
