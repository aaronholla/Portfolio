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
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<title>Aaron Holland</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/js/jquery.bxslider.min.js"></script>
	<link href="/css/jquery.bxslider.css" rel="stylesheet" />
	<script src="/js/javascript.js"></script>
</head>
<body>
	<div class="navbar">
		<div class="container">
			<div class="navbar-left">
				<a href="#">Aaron Holland</a>
			</div>
			<div class="navbar-right">
				<ul>
					<li><a href="#about" id="nav-about" class="current">About Me</a></li>
					<li><a href="#projects" id="nav-projects">Projects</a></li>
					<li><a href="#contact" id="nav-contact">Contact Me</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="section" id="about">
			<div class="container">
				<h1>About Me</h1>
				<a>My name is Aaron Holland, I am a Web Developer.</a>
				<div>
					<div id="avatar"></div>
					<canvas id="chart" width="460" height="460"></canvas>
				</div>
				<div id="skills">
					<div class="skills-section">
						<p>Front End</p>
						<div class="skillbar"><div id="skill1"><span>HTML5</span></div></div>
						<div class="skillbar"><div id="skill2"><span>CSS3</span></div></div>
						<div class="skillbar"><div id="skill3"><span>Javascript</span></div></div>
					</div>
					<div class="skills-section">
						<p>Back End</p>
						<div class="skillbar2"><div id="skill1"><span>PHP</span></div></div>
						<div class="skillbar2"><div id="skill2"><span>Ruby</span></div></div>
						<div class="skillbar2"><div id="skill3"><span>Wordpress</span></div></div>
					</div>
					<div class="skills-section">
						<p>Other</p>
						<div class="skillbar3"><div id="skill1"><span>Git</span></div></div>
						<div class="skillbar3"><div id="skill2"><span>MySql</span></div></div>
						<div class="skillbar3"><div id="skill3"><span>Photoshop</span></div></div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="projects">
			<div class="container">
				<h1>My Projects</h1>
				<a>I have many projects here are a few of my favorites.</a>
			</div>
			<div class="slider">
				<div id="binofparts">
					<div class="container">
						<div class="desc-left"><h2>Bin of Parts</h2><a>A non-profit I founded to help US FIRST Robotics teams to find the things that they need.</a><a class="resizeme-button" href="https://binofparts.com">View Site</a></div>
						<img src="/images/binofparts.png" alt="Bin of Parts" />
					</div>
				</div>
				<div id="robotics">
					<div class="container">
						<img src="/images/robosharks.png" alt="The Robo-Sharks"  />
						<div class="desc-right"><h2>TheRoboSharks.com</h2><a>I completely redesigned the robotics teams website when I was on the team. The site has since been taken down but you can view this amazing website using my archived version here.</a><a class="robotics-button" target="_blank" href="/robosharks">View Archive</a></div>
					</div>
				</div>
				<div id="resizeme">
					<div class="container">
						<div class="desc-left"><h2>ResizeMe</h2><a>ResizeMe is a Safari extension that adds a toolbar to allow you to resize the Safari window to six different sizes, including full screen. Resize your safari window to any size you want with just a single click!</a><a class="resizeme-button" href="/download/ResizeMe.safariextz.zip">Download</a></div>
						<img src="/images/resizeme.png" alt="Resize Me" />
					</div>
				</div>
				<div id="photogallery">
					<div class="container">
						<img src="/images/photogallery.png" alt="Photo Gallery"/>
						<div class="desc-right"><h2>Photo Gallery</h2><a>This is a photo gallery that I built from scratch. It is fully responsive and will look perfect on any device. Not only that but it will automatically load any images that are inside the images folder.</a><a class="robotics-button" target="_blank" href="/photogallery">View Demo</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="contact">
			<div class="container">
				<h1>Contact Me</h1>
				<a>Feel free to contact me about anything.</a>
				<ul id="contact-links">
					<li><a class="social-button" href="https://github.com/aaronholla/Portfolio"><i class="fa fa-github fa-2x pull-left"></i> View on GitHub</a></li>
					<li><a class="social-button" href="https://twitter.com/aaronholla_"><i class="fa fa-twitter fa-2x pull-left"></i> Follow on Twitter</a></li>
					<li><a href="http://referrals.trhou.se/aaronholland" target="_blank"><img src="/images/treehouse.png"/></a></li>
				</ul>
				<form action="" method="post">
					<input type="text" name="name" placeholder="Your Name">
				  	<input type="text" name="email" placeholder="Your Email">
				  	<input type="text" name="address" placeholder="Please Leave Blank." style="display:none;">
				 	<textarea name="message" rows="16" cols="28" placeholder="Have a question for me?"></textarea>
				  	<input type="submit" id="submit" value="Send">
				</form>
			</div>
		</div>
	</div>
</body>
</html>