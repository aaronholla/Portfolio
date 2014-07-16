<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);

	if ($name == "" OR $email == "" OR $message == "") {
		//echo "All fields are required.";
		header('Location: contact.php');
		exit;
	}

	foreach ($_POST as $value) {
		if( stripos($value, 'Content-Type:') !== FALSE){
			exit;
		}
	}

	if ($_POST['address'] != ""){
		exit;
	}

	$headers = "From: " . $email;
	$subject = $name . " - Portfolio Contact Form";

	mail('aaronholla@gmail.com', $subject, $message, $headers);

	header('Location: contact.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<title>Aaron Holland</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/js/javascript.js"></script>
	<script type="text/javascript" src="/slick/slick.min.js"></script>
</head>
<body>
	<div class="navbar">
		<div class="holder">
			<div class="logo">
				<img src="/images/logo.png">
			</div>
			<div class="title"><span>Aaron Holland</span></div>
			<div class="resume"><a href="/resume.html"><span>View my Résumé</span></a></div>
			<ul class="social-links">
				<li><a href="https://github.com/aaronholla" target="_blank" title="Github"><i class="fa fa-github fa-2x"></i></a></li>
				<li><a href="https://twitter.com/aaronholla_" target="_blank" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
				<li class="contact-button"><a title="Contact Me"><i class="fa fa-envelope-o fa-2x"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="section" id="contact">
			<div class="container">
				<h1>Contact Me</h1>
				<form action="" method="post">
					<input type="text" name="name" placeholder="Your Name">
				  	<input type="text" name="email" placeholder="Your Email">
				  	<input type="text" name="address" placeholder="Please Leave Blank." style="display:none;">
				 	<textarea name="message" rows="16" cols="28" placeholder="Have a question for me?"></textarea>
					<a class="contact-button"><i class="fa fa-times"></i> Cancel</a>
				  	<input type="submit" id="submit" value="Send">
				</form>
			</div>
		</div>
		<div class="project-links">
			<ul>
				<li><a id="binofparts-link" title="Bin of Parts"><img src="/images/binofparts-icon.png"></a></li>
				<li><a id="robotics-link" title="Robo-Sharks"><img src="/images/SharkLogo.png"></a></li>
				<li><a id="resizeme-link" title="Resize Me"><img src="/images/ResizeMe-Icon.png"></a></li>
				<li><a id="photogallery-link" title="Photo Gallery"><img src="/images/photogallery-icon.png"></a></li>
			</ul>
		</div>
		<div class="section">
			<div class="projects">
				<div id="binofparts">
					<div class="container">
						<div class="desc-left"><h2>Bin of Parts</h2><a>A non-profit I founded to help US FIRST Robotics teams to find the things that they need.</a><a class="resizeme-button" href="https://binofparts.com">View Site</a></div>
						<img src="/images/binofparts.png" alt="Bin of Parts" width="500" />
					</div>
				</div>
				<div id="robotics">
					<div class="container">
						<img src="/images/robosharks.png" alt="The Robo-Sharks" width="500" />
						<div class="desc-right"><h2>TheRoboSharks.com</h2><a>I completely redesigned the robotics teams website when I was on the team. The site has since been taken down but you can view this amazing website using my archived version here.</a><a class="robotics-button" target="_blank" href="/robosharks">View Archive</a></div>
					</div>
				</div>
				<div id="resizeme">
					<div class="container">
						<div class="desc-left"><h2>ResizeMe</h2><a>ResizeMe is a Safari extension that adds a toolbar to allow you to resize the Safari window to six different sizes, including full screen. Resize your safari window to any size you want with just a single click!</a><a class="resizeme-button" href="/download/ResizeMe.safariextz.zip">Download</a></div>
						<img src="/images/resizeme.png" alt="Resize Me" width="500" />
					</div>
				</div>
				<div id="photogallery">
					<div class="container">
						<img src="/images/photogallery.png" alt="Photo Gallery" width="600" />
						<div class="desc-right"><h2>Photo Gallery</h2><a>This is a photo gallery that I built from scratch. It is fully responsive and will look perfect on any device. Not only that but it will automatically load any images that are inside the images folder.</a><a class="robotics-button" target="_blank" href="/photogallery">View Demo</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>