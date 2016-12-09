$(document).ready(function(){
   	$('#pageWrap').fadeIn(1000);
});

function Home() {
	$('#pageWrap').fadeOut(500, function(){
			window.location.href = "Home.php";
		});
		return false;
}
function AboutMe(){
	$('#pageWrap').fadeOut(500, function(){
			window.location.href = "AboutMe.php";
	});
	return false;
}

function Gallery(){
	
$('#pageWrap').fadeOut(500, function(){
			window.location.href = "Gallery.php";
	});
	return false;
}

function Portfolio(){
	$('#pageWrap').fadeOut(500, function(){
			window.location.href = "Portfolio.php";
	});
	return false;
}

function Contact(){
	$('#pageWrap').fadeOut(500, function(){
			window.location.href = "Contact.php";
	});
	return false;
}