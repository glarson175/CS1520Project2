<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
		<meta content="author: glarson175">
    <title>Project 1</title>
    <link rel="stylesheet" href="./css/home_stylesheet.css">
		 <!-- for the carousel -->
    
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	
  <body>
		<div id="pageWrap">
			<nav id="HomeNav">
				<h1>Gabriel Larson</h1>
				<h2>A Grateful Believer in Jesus Christ</h2>
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
		
		
			<footer>
				<p>&copy; 2016 Gabriel Larson</p>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				<script src="javascript/home_script.js" type="text/javascript"></script>
			</footer>
		</div>
  </body>
</html>