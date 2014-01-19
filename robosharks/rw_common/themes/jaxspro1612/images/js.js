$j(document).ready(function() {
					   
	$j('#content').wrap('<div id="content-wrapper"></div>');
						   
	function pageload(hash) {
		if(hash.substr(hash.length-3, hash.length) == "php") {
			$j("#content-wrapper").load(hash.substr(0,hash.length-3) + ".php #content",'',function(){
				$j('#content-wrapper').show('normal');
				$j('#load').fadeOut('normal');												   
			});
	}
		else if(hash.substr(hash.length-3, hash.length) == "htm") {
				$j("#content-wrapper").load(hash.substr(0,hash.length-3) + ".htm #content",'',function(){
					$j('#content-wrapper').show('normal');
					$j('#load').fadeOut('normal');												   
				});
		}
		
		else if(hash) {
			$j("#content-wrapper").load(hash + ".html #content",'',function(){
			
				$j('#content-wrapper').show('normal');
				$j('#load').fadeOut('normal');												   
			});
		} 
	}
	
	$j.historyInit(pageload);			   

	$j('.nav li a.self').livequery('click',function(){
								  
		var hash = $j(this).attr('href');
		hash = hash.replace(/^.*#/, '');
		
		if (hash.substr(hash.length-3, hash.length) == "php") {
			hash = hash.substr(0, hash.length-4) + "php";
		}
		else if (hash.substr(hash.length-3, hash.length) == "htm") {
			hash = hash.substr(0, hash.length-4) + "htm";
		}
		else {
			hash = hash.substr(0,hash.length-5);
		}

		$j('#content-wrapper').hide('slow',function(){$j.historyLoad(hash)});
		$j('#load').remove();
		$j('#wrapper').append('<span id="load">LOADING...</span>');
		$j('#load').fadeIn('normal');
		return false;
		
	});

	$j('.blog-read-more a').livequery('click',function(){
								  
		var hash = $j(this).attr('href');
		hash = hash.replace(/^.*#/, '');
		
		if (hash.substr(hash.length-3, hash.length) == "php") {
			hash = hash.substr(0, hash.length-4) + "php";
		}
		else if (hash.substr(hash.length-3, hash.length) == "htm") {
			hash = hash.substr(0, hash.length-4) + "htm";
		}
		else {
			hash = hash.substr(0,hash.length-5);
		}

		$j('#content-wrapper').hide('slow',function(){$j.historyLoad(hash)});
		$j('#load').remove();
		$j('#wrapper').append('<span id="load">LOADING...</span>');
		$j('#load').fadeIn('normal');
		return false;
		
	});
	
	$j('a.blog-category-link-enabled').livequery('click',function(){
								  
		var hash = $j(this).attr('href');
		hash = hash.replace(/^.*#/, '');
		
		if (hash.substr(hash.length-3, hash.length) == "php") {
			hash = hash.substr(0, hash.length-4) + "php";
		}
		else if (hash.substr(hash.length-3, hash.length) == "htm") {
			hash = hash.substr(0, hash.length-4) + "htm";
		}
		else {
			hash = hash.substr(0,hash.length-5);
		}

		$j('#content-wrapper').hide('slow',function(){$j.historyLoad(hash)});
		$j('#load').remove();
		$j('#wrapper').append('<span id="load">LOADING...</span>');
		$j('#load').fadeIn('normal');
		return false;
	});


$j('ul.blog-tag-cloud a').livequery('click',function(){
							  
	var hash = $j(this).attr('href');
	hash = hash.replace(/^.*#/, '');
	
	if (hash.substr(hash.length-3, hash.length) == "php") {
		hash = hash.substr(0, hash.length-4) + "php";
	}
	else if (hash.substr(hash.length-3, hash.length) == "htm") {
		hash = hash.substr(0, hash.length-4) + "htm";
	}
	else {
		hash = hash.substr(0,hash.length-5);
	}

	$j('#content-wrapper').hide('slow',function(){$j.historyLoad(hash)});
	$j('#load').remove();
	$j('#wrapper').append('<span id="load">LOADING...</span>');
	$j('#load').fadeIn('normal');
	return false;
	
});


	$j('a.blog-permalink').livequery('click',function(){
								  
		var hash = $j(this).attr('href');
		hash = hash.replace(/^.*#/, '');
		
		if (hash.substr(hash.length-3, hash.length) == "php") {
			hash = hash.substr(0, hash.length-4) + "php";
		}
		else if (hash.substr(hash.length-3, hash.length) == "htm") {
			hash = hash.substr(0, hash.length-4) + "htm";
		}
		else {
			hash = hash.substr(0,hash.length-5);
		}

		$j('#content-wrapper').hide('slow',function(){$j.historyLoad(hash)});
		$j('#load').remove();
		$j('#wrapper').append('<span id="load">LOADING...</span>');
		$j('#load').fadeIn('normal');
		return false;
		
	});
		
	$j('a.ajaxinternal').livequery('click',function(){
								  
		var hash = $j(this).attr('href');
		hash = hash.replace(/^.*#/, '');
		
		if (hash.substr(hash.length-3, hash.length) == "php") {
			hash = hash.substr(0, hash.length-4) + "php";
		}
		else if (hash.substr(hash.length-3, hash.length) == "htm") {
			hash = hash.substr(0, hash.length-4) + "htm";
		}
		else {
			hash = hash.substr(0,hash.length-5);
		}

		$j('#content-wrapper').hide('slow',function(){$j.historyLoad(hash)});
		$j('#load').remove();
		$j('#wrapper').append('<span id="load">LOADING...</span>');
		$j('#load').fadeIn('normal');
		return false;
		
	});

});

/* This is a revised revised version of the script that was inspired by NetTuts modified by ME into JAXS PRO (robbie White) and worked on by Patrick Eisenmann Andre Bluehs for PHP*/