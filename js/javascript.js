$(document).ready(function () {
   $('#contact').hide();
   $('.projects').hide();

   $('.project-links ul li').click(function(){

        if($('.project-links').hasClass('show')) {
            var i = $(this).index();
            $('.projects').slickGoTo(i);
        } else {
            $('.project-links').addClass('show');
            $('.navbar').animate({'height':'150'},'fast');
            $('.project-links ul li').animate({'height':'100', 'width':'100'},'fast');
            $('.project-links ul li a img').animate({'height':'100'},'fast');
            $('.project-links').animate({'top':'150', 'margin-left':'85px'}, 'fast');
            $('.title').animate({'width':'250px', 'left':'15%'}, 'fast');
            $('.resume').animate({'width':'135px', 'left':'15%'}, 'fast');
            $('.social-links').animate({'width':'100px','margin-top': '0px', 'right':'20%'}, 'fast');
            $('.projects').fadeIn();
        }
    });
   $('.contact-button').click(function(){

        if($('.social-links').hasClass('show')) {
            //contact is showing
            $('.social-links').removeClass('show');
            $('#contact').slideUp();
        } else {
            $('.social-links').addClass('show');
            $('#contact').slideDown();
        }
    });
});
