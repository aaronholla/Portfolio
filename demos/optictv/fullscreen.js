$(document).ready(function(){
	$('.fs-button').on('click', function(){
		var elem = document.getElementById('streams');
		if (document.webkitFullscreenElement) {
			document.webkitCancelFullScreen();
		} else {
			elem.webkitRequestFullScreen();
		};
	});
});