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
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<title>Aaron Holland</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/js/javascript.js"></script>
</head>
<body>
	<nav class="navbar">
		<div id="background"></div>
        <div class="holder">
            <div class="title"><span>Aaron Holland</span></div>
            <ul>
                <li><a href="#aboutme" id="nav-about">About Me</a></li>
                <li><a href="#projects" id="nav-projects">Projects</a></li>
                <li><a href="#contact" id="nav-contact">Contact</a></li>
                <li><a href="/resume.html" id="button">Résumé</a></li>
            </ul>
        </div>
    </nav>
	<section class="section" id="aboutme">
		<div class="banner">
			<img src="/images/banner.jpg">
		</div>
		<div id="about">
			<h1>Hi, my name is Aaron Holland.</h1>
			<h2>I am a Web Developer.</h2>
		</div>
	</section>
	<section class="section" id="social">
		<ul class="social-links">
			<li><a href="https://github.com/aaronholla" target="_blank" title="Github"><i class="fa fa-github-alt fa-5x"></i></a></li>
			<li><a href="https://twitter.com/aaronholla_" target="_blank" title="Twitter"><i class="fa fa-twitter fa-5x"></i></a></li>
			<li><a title="Treehouse" href="http://teamtreehouse.com/aaronholland" target="_blank" id="treehouse-social"><img src="/images/treehouselogo.png"></a></li>
		</ul>
	</section>
	<section class="section">
		<div id="projects">
			<div class="container">
				<h1>Projects</h1>
			</div>
			<div id="binofparts">
				<div class="container">
					<div class="desc-left">
				        <h2>Bin of Parts</h2>
				        <a>A non-profit organization I founded that hosts an online parts database for FRC teams. Bin of Parts also offers a tool for regional events to inventory their parts.</a>
				        <hr /><ul class="technologies"><li>Ruby on Rails</li><li>iOS</li><li>Javascript</li><li>Vagrant</li><li>HTML</li><li>SCSS</li></ul>
				        <a class="resizeme-button desc-button" target="_blank" href="http://www.binofparts.com" id="button">View Site</a>
				    </div>
				    <img src="/images/binofparts.png" alt="Bin of Parts" width="500">
				</div>
			</div>
			<div id="robosharks">
				<div class="container">
					<img src="/images/robosharks.png" alt="The Robo-Sharks" width="500">
					<div class="desc-right">
						<h2>TheRoboSharks.com</h2>
						<a>I completely redesigned the robotics teams website when I was on the team. The site has since been taken down but you can view this amazing website using my archived version here.</a>
						<hr /><ul class="technologies"><li>jQuery</li><li>HTML</li><li>CSS</li></ul>
						<a class="robotics-button desc-button" target="_blank" href="/robosharks" id="button">View Archive</a>
					</div>
				</div>
			</div>
			<div id="resizeme">
				<div class="container">
					<div class="desc-left">
						<h2>ResizeMe</h2>
						<a>ResizeMe is a Safari extension that adds a toolbar to allow you to resize the Safari window to six different sizes, including full screen. Resize your safari window to any size you want with just a single click!</a>
						<hr /><ul class="technologies"><li>Javascript</li><li>HTML</li><li>CSS</li></ul>
						<a class="resizeme-button desc-button" href="/download/ResizeMe.safariextz.zip" id="button">Download</a>
					</div>
					<img src="/images/resizeme.png" alt="Resize Me" width="500">
				</div>
			</div>
			<div id="photogallery">
				<div class="container">
					<img src="/images/photogallery.png" alt="Photo Gallery" width="600">
					<div class="desc-right">
						<h2>Photo Gallery</h2>
						<a>This is a photo gallery that I built from scratch. It is fully responsive and will look perfect on any device. Not only that but it will automatically load any images that are inside the images folder.</a>
						<hr /><ul class="technologies"><li>jQuery</li><li>HTML</li><li>CSS</li></ul>
						<a class="robotics-button" target="_blank" href="/photogallery" id="button">View Demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section" id="contact">
		<div class="container">
			<h1>Contact Me</h1>
			<form action="" method="post">
				<input type="text" name="name" placeholder="Your Name">
			  	<input type="text" name="email" placeholder="Your Email">
			  	<input type="text" name="address" placeholder="Please Leave Blank." style="display:none;">
			 	<textarea name="message" rows="16" cols="28" placeholder="Have a question for me?"></textarea>
			  	<input type="submit" id="submit" value="Send">
			</form>
		</div>
	</section>
</body>
</html>
