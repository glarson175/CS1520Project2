<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
		<meta content="author: glarson175">
    <title>Project 1</title>
    <link rel="stylesheet" href="./css/gallery_stylesheet.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/navbar_stylesheet.css">
  </head>
	
  <body id="Everything">
		
		<header>
		<nav class="otherNav">
			<h1 onclick = "return Home()"><a href="">Gabriel Larson</a></h1>
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
		</header>
		<div id="pageWrap">
		<!-- carousel since it was recommended -->
		<div class ="content-container">
		<div class="content">
			<div class = "center">
			 <div id="runPics" class="carousel slide" data-ride="carousel">
				 <ol class="carousel-indicators">
					 <li data-target="#runPics" data-slide-to="0" class="active"></li>
					 <li data-target="#runPics" data-slide-to="1"></li>
					 <li data-target="#runPics" data-slide-to="2"></li>
					 <li data-target="#runPics" data-slide-to="3"></li>
				 </ol>
				 <div class="carousel-inner" role="listbox">
					 <div class="item active">
						 <img src="./img/cool-eagle-animal-wallpaper-backgrounds-hd.jpg">
					 </div>
					 <div class="item">
						 <img src="./img/DC.jpg">
					 </div>
					 <div class="item">
						 <img src="./img/awesome-background-wallpaper-1.jpg">
					 </div>
				 </div>
				 <!-- controls -->
				 <a class="left carousel-control" href="#runPics" role="button" data-slide="prev">
					 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					 <span class="sr-only">Previous</span>
				 </a>
				 <a class="right carousel-control" href="#runPics" role="button" data-slide="next">
					 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					 <span class="sr-only">Next</span>
				 </a>
			 </div>
			</div>
		</div>
		</div>
		
			<footer>
				<p>&copy; 2016 Gabriel Larson</p>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				<script src="javascript/gallery_script.js" type="text/javascript"></script>
			</footer>
		</div>
  </body>
</html>