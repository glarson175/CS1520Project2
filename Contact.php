<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cs1520";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	} 
	
	if(isset($_POST['#form'])){
		 extract($_POST);
		 echo $first_name . $last_name;
		$first_name = $_POST['first_name'];
		$last_name  =$_POST['last_name'];
		$email = $_POST['email'];
		$messsage = $_POST['message'];
		
		$sql = "INSERT INTO people (firstname, lastname, email, message)
VALUES ('why', 'wont', 'this', 'work')";
       
	}
	


$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
		<meta content="author: glarson175">
    <title>Project 1</title>
    <link rel="stylesheet" href="./css/contact_stylesheet.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/navbar_stylesheet.css">
  </head>
	
  <body>
		
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
		<div id="sent">Message Sent</div>
		<div id="pageWrap">
			<div class="content-container">
				<div class="content">
					<div class="social" id="LI">
							<img id="LI" src="./img/LinkedIn-Logo.png">
							<img id="gh" src="./img/github_icon.png">
							<img id="fb" src="./img/facebook1.png">
							
							<img id="ig" src="./img/instagram-Logo.png">
					</div>
					<div id="form" class="center">
						<form action="" method="post">
							
							<div>First Name:<br> <input type="text" name="first_name"></div>
							<div>Last Name:<br> <input type="text" name="last_name" ></div>
							<div>Email Address:<br> <input type="text" name="email" ></div>
							<div>Message:<br><textarea rows="5" name="message"  cols="30" ></textarea></div>
							<div><input type="submit" name="submit" value="submit"></div>
						</form>
					</div>
				</div>
			</div>
	
			<footer>
				<p>&copy; 2016 Gabriel Larson</p>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
				<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				<script src="javascript/contact_script.js" type="text/javascript"></script>
			</footer>
		</div>
  </body>
</html>
