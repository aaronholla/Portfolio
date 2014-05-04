$(document).ready(function () {
   $('#contact').hide();
   $('.projects').hide();

   $('.project-links ul li a').click(function(){
        $('.logo img').animate({'height':'145', 'margin-left':'32px'},'fast');
        $('.navbar').animate({'height':'150'},'fast');
        $('.project-links ul li a img').animate({'height':'100'},'fast');
        $('.project-links').animate({'top':'150', 'margin-left':'85px'}, 'fast');
        $('.logo-bottom').hide();
        $('.projects').fadeIn();
        $('.projects').slick();
    });
});