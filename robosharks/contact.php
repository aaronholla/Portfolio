<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'To contact us, please fill in the form below.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="robots" content="all" />
		<link rel="apple-touch-icon" href="http://therobosharks.com/apple-touch-icon.png" />
		<!-- User defined head content such as meta tags and encoding options -->
		<title>FRC Team 1612 | Contact</title> 
        
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/styles.css"  />
		<link rel="stylesheet" type="text/css" media="print" href="rw_common/themes/jaxspro1612/print.css"  />
		<link rel="stylesheet" type="text/css" media="handheld" href="rw_common/themes/jaxspro1612/handheld.css"  />
       
		<script type="text/javascript" src="rw_common/themes/jaxspro1612/javascript.js"></script>

		<link rel="stylesheet" type="text/css" href="rw_common/themes/jaxspro1612/images/searchincludes/default.css" id="default"  />
		<link rel="stylesheet" type="text/css" href="rw_common/themes/jaxspro1612/images/searchincludes/dummy.css" id="dummy_css"  />
        
       
		<link rel="alternate" type="application/rss+xml" title="Robo-Sharks RSS Feed" href="http://therobosharks.com/blog_files/blog.xml" />
		
		
                
        <!-- Header of plugin -->
        
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/colourtag.css" />
		
	
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/gradtop/gradtopblack.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/images/editableimages/customheader5.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/twitter/twitteroff.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/logoposition/left.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/logoposition/2ndright.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/navicons/toplevel/topoff.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/navicons/2ndlevel/2ndoff.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/navicons/3rdlevel/3rdoff.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/images/editableimages/bodybgnone.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
								<script type="text/javascript" src="rw_common/themes/jaxspro1612/images/jquery-1.2.6.min.js"></script>
								
								<script type="text/javascript" src="rw_common/themes/jaxspro1612/images/jquery.livequery.js"></script>
								
								<script type="text/javascript" src="rw_common/themes/jaxspro1612/images/jquery.metadata.js"></script>
								

								<script type="text/javascript">
								var $j = jQuery.noConflict();
								</script>

								<script type="text/javascript" src="rw_common/themes/jaxspro1612/images/history.js"></script>
								<script type="text/javascript" src="rw_common/themes/jaxspro1612/images/js.js"></script>
								
								<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
								<script type="text/javascript">
									
									$j(document).ready(function(){
										$j("ul.nav li a").click(ajaxnavcurrent);
									});
									
									$j(document).ready(function(){
										$j("a.ajaxinternal").livequery('click',ajaxnavcurrent);
									});

									function ajaxnavcurrent (event) {
										var $jtarget = $j(event.target);
										$j("a.currentajaxpage").removeClass("currentajaxpage");	
										$jtarget.addClass("currentajaxpage");
										return true;
									}		
								</script>

								<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
								<script type="text/javascript" src="rw_common/themes/jaxspro1612/images/jquery.fancybox-1.2.6.js"></script>
															    <link rel="stylesheet" type="text/css" href="rw_common/themes/jaxspro1612/images/fancy.css" media="screen" />

															    <script type="text/javascript">

																$j("a[@rel$='lightbox']").livequery(function(){ 
																	$j("a[@rel$='lightbox']").fancybox({
																			'overlayOpacity': 0.5,
																			'overlayShow':	true
																	});
																});
																
																$j("a[@rel$='lightbox2']").livequery(function(){ 
																	$j("a[@rel$='lightbox2']").fancybox({
																		'overlayOpacity': 0.5,
																		'hideOnContentClick': false,
																		'overlayShow':	true,
																		'frameWidth': 352, 
																		'frameHeight': 288,
																		'padding':	10
																	});
																});
																
																$j("a[@rel$='lightbox3']").livequery(function(){ 
																	$j("a[@rel$='lightbox3']").fancybox({
																			'overlayOpacity': 0.5,
																			'overlayShow':	true
																	});
																});

															    </script>
															
								<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/ajaxindicator/blueonblacksquares.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/width/full.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/wrapperborderwidth/0px.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/images/menu/black_first_menu_1border.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="rw_common/themes/jaxspro1612/css/fake.css" />
																
									<!-- User defined javascript -->
																								
									</head>
									<?php flush(); ?>
								<body>
								<div id="completegradient">
								
								<div id="container">

									<div id="wrapper">
										<div id="topheader"><a href="SponsorUs.html" class="ajaxinternal">Would You like to Sponsor Us? Click here to become a Sponsor!</a></div>
                                            <div id="pageHeader"><!-- Start page header -->
                                                <h1 class="sitelogo"><a href="index.html"><img src="rw_common/images/The%20Robo-Sharks%20FRC%20Team%201612.png" width="398" height="100" alt="Site logo"/></a></h1>
                                                 
                                            </div><!-- End page header -->	
											<h1 class="sitetitle"></h1>
											<h1 class="siteslogan"></h1>
										<div id="header_image">
											<div id="menu">
												<div class="menu_container">
													<ul class="nav"><li><a href="index.html" class="self"><img src="rw_common/themes/jaxspro1612/navicons/Home.png" alt="Home" height="40px" width="40px" />Home</a></li><li><a href="blog.php" class="external"><img src="rw_common/themes/jaxspro1612/navicons/Blog.png" alt="Blog" height="40px" width="40px" />Blog</a></li><li><a href="pictures.html" class="self"><img src="rw_common/themes/jaxspro1612/navicons/Media.png" alt="Media" height="40px" width="40px" />Media</a><ul class="nav"><li><a href="pictures.html" class="self"><img src="rw_common/themes/jaxspro1612/navicons/Pictures.png" alt="Pictures" height="40px" width="40px" />Pictures</a><ul class="nav"><li><a href="2009.html" class="self"><img src="%pathto(navicons/2009 Season.png)%" alt="2009 Season" height="40px" width="40px" />2009 Season</a></li><li><a href="2008.html" class="self"><img src="%pathto(navicons/2008 Season.png)%" alt="2008 Season" height="40px" width="40px" />2008 Season</a></li><li><a href="2007.html" class="self"><img src="%pathto(navicons/2007 Season.png)%" alt="2007 Season" height="40px" width="40px" />2007 Season</a></li></ul></li></ul></li><li><a href="history.html" class="self"><img src="%pathto(navicons/History.png)%" alt="History" height="40px" width="40px" />History</a><ul class="nav"><li><a href="history.html" class="self"><img src="%pathto(navicons/The Games.png)%" alt="The Games" height="40px" width="40px" />The Games</a></li><li><a href="robots.html" class="self"><img src="%pathto(navicons/The Robots.png)%" alt="The Robots" height="40px" width="40px" />The Robots</a></li><li><a href="awards.html" class="self"><img src="%pathto(navicons/Awards.png)%" alt="Awards" height="40px" width="40px" />Awards</a></li><li><a href="members.html" class="self"><img src="%pathto(navicons/Previous Members.png)%" alt="Previous Members" height="40px" width="40px" />Previous Members</a></li></ul></li><li><a href="mission.html" class="self"><img src="%pathto(navicons/About Us.png)%" alt="About Us" height="40px" width="40px" />About Us</a><ul class="nav"><li><a href="mission.html" class="self"><img src="%pathto(navicons/Our Mission.png)%" alt="Our Mission" height="40px" width="40px" />Our Mission</a></li><li><a href="team.html" class="self"><img src="%pathto(navicons/The Team.png)%" alt="The Team" height="40px" width="40px" />The Team</a></li><li><a href="game.html" class="self"><img src="%pathto(navicons/The Game.png)%" alt="The Game" height="40px" width="40px" />The Game</a></li><li><a href="website.html" class="self"><img src="%pathto(navicons/The Website.png)%" alt="The Website" height="40px" width="40px" />The Website</a></li><li><a href="mentors.html" class="self"><img src="rw_common/themes/jaxspro1612/navicons/Mentors.png" alt="Mentors" height="40px" width="40px" />Mentors</a></li></ul></li><li><a href="links.html" class="self"><img src="%pathto(navicons/Resources.png)%" alt="Resources" height="40px" width="40px" />Resources</a><ul class="nav"><li><a href="links.html" class="self"><img src="%pathto(navicons/Useful Links.png)%" alt="Useful Links" height="40px" width="40px" />Useful Links</a></li><li><a href="frcresources.html" class="self"><img src="%pathto(navicons/FRC Resources.png)%" alt="FRC Resources" height="40px" width="40px" />FRC Resources</a></li></ul></li><li><a href="SponsorUs.html" class="self"><img src="rw_common/themes/jaxspro1612/navicons/Sponsors.png" alt="Sponsors" height="40px" width="40px" />Sponsors</a><ul class="nav"><li><a href="sponsors.html" class="self"><img src="%pathto(navicons/Current Sponsors.png)%" alt="Current Sponsors" height="40px" width="40px" />Current Sponsors</a></li><li><a href="SponsorUs.html" class="self"><img src="%pathto(navicons/Become A Sponsor.png)%" alt="Become A Sponsor" height="40px" width="40px" />Become A Sponsor</a></li></ul></li><li><a href="contact.php" class="currentajaxpage self"><img src="rw_common/themes/jaxspro1612/navicons/Contact.png" alt="Contact" height="40px" width="40px" />Contact</a></li></ul>
												</div><span class="menu_end"></span>
											</div>
										</div>
										<div id="content">
										<div id="padding">
										<div id="sidebarContainer" style="display: none;"><!-- Start Sidebar wrapper -->
											<div class="sideHeader"></div><!-- Sidebar header -->
											<div id="sidebar"><!-- Start sidebar content -->
												 <!-- sidebar content such as the blog archive links -->
												<!-- sidebar content you enter in the page inspector -->
											</div><!-- End sidebar content -->
										</div><!-- End sidebar wrapper -->
											<div id="contentContainer">
												<div id="rapidweavedcontent"><!-- Start content -->
													
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./contact_files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message:</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<label>Please check before sending:</label> *
		<input <?php echo check('element4', 'checkbox'); ?> type="checkbox" name="form[element4]" value="yes"/><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
												</div><!-- End content -->
											</div><!-- End main content wrapper -->
								
								<img style="display: none;" alt="This image is a theme.plist hack" src="rw_common/themes/jaxspro1612/images/blank.gif" />
		<!-- Style variations - these are set up in the theme.plist -->
        
            <div class="clearer"></div>
			<div id="foot"><img src="rw_common/themes/jaxspro1612/images/foot.jpg" alt="footer" />
				<div id="footer-right">
				<p>
					<a href="http://validator.w3.org/check?uri=referer"><img 
						style="border:0;width:88px;height:31px" 
						src="http://www.w3.org/Icons/valid-xhtml10-blue"
				        alt="Valid XHTML 1.0 Strict" /></a>
						<a href="http://jigsaw.w3.org/css-validator/check/referer">
						    <img style="border:0;width:88px;height:31px"
						        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
						        alt="Valid CSS!" />
						</a>
				</p>
				<div id="footer-external">
				<a class="footer-twitter" href="http://twitter.com/RoboSharks1612" title="Twitter">Twitter</a><a class="footer-break">  |</a>
				<a class="footer-facebook" href="http://www.facebook.com/group.php?gid=122433131499" title="Facebook">Facebook</a><a class="footer-break">  |</a>
				<a class="footer-rss" href="http://therobosharks.com/blog_files/blog.xml" title="Rss Feed">RSS</a>
				</div><!-- end footer external -->
				
				</div><!-- end footer right -->
			<p>&copy; 2010 The Robo-Sharks 1612 <a href="#" id="rw_email_contact">Give Feedback</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":Ro";var _rwObsfuscatedHref3 = "boS";var _rwObsfuscatedHref4 = "har";var _rwObsfuscatedHref5 = "ks1";var _rwObsfuscatedHref6 = "612";var _rwObsfuscatedHref7 = "@gm";var _rwObsfuscatedHref8 = "ail";var _rwObsfuscatedHref9 = ".co";var _rwObsfuscatedHref10 = "m";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></p></div>
	    </div>
	</div>	
	
	<div class="clearer"></div>
	
	</div>
	</div><!-- End container -->
	</div><!-- End complete gradient div -->
</body>
</html>
