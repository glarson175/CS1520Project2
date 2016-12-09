<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
		<meta content="author: glarson175">
    <title>Project 1</title>
    <link rel="stylesheet" href="./css/aboutme_stylesheet.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/navbar_stylesheet.css">
  </head>
	
  <body>
		
		<nav class="otherNav">
			<h1 onclick="return Home()"><a href="">Gabriel Larson</a></h1>
			<ul>
				<li onclick="return AboutMe()">
					<a href="">About Me</a>
				</li>
				<li>
					<a href="./docs/ResumeFall2016Epic.pdf" target=_blank>Resume</a>
				</li>
				<li onclick ="return Gallery()">
					<a href="">Cool Pictures</a>
				</li>
				<li onclick ="return Portfolio()">
					<a href="">Portfolio</a>
				</li>
				<li onclick="return Contact()">
					<a href="">Contact</a><!-- send to form-->
				</li>
			</ul>
		</nav>

		<div id="pageWrap">
			<div class="content-container">
				<div class="content">
				 <div id="personal">
						<img src="./img/Larson_Gabe.jpg">
						<div id="personalinfo">
							<br>
							<p> My Name is Gabriel Shawn Larson, most people call me Gabe cause people are too lazy to say the extra two syllables. I consider myself a huge nerd and cant wait till
							I have the time to colect comic books. I am a fan of Star Wars, Star Trek, Lord of the Rings/Hobbit, Hunger Games, Harry Potter, and pretty much all things Sci-Fi or Fantasy.
							I Listen to my music WAY too loud but it makes it easier to ignore the world when thigns get stressful. I Love Worship, Country, Christian Rock, Pop, Hip-Hop, Rap... So I'll listen to most things.
							I am pretty much a 5 year old stuck in a 21 year olds body. I love Disney and Dreamworks, innocent cartoons, building forts, climbing trees and nerf guns.</p>
						</div>
					</div>
				</div>
			</div>
		
		
			<footer>
				<p>
				&copy; 2016 Gabriel Larson
				</p>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
				<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				<script src="javascript/aboutme_script.js" type="text/javascript"></script>
			</footer>
		</div>
  </body>
</html>