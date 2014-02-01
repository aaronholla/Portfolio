var dir = "/photogallery/images/gallery/";
var fileextension = ".jpg";
var classname = "image-container";
$.ajax({
    url: dir,
    success: function (data) {
        $(data).find("a:contains(" + fileextension + ")").each(function () {
            var filename = this.href.replace(window.location, "").replace("http:///", "");
            var title = filename.replace(".jpg", "");
            title = title.replace(/_/g, ' ');
            title = title.toLowerCase().replace(/\b[a-z]/g, function(letter) {
			    return letter.toUpperCase();
			});
            $(".gallery").append($('<div class="' + classname + '"><img title="' + title + '" src="' + dir + filename + '"></div>'));
        });
        $(function(){
			$("div.image-container").click(function() {
				$(this).parent().find('div.image-container').not($(this)).removeClass('current');
				$(this).toggleClass('current');
			    $('html, body').animate({
			    	scrollTop: $(".current").offset().top
			    }, 500);
			});
		});
    }
});